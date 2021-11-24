<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<style>
    body{
        background: linear-gradient(135deg, black, red);
        height: 700px;        
    }
    .b{
        height: 90%;
        display: flex;
        /* flex-direction: row; */
        justify-content: center;
        align-items: center;
    }
    button{
        margin: 30px;
        font-weight: bold;
        font-size: 1.2rem;
    }
</style>
<body>
    <h1>Welcome <?php session_start(); echo $_SESSION['user'];?></h1>
    <div class="b">
        <form method="post">
        <button  type="submit" class="btn" name="staff">Staff</button>
        <button  type="submit" class="btn" name="student">Student</button>
        </form>
    </div>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

<?php
if(isset($_POST['staff'])){
    header("Location: adminStaff.php");
}

if(isset($_POST['student'])){
    header("Location: adminStudent.php");
}
?>
