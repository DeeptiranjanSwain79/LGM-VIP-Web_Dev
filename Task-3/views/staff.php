<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
    <link rel="stylesheet" href="./styles.css">
    
</head>
<style>
    body{ background: linear-gradient(90deg, #015216, #f50ba7); height:700px;}
    form{height:500px;}
</style>
<body>
    <h1>Staff Login</h1>
    <form method="post">
        <input type="text" name="username"  placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btn">Log in</button>
    </form>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    
    session_start();
    include 'conn/dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT Username, Password, Name FROM staff WHERE Username='$username' and Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $data['Name'];
    if ($num == 1) {
        header("Location: stafflog.php");        
    }else {
        echo '<script>alert("Invalid credentials.")</script>';
        $showError = "Invalid credentials.";
    }
}

?>
