<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		#links{
			font-size: 14px;
		}

		#box{
			justify-content: center;
			padding-top: 175px;
			padding-left: 400px;
		}
	</style>
</head>
<body style="background-image: url('back2.png');">
	<div class="container" id='box'>
				<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon1">Image URL</span>
	  </div>
	  <form action="imgResult.php" method="POST">
	  <input id="imginput" type="text" class="form-control" name="image1" aria-label="Image URL" aria-describedby="basic-addon1" placeholder="Enter Image Url">
	  </div>
	  <button class="button btn-primary" type="submit">Click To View</button>
		</form>	  
		</div>

	</div>

</body>	  
</html>


