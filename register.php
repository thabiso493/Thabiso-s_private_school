<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/overallheader.php'; 

if (empty($_POST) === false){
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email', 'cellphoneNo', 'alt_cellNo', 'suburb', 'street_name', 'City', 'Postal_code', 'birthC_ID_copy', 'Student_image');
	foreach($_POST as $key=>$value){
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true){
		if (user_exists($_POST['username']) === true){
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true){
			$errors[] = 'Your username must not contain any spaces';
		}
		if (strlen($_POST['password']) < 6){
			$errors[] = 'Your password must be at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']){
			$errors[] = 'Your passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)=== false){
			$errors[] = 'A valid email address is required!';
		}
		if (email_exists($_POST['email']) === true){
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

?>


<style>
 body {
		 background-image:url(images/ktyxhj_1016.jpg);
	 }
</style>
	<h1>Register</h1>
	
<?php
if (isset($_GET['success']) && empty($_GET['success'])){
	echo 'You\'ve been registered successfully!';
}else{
	if (empty($_POST) === false && empty($errors) === true){
	$Register_data = array(
		'username'  		=>  $_POST['username'],
		'password'  		=>  $_POST['password'],
		'first_name' 	 	=>  $_POST['first_name'],
		'last_name'  		=>  $_POST['last_name'],
		'email'  			=>  $_POST['email'],
		'cellphoneNo'		=>  $_POST['cellphoneNo'],
		'alt_cellNo'		=>  $_POST['alt_cellNo'],
		'suburb'			=>  $_POST['suburb'],
		'street_name'		=>  $_POST['street_name'],
		'City'				=>  $_POST['City'],
		'Postal_code'		=>  $_POST['Postal_code'],
		'birthC_ID_copy'	=>  $_POST['birthC_ID_copy'],
		'Student_image'		=>  $_POST['Student_image'],
		);
	
		register_user($register_data);
		header('Location: register.php?success');
		exit();
	
	}else if (empty($errors) === false){
		echo output_errors($errors);
	}


	
?>


		<form action="" method="post">
		<ul>
		<li>
			Student Username*:<br>
			<input type="text" name="username">
		</li>
		<li>
			Student Password*:<br>
			<input type="password" name="password">
		</li>
		<li>
			Re-type your password*:<br>
			<input type="password" name="password_again">
		</li>
		<li>
			First Name*:<br>
			<input type="text" name="first_name">
		</li>
		<li>
			Last Name:<br>
			<input type="text" name="last_name">
		</li>
		<li>
			Email*:<br>
			<input type="text" name="email">
		</li>
		<li>
			Cell phone number*:<br>
			<input type="text" name="cellphoneNo">
		</li>
		<li>
			altenative cell phone number*:<br>
			<input type="text" name="alt_cellNo">
		</li>
		<li>
			<b>Residential Address</b><br>
			Suburb*:<br>
			<input type="text" name="suburb">
		<br>
			Street Name and Number*:<br>
			<input type="text" name="street_name">
		<br>
			City*:<br>
			<input type="text" name="City">
		<br>
			Postal code*:<br>
			<input type="text" name="Postal_code">
		</li>
		
		<li>
			<b>Birth certificate copy/ID copy*</b>:<br>
			<input type="file" name="birthC_ID_copy">
		</li>
		<li>
			<b>Student ID size Picture*</b>:<br>
			<input type="file" name="Student_image">
		</li>
		<br>
		<br>
		<li>
			<input type="submit" value="Register">
		</li>
		</ul>
		
		</form>

<?php 
}
include 'includes/overall/overallfooter.php'; ?>