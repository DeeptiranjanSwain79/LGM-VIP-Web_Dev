<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<style>
    body{
        background: linear-gradient(90deg, red, blue);
        /* height: 700px;         */
    }
    .php{
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:1.2rem;
        color:whitesmoke;
    }
    table{
        margin:50px;
    }
</style>
<body>
    <h1>Welcome <?php session_start(); echo $_SESSION['user'];?></h1>
    <div class="php">
        <table border="7" style="width:70%">
        <tr>
            <th>AADHAAR Number</th>
            <th>Name</th>
            <th>Date of Joining</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
            include 'conn/dbconnect.php';
            // echo date("d m Y ");
            error_reporting(0);
            $sql = 'select * from staff';
            $data = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($data);
            if($row != 0){
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                        <tr>
                            <td>".$result['AADHAAR']."</td>
                            <td>".$result['Name']."</td>
                            <td>".$result['DOJ']."</td>
                            <td>".$result['email']."</td>
                            <td>".$result['Username']."</td>
                            <td>".$result['Password']."</td>
                        </tr>
                    ";
                }
            }
        ?>
        </table>
    </div>
    <form method="post">
        <button type="submit" class="btn" name="join">Join</button>
        <button type="submit" class="btn" name="delete">Delete</button>
    </form>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

<?php
    if(isset($_POST['join'])){
        header("Location: staffJoin.php");
    }
    if(isset($_POST['delete'])){
        header("Location: deleteStaff.php");
    }
?>