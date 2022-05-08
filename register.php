<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<?php
    include "database.php";
    $email = $_REQUEST["email"];
    $repeatPwd = $_REQUEST["repeatPassword"];
    $checkMail = "SELECT * from `users` where `email`='$email'";
    $check_query = mysqli_query($connection,$checkMail);
    $count = mysqli_num_rows($check_query);
    echo $count;
    if($count > 0){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Email Address is already available Try Another email address
                </div>
            </div>';
        exit();
    }else{
        $sql = "INSERT INTO `users`(`email`, `pwd`) VALUES('$email','$repeatPwd')";
       if(mysqli_query($connection,$sql)){
        echo '<h1> Register success</h1>';
        echo "<script>
        location.href='login_form.php'";
        } else {
        echo "<p>Error: Could not execute query</p>";
        }
    }
    
?>