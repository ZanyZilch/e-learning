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
                    <li class="list-group-item active"> <a href="index.php?pag=1" style="color: white;">Home</a> </li>
                    <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                        </svg> 
                        <a href="index.php?pag=2" style="color: black;"> Options </a> 
                    </li>

                    <li class="list-group-item"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg> 
                        <a href="index.php?pag=3" style="color: black;"> Daily test</a> 
                    </li>

                    <li class="list-group-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                         <a href="index.php?pag=4" style="color: black;">About us</a> 
                    </li>
                </ul>
            </div>

            <div class="col-12 col-sm-6">
                <br />
                <h2> Welcome to Better English for Kids </h2>
                <p> Currently <b><?php echo $_SESSION['USERNAME']; ?></b> is logged in. </p>

            <div class="container">
                <h1>Create a Question</h1>
                <form id="questionForm" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="difficulty">Difficulty:</label>
                            <select class="form-control" name="difficulty" id="difficulty">
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                        <label for="questionText">Question Text</label>
                        <input type="text" class="form-control" id="questionText" name="questionText" required>
                    </div>

                    <div class="form-group">
                        <label for="options">Answer</label>
                        <div id="options">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="answer" required>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

    
            </div>
            <div class="col-12 col-sm-3">


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

        $questionText = htmlspecialchars($_POST["questionText"]);
        $difficulty = htmlspecialchars($_POST["difficulty"]);
        $answer = htmlspecialchars( $_POST["answer"]);
    
        // Controleer of vraag al bestaat (geen dubbele adressen)
        $sql = "SELECT * FROM question WHERE question_text = ?";
        $stmt = $verbinding->prepare($sql);
        $stmt->execute(array($questionText));
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<div id='melding'>".$melding."</div>";
        if($result) {
            $melding = "This question already exists.";
        } else {
            $sql = "INSERT INTO question (ID, question_text, answer, difficulty)
                                values (null,?,?,?)";
                                // ID = null, de rest is ?
            $stmt = $verbinding->prepare($sql);
            try {
                $stmt->execute(array(
                    $questionText,
                    $answer,
                    $difficulty)
                );
            $melding = "New question made.";
    
            }catch(PDOException $e) {
                $melding = "Couldn't make a question:." . $e->getMessage();
            }
            echo "<div id='melding'>".$melding."</div>";
        }
    }
    ?>
</body> 
</html>