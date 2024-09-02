<?php 
session_start();
include("../DBconfig.php");?>
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
        window.location.href = '../logout.php';
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
                    <a class="nav-link" href="../index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/about.php"> About </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/quiz.php?difficulty=daily"> Daily test </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()"> Logout </a>
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
                    <li class="list-group-item"> <a href="index.php?pag=1" style="color: black;">Home</a> </li>

                    <li class="list-group-item active"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> 
                        <a href="../pages/quiz.php?difficulty=daily" style="color: white;"> Daily test</a> 
                    </li>

                    <li class="list-group-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                         <a href="../pages/about.php" style="color: black;">About us</a> 
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6">
                <!-- shit goes here-->
                <form id="inputBox" method="post">
                <?php 
                // Retrieve the difficulty parameter from the URL
                $difficulty = $_GET['difficulty'];
                
                // Define a default difficulty level if the parameter is not provided
                if (empty($difficulty)) {
                    $difficulty = 'easy'; // You can set any default difficulty level here
                }

                $sql = "SELECT * FROM question WHERE difficulty = '$difficulty' LIMIT 5";
                if($difficulty == 'daily'){
                    $sql = "SELECT * FROM question ORDER BY RAND() LIMIT 5";
                }
                $stmt = $verbinding->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                if($result){
                    echo '<form method="POST">';
                    foreach ($result as $index => $item) {
                        $questionText = $item['question_text'];
                        $correctAnswer = $item['answer'];
                
                        // Check if the submitted answer is correct
                        $submittedAnswer = isset($_POST['inputBox' . $index]) ? $_POST['inputBox' . $index] : '';
                
                        $submittedAnswerLower = strtolower($submittedAnswer);
                        $correctAnswerLower = strtolower($correctAnswer);
                        // Initialize the cardColor variable for each card
                        $cardColor = ''; 
                
                        if (isset($_POST['submit'])) {
                            if ($submittedAnswerLower === $correctAnswerLower) {
                                $cardColor = 'bg-success'; // Correct answer, green background
                            } else {
                                $cardColor = 'bg-danger'; // Incorrect answer, red background
                            }
                        }
                
                        echo "
                        <div class=\"container mt-5\">
                            <div class=\"card $cardColor\">
                                <div class=\"card-header\">
                                    <h5 class=\"card-title\">$questionText</h5>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <label for=\"inputBox$index\">Answer</label>
                                        <input type=\"text\" class=\"form-control\" id=\"inputBox$index\" name=\"inputBox$index\" value=\"$submittedAnswer\">
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }

                    echo '<div class="container mt-5"><div class="text-center">';
                    echo '<button type="submit" class="btn btn-primary" name="submit">Submit Answers</button>';
                    echo '</div></div>';

                    echo '</form>';

                } else{
                    echo "Couldn't find any questions!";
                }
                ?>
                </form>
            </div>
            <div class="col-12 col-sm-3">
                <br />

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