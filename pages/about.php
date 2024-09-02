<?php session_start();?>
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
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
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
                    <li class="list-group-item"> <a href="../index.php" style="color: black;">Home</a> </li>
                    <?php
                    if($_SESSION['USERNAME'] != 'no one'){
                    echo'  
                    <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                        </svg> 
                        <a href="#" style="color: black;"> Options </a> 
                    </li>   

                    <li class="list-group-item"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> 
                        <a href="pages/quiz.php?difficulty=daily" style="color: black;"> Daily test</a> 
                    </li>';
                    }?>
                    <li class="list-group-item active"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                         <a href="pages/about.php"  style="color: white;">About us</a> 
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6">
                <br />
                <header class="bg-primary text-white text-center py-4">
                    <h1>About Better English for Kids</h1>
                </header>
                <div class="container mt-4">
                    <h2>Welcome to Better English for Kids!</h2>
                    <p>
                        At Better English for Kids, we are passionate about nurturing the next generation of confident and skilled English speakers. Our mission is to provide engaging, effective, and fun English language resources for children to help them become proficient communicators.
                    </p>
                    <h3>Our Vision</h3>
                    <p>
                        We envision a world where children from all corners of the globe have the opportunity to excel in English, enabling them to connect, learn, and grow on a global scale. By empowering children with strong language skills, we believe we're building a brighter future.
                    </p>
                    <h3>What Sets Us Apart</h3>
                    <ul>
                        <li><strong>Interactive Learning:</strong> We offer interactive lessons, games, and activities that make learning English a thrilling adventure for kids.</li>
                        <li><strong>Expert Guidance:</strong> Our team consists of experienced educators, language experts, and child psychologists.</li>
                        <li><strong>Age-Appropriate Curriculum:</strong> Our curriculum is designed to cater to kids of all ages, ensuring that they enjoy the learning process while making steady progress.</li>
                        <li><strong>Safety First:</strong> Your child's safety and privacy are our top priorities.</li>
                    </ul>
                    <h3>Our Commitment</h3>
                    <ul>
                        <li>Inspiring a love for the English language from an early age.</li>
                        <li>Empowering kids to express themselves confidently and fluently.</li>
                        <li>Offering a wide variety of engaging resources and activities.</li>
                        <li>Fostering a sense of curiosity and wonder in every child.</li>
                        <li>Encouraging cultural exchange and global awareness.</li>
                    </ul>
                    <h3>Join Our Community</h3>
                    <p>
                        We invite parents, caregivers, teachers, and young learners to become part of our vibrant community. Together, we can embark on an exciting journey to make English learning an enriching and enjoyable experience for kids everywhere.
                    </p>
                    <p>
                        Thank you for choosing Better English for Kids as your partner in your child's language learning adventure. Let's explore the world of English together!
                    </p>
                    <p>
                        If you have any questions or feedback, please don't hesitate to <a href="mailto:info@betterenglishforkids.com">contact us</a>. We'd love to hear from you!
                    </p>
                </div>
                <!-- Add Bootstrap JS and jQuery scripts (at the bottom for better performance) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                
                
                <img src="../images/road-210913_1280.jpg" class="img-fluid rounded" />
                
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