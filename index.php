<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css"> -->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		#logpg{
			padding:105px;

		}
	</style>

</head>
<body style="background-image: url('back2.png');">
	<
	<div class="container text-center" id="logpg">
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			
				<div>
    <style scoped>
      
        .button-success {
            background: #B0C4DE;
            font-size: 110%;
             /* this is a green */
        }
    
    </style>
    <form action="exec.php">
    <button class="btn btn-primary" type="submit" value="submit">View Personal Crawled Data</button></form>
    <br>
    <form action="image.php">
    <button class="btn btn-primary" type ="submit" onclick="window.location.href='image.php'">View Similar Image</button></form>
</div>
			</form>
			<br>
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
	</div>
	</div>
</body>
</html>