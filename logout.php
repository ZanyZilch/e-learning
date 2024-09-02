<?php
// if(!isset($_SESSION["ID"])&& $_SESSION["STATUS"]!="ACTIEF") {
//     echo "<script>
//     alert('U heeft geen toegang tot deze pagina.');
//     location.href='../header.php';
//     </script>";
// }


// unset($_SESSION["ID"]);
// unset($_SESSION["USER_ID"]);
// unset($_SESSION["USERNAME"]);
// unset($_SESSION["STATUS"]);
// unset($_SESSION["ROL"]);
// // Session beëindigen
// session_destroy();
// // Databaseverbinding sluiten
// $verbinding = null;
// echo "<script> location.href='".$SERVER["PHP_SELF"]. "'</script>";

// Start or resume the current session
session_start();

// Destroy the session to log the user out
session_destroy();

// Redirect the user to a login page or another destination
header("Location: index.php"); // Change "login.php" to your login page
exit; // Terminate the script
?>