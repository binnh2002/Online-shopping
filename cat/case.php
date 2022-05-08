<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php include "../header.php"; ?>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="../cat/phone.php">
							<img src="../img/smartphone.png" class="home-prodlist-imgi">Smart Phone
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="../cat/case.php">
							<img src="../img/phone-case.png" class="home-prodlist-imgi">Cases
							</a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
		<div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<div>
		<?php 
			include "../database.php";
			$getposts = "SELECT * FROM products WHERE product_cat = '2' ORDER BY product_id DESC LIMIT 10";
			$data = mysqli_query($connection,$getposts);

					if (mysqli_num_rows($data)) {
					echo '<ul id="recs">';
					while ($row = mysqli_fetch_assoc($data)) {
						$id = $row['product_id'];
						$pTitle = $row['product_title'];
						$price = $row['product_price'];
						$description = $row['product_desc'];
						$picture = $row['product_image'];
						
						echo '
							<ul style="float: inherit;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="view_products.php?pid='.$id.'">
										<img style="text-align: center;display: block; margin: 0 auto;" src="../img/cases/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pTitle.'</span><br> Price: '.$price.' $</div>
									</div>
								</li>
							</ul>
						';

						}
				}
		?>
			
		</div>
	</div>