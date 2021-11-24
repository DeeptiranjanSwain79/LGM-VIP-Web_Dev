<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Join</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<style>
    body{
        background: linear-gradient(90deg, green, black);
    }
    form{
        height: 90%;
    }
</style>
<body>
    <form method="post">
        <input type="number" name="aadhaar" placeholder="AADHAAR number">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button type="submit" name="submit" class="btn">Submit</button>
    </form>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

<?php
    include 'conn/dbconnect.php';
    if (isset($_POST['submit'])){
        $aadhaar = $_POST['aadhaar'];
        $name = $_POST['name'];  
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $date = date('Y-m-d');

        $sql = "insert into staff (AADHAAR, Name, DOJ, email, Username, Password) values ($aadhaar, '$name', '$date', '$email', '$username','$password');";
        $result = mysqli_query($conn, $sql);
        // echo $sql;

        if($result){
            echo "Inserted Successfully";
        }else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
?>