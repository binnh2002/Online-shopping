<?php
include '../database.php'; 
    if (isset($_GET['pid'])) {
	$pid = $_GET['pid'];
     
    }else {
	    header('location: index.php');
    }
			$getposts = "SELECT * FROM products WHERE product_id = '$pid'";
            $data = mysqli_query($connection,$getposts);
            $row = mysqli_fetch_assoc($data);
            if(mysqli_num_rows($data)){
                $id = $row['product_id'];
				$pTitle = $row['product_title'];
				$price = $row['product_price'];
				$description = $row['product_desc'];
				$picture = $row['product_image'];
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "../header.php"; 
    ?>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="phone.php">
							<img src="/img/smartphone.png" class="home-prodlist-imgi">Smart Phone
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="case.php">
							<img src="/img/phone-case.png" class="home-prodlist-imgi">Cases
							</a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
		<div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<div style="margin: 0 97px; padding: 10px">

		<?php 
			echo '
				<div style="float: left;">
				<div>
					<img src="/img/product/'.$picture.'" style="height: 500px; width: 500px; padding: 2px; border: 2px solid #c7587e;">
				</div>
				</div>
				<div style="float: right;width: 40%;color: #067165;background-color: #ddd;padding: 10px;">
					<div style="">
						<h3 style="font-size: 25px; font-weight: bold; ">'.$pTitle.'</h3><hr>
						<h3 style="padding: 20px 0 0 0; font-size: 20px;">Prize: '.$price.' $</h3><hr>
						<h3 style="padding: 20px 0 0 0; font-size: 22px; ">Description:</h3>
						<p>
							'.$description.'
						</p>
						<div>
							<h3 style="padding: 20px 0 5px 0; font-size: 20px;">Want to buy this product? </h3>
							<div id="srcheader">
								<form id="" method="post" action="../cart.php?poid='.$pid.'">
								        <input type="submit" value="Order Now" class="srcbutton" >
								</form>
								<div class="srcclear"></div>
							</div>
						</div>
					</div>
				</div>
			';
		?>

	</div>
</body>
</html>
