<!DOCTYPE html>
<html>
<head>
    <title> Better English for Kids </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <style>
        /* Center the cards vertically */
        .center-cards {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <script>
      function logout() {
        window.location.href = 'logout.php';
      }
      
    </script>

    
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
                    <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/about.php"> About </a>
                </li>
                
                <?php
                    if($_SESSION['USERNAME'] != 'no one'){
                    echo'                    
                    <li class="nav-item">
                        <a class="nav-link" href="pages/quiz.php?difficulty=daily"> Daily test </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="logout()"> Logout </a>
                    </li>';
                    }?>

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
                    <li class="list-group-item active"> <a href="index.php" style="color: white;">Home</a> </li>
                    <?php
                    if($_SESSION['USERNAME'] != 'no one'){
                    echo'  
  
                    <li class="list-group-item"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> 
                        <a href="pages/quiz.php?difficulty=daily" style="color: black;"> Daily test</a> 
                    </li>';
                    }?>
                    <li class="list-group-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                         <a href="pages/about.php" style="color: black;">About us</a> 
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6">
                <br />
                <h2> Welcome to Better English for Kids </h2>
                <p> Currently <b><?php echo $_SESSION['USERNAME']; ?></b> is logged in. </p>
                <?php if($_SESSION['USERNAME'] == 'no one'){
                echo'<ul>
                    <li>Go to the <a href="pages/login.php">inlogpage</a>.</li>
                    <li>Go to the <a href="pages/register.php">registration page</a> if you do not yet have login details.</li>
                </ul>';
                } else{
                    echo '
                    <ul>
                        <li>To <a href="pages/easy.php">today\'s test.</a></li>
                    </ul>
                    ';
                }
                if($_SESSION['ROL'] == 1){
                    echo '
                    <ul>
                        <li>Create new questions for <a href="pages/adminpage.php">today\'s test.</a></li>
                    </ul>
                    ';  
                }?>

                <?php if($_SESSION['USERNAME'] != 'no one'){
                    echo'<div class="container">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="images/juanes.jpg" class="card-img" alt="Card Image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Easy level</h5>
                                            <p class="card-text">Some text for Card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <a href="pages/quiz.php?difficulty=easy">Start test</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-sm-12 mb-4">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="images/led_zeppelin.jpg" class="card-img" alt="Card Image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Medium level</h5>
                                            <p class="card-text">Some text for Card 2. Sed aliquam magna nulla, non dignissim sapien scelerisque sit amet.</p>
                                            <a href="pages/quiz.php?difficulty=medium">Start test</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-sm-12 mb-4">
                            <div class="card">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="images/CaveraPNG.png" class="card-img" alt="Card Image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Hard level</h5>
                                            <p class="card-text">Some text for Card 3. Fusce vestibulum, dui et volutpat ultricies.</p>
                                            <a href="pages/quiz.php?difficulty=hard">Start test</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }?>
                <img src="images/road-210913_1280.jpg" class="img-fluid rounded" />
                
            </div>
            <div class="col-12 col-sm-3">
                <br />
                <div class="card">
                    <img class="card-img-top" src="images/100-1000164_transparent-london-skyline-silhouette-png-london-skyline-clip-removebg-preview.png" alt="Card image cap">
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
                        <a href="#" class="card-link"> Logout </a>
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
</body> 
</html>