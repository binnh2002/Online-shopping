<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<?php
session_start();
    if(isset($_SESSION['users'])) {
        header('Location:/index.php');
        exit;
    }
?>
<body>
    <section class="vh-100" style="background-color: #eee">
        <div class="container h-100">
            <div class="row d-flex justify-content align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card body p-md-5">
                            <div class="col-md-100">
                                <p class="text-center h1 fw-bold mb-5 mt-5 mx-auto">Sign up</p>
                                <form class="mx-1 mx-md-4" method="post" action="register.php">
                                    <div class="form-group">
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="inputEmail">Email address</label>
                                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Confirm</label>
                                            <input type="password" class="form-control" name="repeatPassword" id="repeatPassword" oninput='repeatPassword.setCustomValidity(repeatPassword.value != password.value ? "Passwords do not match." : "")' placeholder="Repeat password">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>