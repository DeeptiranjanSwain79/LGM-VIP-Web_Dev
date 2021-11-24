<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./styles.css">
    
</head>
<style>
    body{background: linear-gradient(90deg, green, red);}
    form{height: 500px;}
</style>
<body>
    <h1>Admin Login</h1>
    <form method="post">
        <input type="text" name="username"  placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="btn">Log in</button>
    </form>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    
    include 'conn/dbconnect.php';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['user'] = $username;
    
    $sql = "SELECT * FROM admin WHERE username='$username' and Password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['username']==$username && $row['password']==$password){
            
            header("Location: adminlog.php");
            
        }
    }else {
        echo '<script>alert("Invalid credentials.")</script>';
        $showError = "Invalid credentials.";
    }
}

?>
