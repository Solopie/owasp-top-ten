<?php
// Initialize the session
session_start();

$flag = "solopie{essquel_einjektshion}";
$showFlag = false;
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

if($_SESSION["username"] == "admin") {
    $showFlag = true;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <?php 
    if($showFlag) {
        echo "<h2><i>Oh, you look important!</i></h2><br><br>";
        echo "<h2><i>".$flag."</i></h2><br><br>";
    } else {
        echo "<h2><i>"."Only important people get the flag :)"."</i></h2><br><br>";
    } 
    ?>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>