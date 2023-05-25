<?php {
	session_start(); 
	$review = $_COOKIE['MyGameReviews']; 
	if (isset($_POST['clear'])) { 
		setcookie("MyGameReviews", $review, $expire); 
		header("Location:reviews.php"); 
	} 
	if ($review && $_GET['id']) { 
		$review .= ',' . $_GET['id']; 
		setcookie("MyGameReviews", $review, $expire); 
		header("Location:reviews.php"); 
	} 
	if (!$review && $_GET['id']) { 
		$review = $_GET['id'];  
		setcookie("MyGameReviews", $review, $expire); 
		header("Location:reviews.php"); } 
	}
	?>
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
	<h2>Reviews</h2>
        <table width="100%"> 
            <tr> <th>Name</th> 
            <th>Review</th> 
            <th>Date</th>
        </tr> 
		<?php $review = $_COOKIE['MyGameReviews']; 
        if ($review) { 
            $i = 1; 
            include('includes/dbc.php'); 
            $reviews = explode(',', $review); 
            foreach($reviews AS $r) {  
                $sql = "SELECT * FROM reviews WHERE id = '$review'"; 
                $result = mysqli_query($con, $sql); 
                if($result == false){ 
                    echo '<p>No reviews yet, click </p><a href="add_review.php>here</a><p> to add a review</a>'; 
                }else{  
                    while($row=mysqli_fetch_assoc($result)) { 
                        echo '<tr><td align="left">'.$row['name'].'</td>'; 
                        echo '<td align="left">'.$row['comment'].'</td>'; 
                        echo '<td align="left">'.$row['review_date'].'</td>'; 
						 }  
                        $i++; 
                        } 
                    }
                } 
            ?>
        </table><br />
	</section>

</div>

<?php include('includes/footer.inc');?>

</body>
</html>
