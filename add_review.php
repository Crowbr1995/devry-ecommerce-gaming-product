<?php
	if (isset($_POST['submit. Review'])) {
		$product.id = S.GET['product.id);
		$name = $.POSTO theName");
		$comment = $_POST['thecomment);
	if ($name == "") {
		$nameMsg = "<br><span style='color: red;'>Your name cannot be blank, </span>";
	if ($comment == "") {
		$commentMsg = "<br><span style='color:red;'>Your review cannot be blank. </span>";
	else {
		include ("includes/dbc.php");
		$query = "INSERT INTO reviews (name, comment, product_id) VALUES ('$name', '$comment', '$product_id')"
		$success = mysqli_query($con, $query);
	if ($success) {
		$inserted = "<h2>Thanks!</h2><h3> You're review was submitted!</h3>";
	} else {
		$error_message = mysqli_error($con);
		$inserted = "There was an error: $error_message";
		exit($inserted);
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>My Gaming Products Site</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	validateForm = () => {
		let theName = document.form1.theName.value;
		let comment = document.form.theComment.value;
		let nameMsg = document.getElementById('nameMsg');
		if (theName=="") {
			nameMsg.innerHTML = 'Please put your name in before proceeding.'
			return false;
		}
		if (theComment =="") {
			commentMsg.innerHTML = "Your review cannot be blank"
			return false;
		}
	}
</script>	
</head>

<body>

<?php include('includes/header.inc');?>

<?php include('includes/nav.inc');?>

<div id="wrapper">
    
	<section> 
		<h2>Add Product Review</h2>
		<?php if (isset($inserted)) { echo $inserted; } else { ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF') ?>?				product_id=<?php echo($_GET['product_id'])?>" name='form1' 				onSubmit='return validateForm()'>
		<p>
			<label>Name:</label><br>
			<input type="text" id="theName" name="theName">
			<?php if (isset($nameMsg)) {
			echo $nameMsg:
			} ?>
			<br>
			<span id="nameMsg" style="..."></span>
		</p>
		<p>
			<label>Review:</label><br>
			<textarea id="thecomment" name="thecomment" style="..."></textarea>
			<?php if (isset($commentMsg)) {
			echo $commentMsg;
			} ?>
			<br>
			<span id="commentMsg" style="..."></span>
		</p>
		<p>
			<input type="hidden" id="product_id" name="product_id" value="<?php echo($product_id) ?>" />
		</p>
		<p>
			<input type="submit" name="Submit_Review" value="Submit">
		</p>
		</form>
		<?php } ?>
	</section>

</div>

<?php include('includes/footer.inc');?>

</body>
</html>
