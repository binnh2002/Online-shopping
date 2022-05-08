<?php
include "header.php";
if (isset($_GET['poid'])) {
	
	$poid = $_GET['poid'];
}else {
	header('location: index.php');
}
include "database.php";
$getposts = "SELECT * FROM products WHERE product_id ='$poid'";
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


<section class="section">
<div class="container-fluid">	
    <div id="cart_checkout">
        <table>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </table>
    <?php 
			echo '
				
			';
		?>
    </div>
</div>
</section>