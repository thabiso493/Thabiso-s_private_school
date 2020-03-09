<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php'; 
?>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<body onLoad="MM_preloadImages('images/fbgrey.jpg','images/insgrey.jpg')">
	<h1>Contact</h1>
	<p>Contact details</p>
<style>
 body {
		 background-image:url(images/ktyxhj_1016.jpg);
	 }

#sidebar {
	background-image:url(images/fload.jpg);
	background-repeat:no-repeat; 
	position:relative;
	height:229px;
	width:94px;
}

#sidebar #facebook{
	height:48px;
	width:48px;
	position:absolute;
	top:20px;
	left:20px;
}

#sidebar #instagram{
	height:120px;
	width:140px;
	position:absolute;
	top:90px;
	left:10px;
}
</style>


	<div id="sidebar">
	
	<div id="facebook"><a href="http://www.facebook.com/login" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('images','','images/fbgrey.jpg',1)"><img src="images/images.jpeg" alt="My Facebook page" name="images" width="137" height="137" border="0" id="images" /></a> </div>
	
	<div id="instagram"><a href="http://www.instagram.com/login" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('instagram','','images/insgrey.jpg',1)"><img src="images/images-1.jpeg" alt="My instragram" name="instagram" width="130" height="99" border="0" id="instagram" /></a></div>
	
	<div id="car"></div>
	
	
	</div> <! -- end sidebar div -->
	

	
<?php include 'includes/overall/overallfooter.php'; ?>