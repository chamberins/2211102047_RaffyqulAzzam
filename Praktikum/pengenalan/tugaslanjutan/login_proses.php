<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Hardcoded login credentials (for simplicity)
    if ($username == "raffyqulazzam" && $password == "2211102047") {
        $_SESSION['loggedin'] = true;
        header('Location: welcome.php');
    } else {
        echo "Invalid login.";
    }
}
?>
