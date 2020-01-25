<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background-image: url('back2.png');">
	<?php 

  $image=$_POST["image1"];
  // header('Refresh:5;url="$image"');
  $redirectLink="https://www.google.com/searchbyimage?&image_url=".$image;

 echo("Searching...");
 header( "Refresh:1; url='$redirectLink'", true, 303);

?>	
</body>
</html>

