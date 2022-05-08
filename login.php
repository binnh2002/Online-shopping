<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<?php
    session_start();
    include "database.php";
    if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $account = "SELECT * from `users` where `email`= '$email' and `pwd` = '$pwd'";
    $sql = mysqli_query($connection,$account);
    echo $account;
    $c = mysqli_num_rows($sql);
        if($c == 1){
                $_SESSION["users"] = $_POST['email'];
                header('Location:/index.php' );
                exit;
            }else{ 
                echo "thất bại";
                header('Location:/login_form.php' );
                exit;
            }
    }
?>  