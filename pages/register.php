<?php
include("register.html");
include("../DBconfig.php");
if(isset($_POST["submit"])) {
    $melding = "";
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Controleer of username al bestaat (geen dubbele adressen)
    $sql = "SELECT * FROM account WHERE username = ?";
    $stmt = $verbinding->prepare($sql);
    $stmt->execute(array($username));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if($result) {
        $melding = "This username is already taken.";
    } else {
        $sql = "INSERT INTO account (ID, username, password, IsTeacher)
                            values (null,?,?,?)";
                            // ID = null, de rest is ?
        $stmt = $verbinding->prepare($sql);
        try {
            $stmt->execute(array(
                $username,
                $passwordHash,
                0)
            );
        $melding = "New account made.";

        }catch(PDOException $e) {
            $melding = "Couldn't make an account:." . $e->getMessage();
        }
        echo "<div id='melding'>".$melding."</div>";
        // Bevestiging per e-mail
        $onderwerp = "Nieuw account";
        $bericht = "Geachte $username, uw account is aangemaakt.";
    }
}
?>
