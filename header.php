<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title></title>
    <link rel="icon" type="image/x-icon" href="img/mws.ico" >
    <link rel="stylesheet" href="../htdocs/css/style.css">
</head>
<body>
    <header>
        <!-- header -->
        <nav class="navbar-dark bg-dark container-fluid">
            <div class="row">
                <!--Logo-->
            
                <div class="col-1">
                    <a class="navbar-brand" href="/index.php"><img src="../img/mws.ico" width="100" height="100" alt="logo"></a>
                </div>
                <!--end logo-->
                    <div class="col-1 navbar mx-md-0">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                        <!--search bar-->
                    <div class="col-5 mt-4">
                        <form class="form-inline my-2 my-lg-0">
                            <div class="input-group mb-3 mx-auto">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                        <select class="input-select">
                                            <option value="0">All Categories</option>
                                            <option value="1">Phones</option>
                                            <option value="2">Cases </option>
                                        </select>
                                </span>
                            </div>
                            <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="search" aria-describedby="basic-addon1">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search_btn">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- end search bar-->
                    <!--cart and account-->
                <div class="col-1 mt-4 clearfix">
                    <a href="cart.php"><img src="../img/shopping-cart.png" width="50" height="50" alt="shopping-cart"></a>
                </div>
                <?php
                    session_start();
                    if(!isset($_SESSION['users'])) {
                echo '<div id="login" class="col-1 mt-4 clearfix">
                    <a href="../login_form.php"><button class="btn btn-outline-success">Login</button></a>
                </div>
                <div class="col-1 mt-4 clearfix" id="register">
                    <a href="../register_form.php"><button class="btn btn-outline-success">Register</button></a>
                </div>
                    ';}
                ?>

                <div class="col-1 mt-4 clearfix" id="profile">
                <a href="/profile.php"><button class="btn btn-outline-success">Profile</button></a>
                </div> 
              
                <?php
                    if(isset($_SESSION['users'])) {
                        echo '<div class="col-1 mt-4 clearfix" id="profile">
                        <form action="logout.php" method="post">
                        <a href="/logout.php"><button class="btn btn-outline-success">logout</button></a>
                        </form>
                        </div> ';
                    }
                ?> 

                <?php           
                    if(isset($_SESSION['users'])) {
                        echo '<div class="col-1 mt-4 clearfix" id="profile">
                        <a href="/logout.php"><button class="btn btn-outline-success">'.$_SESSION['users'].'</button></a>
                        </div> ';
                    }
                ?> 
            </div>
         </nav>
    </header>
    <!--end header-->
</body>
</html>