<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		#links{
			font-size: 14px;
		}
	</style>
</head>
<body style="background-image: url('back2.png');">	
	<div class="container">
	<h3>Your data might be available in the following webpages:</h3>		
	<?php
		header('Access-Control-Allow-Origin: *');

		include('server.php');
		$user = $_SESSION['username'];
		$query = mysqli_query($db,"SELECT twitter FROM users WHERE username = '$user'");
		$query1 = mysqli_fetch_array($query);
		// print_r($query1[0]);
		// $twitterop = mysqli_fetch_array($query1);




		// echo $command_line1 = 'python C:\xampp\htdocs\yellowflash\test.py' ;


		$command_line = "python C:\Users\Administrator\Desktop\Yellowflash\Ultimate-Dork-master\ultimate-dork.py --dork @$query1[0]";
		$output = shell_exec(escapeshellcmd($command_line));
		// echo $output;
		$output_array = (explode("- ", $output));
		// print_r($output_array);
		foreach($output_array as $value) {
		echo "<br>";
		$value;
		echo "<a href='$value'>$value</a>";
		echo "<br>";

		}
		// print_r($value)}
		// echo $output;
		// echo "Hello world";

	?>

	</div>
	</div>
</body>
</html>


