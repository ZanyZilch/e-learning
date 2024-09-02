<?php
session_start();
ob_start();?>
<!DOCTYPE html>
<html>

<head>
    <title> Better English for Kids </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> Brand </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/about.php"> About </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"> Better English for Kids </h1>
            <p class="lead"> Come and learn with us! </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item"> <a href="../index.php" style="color: black;">Home</a> </li>

                    <li class="list-group-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                         <a href="../pages/about.php" style="color: black;">About us</a> 
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6">
                <br />
                <h2> Login </h2>
                <p> You can join the daily test if you login below. </p>
                <form name="form1" method="post">
                    <b>Username *</b><br>
                    <input size="30" name="username" autocapitalize="off" placeholder="User1234">
                    <br>
                    <br>
                    <b>Password *</b><br>
                    <input type="password" size="30" name="password" placeholder="Password"><br>
                    <a class="sign-up" href="#">Forgot password?</a><br>
                    <br><input type="checkbox" name="rememberme" id="rememberme" value="1" checked="">
                    <label for="rememberme">Remember me on this computer until I ever choose to 'Log Out'.</label><br><br><input type="submit" name="submit" value="Login"><br>
                    <a class="sign-up" href="register.php">Dont have an account? Register!</a><br>
                </form>
            </div>
            <div class="col-12 col-sm-3">
                <br />
                <div class="card">
                    <img class="card-img-top" src="images/snow.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Grammar </h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet. Put some text here. </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> I love apples </li>
                        <li class="list-group-item"> Do you love them too </li>
                        <li class="list-group-item"> Yes for sure </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"> Card link </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br />
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted"> This is a footer. This is a text. </span>
        </div>
    </footer>
    <?php

    if(isset($_POST["submit"])) {
        $melding = "";
        
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        try {

            $sql = "SELECT * FROM account WHERE username = ?";
            include("../DBconfig.php");
            $stmt = $verbinding->prepare($sql);
            $stmt->execute(array($username));

            $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
            if($resultaat) {
                $passwordInDatabase = $resultaat["password"];
                $rol = $resultaat['IsTeacher'];
                if(password_verify($password, $passwordInDatabase)){
                    $_SESSION['ID'] = session_id();
                    $_SESSION['USER_ID'] = $resultaat['ID'];
                    $_SESSION['USERNAME'] = $resultaat['username'];
                    $_SESSION['STATUS'] = 'ACTIEF';
                    $_SESSION['ROL'] = $resultaat['IsTeacher'];
             
                    if($rol == 0) {
                        header("Location: ../index.php");
                    }elseif($rol == 1) {
                        header("Location: ../index.php");
                    }else{
                       $melding .= "Toegang geweigerd<br>";
                    }

                } else {
                    $melding .= "Please log in again.<br>";
                }
            } else {
                $melding .= "Probeer nogmaals in te loggen<br>";
            }
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
            echo "<div id='melding'>$melding</div>";
    }
?>
</body>

</html>