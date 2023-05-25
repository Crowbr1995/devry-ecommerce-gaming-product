<!DOCTYPE html>
<html>
<head>
<title>My Gaming Products Site</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('includes/header.inc');?>

<?php include('includes/nav.inc');?>

<div id="wrapper">
    
	<section> 
		<h2>Mailing List Sign-Up</h2> 
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" name ="form1" onSubmit="return validateForm()"> 
		<p> 
			<label>Name:</label><br><input type="text" id="theName" name="theName"> 
			<?php if(isset($nameMsg)){ 
				echo $nameMsg; 
				} ?> 
			<br><span id="nameMsg" style="color:red"></span> 
		</p> 
		<p> 
			<label>Phone:</label><br> 
			<input type="text" id="phone" name="phone"> 
			<?php if(isset($phoneMsg)){ 
				echo $phoneMsg; 
				} ?> <br>
				<span id="phoneMsg" style="color:red"></span> 
			</p> 
			<p> 
				<label>Email:</label><br> 
				<input type="text" id="email" name="email"> 
				<?php if(isset($emailMsg)){ 
					echo $emailMsg; 
					} ?> <br>
					<span id="emailMsg" style="color:red"></span> 
				</p> 
				<p> 
					<label>Comments:</label><br> 
					<textarea id="comments" name="comments"> </textarea><br> 
				</p> 
				<p> 
					<input type="submit" name="Submit_Mail_List" value="Submit"> 
				</p> 
			</form> 
		</section>

</div>

<?php include('includes/footer.inc');?>

</body>
</html>
