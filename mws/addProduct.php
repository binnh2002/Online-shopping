<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping</title>
</head>
<body>
   <?php
        echo "This is being processed on the server";
   ?> 
   <?php 
        $id= $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $price = $_REQUEST["price"];
        $desc = $_REQUEST["desc"];
        echo $id;
        echo $name;
        echo $price;
        echo $desc;
        $connection = mysqli_connect("localhost", "root","", "ex1");
        if($connection == false){
           die("Error: Could not connect to database"); 
        } else {
            echo "Success";
            $product_query = "INSERT INTO product(Id, Name, Description, Price) VALUES ('$id','$name','$desc','$price')";
        
            echo "<p>".$product_query."</p>";
            if(mysqli_query($connection,$product_query)){
                echo "<p>Success: Record is added successfully. A new product is created!</p>";
            } else{
                echo "<p>Error: Could not execute query</p>";
            }
        }
   ?>
</body>
</html>