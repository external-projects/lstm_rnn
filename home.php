<!DOCTYPE html>
<html class="animated fadeIn">
<!-- <?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?> -->
<head>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
	<title>Online-Story-Generator</title>
	<link href="https://fonts.googleapis.com/css?family=Euphoria+Script|Poppins|Amatic+SC|Encode+Sans+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link href="page.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link href="bootstrap-social.css" rel="stylesheet">

	<!-- <script type="text/javascript">
		function loaddata(argument) {
			fs.readFile('story.txt', 'utf-8', (err, data) => { 
			    if (err) throw err; 
			  
			    // Converting Raw Buffer to text 
			    // data using tostring function. 
			    document.getElementById("problem").value = data; 
			})
		}
	</script> -->

</head>
<body onload="document.getElementById('problem').value = '<?php echo file_get_contents('story.txt');?>'">
	<?php
		$x = 600;
		$current_time = time();
		$file_name = 'story.txt';
		$file_creation_time = filemtime($file_name);
		$difference = $current_time - $file_creation_time;
		if ($difference >= $x) {
			file_put_contents($file_name, "");
		}
	?>

	<div class="main">
		<form class="ml-form" autocomplete="off" action="store.php" method="post">		
			<div class="row">
				<div class="col-sm-8">
				<input name="name" class="form-control form-control-lg" type="text" placeholder="Seed Text">
				</div>			
				<input class="col-sm-1 btn btn-primary" type="submit" value="Send">
			</div>
		</form>


		<form class="ml-form" autocomplete="off" action="jeffery_append.php" method="post">
			<div class="row">
				<div class="col-sm-4">
				<object  class="form-control form-control-lg" data="jeffery.txt"></object>
				</div>		
				<input class="col-sm-1 btn btn-primary" type="submit" value="Append">
			</div>
		</form>
		
		<form class="ml-form" autocomplete="off" action="rowlings_append.php" method="post">
			<div class="row">
				<div class="col-sm-4">
				<object class="two form-control form-control-lg" data="rowlings.txt"></object>
				</div>			
				<input class="col-sm-1 btn btn-primary" type="submit" value="Append">
			</div>
		</form>

		<form class="ml-form" autocomplete="off" action="narayan_append.php" method="post">
			<div class="row">
				<div class="col-sm-4">
				<object class="three form-control form-control-lg" data="narayan.txt"></object>
				</div>			
				<input class="col-sm-1 btn btn-primary" type="submit" value="Append">
			</div>
		</form>

		<div class=" col-sm-9 area">
			<textarea name="problem" id="problem" class="form-control form-control-lg" type="text" placeholder="Story" rows="5"></textarea>
		</div>
		

		<form class="ml-form" autocomplete="off" action="read.php" method="post">
				<div class="row">
					<div class="col-sm-8">
						<input class="col-sm-2 btn btn-primary" type="submit" value="Generate">
					</div>	
				</div>
		</form>
	</div>
</body>
</html>