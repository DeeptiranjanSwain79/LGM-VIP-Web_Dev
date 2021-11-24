<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<style>
    body{
        background: linear-gradient(90deg, teal, red);
        /* height: 700px;         */
    }
    .php{
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:2rem;
        color: whitesmoke;
    }
    table{margin: 100px;}
</style>
<body>
<h1>Welcome <?php session_start(); echo $_SESSION['user'];?></h1>
    <div class="php">
        <table border='9'>
            <tr>
                <th>Roll</th>
                <th>Name</th>
                <th>Password</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Mathematics</th>
                <th>Computer Science</th>
                <th>Score</th>
                <th>Grade</th>
            </tr>
    <?php
            include 'conn/dbconnect.php';
            error_reporting(0);
            
                $sql = "select * from student;";
                $data = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($data);
                if($row != 0){
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "
                        
                            <tr>
                                <td>".$result['Roll']."</td>
                                <td>".$result['Name']."</td>
                                <td>".$result['Password']."</td>
                                <td>".$result['Physics']."</td>
                                <td>".$result['Chemistry']."</td>
                                <td>".$result['Mathematics']."</td>
                                <td>".$result['CS']."</td>
                                <td>".$result['Score']."</td>
                                <td>".$result['Grade']."</td>
                            </tr>
                            
                        ";
                    }
                }
            
        ?>
        </table>
    </div>
    <form method="post">
        <button type="submit" name="delete" class="btn">Delete</button>
    </form>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>
<?php
    if (isset($_POST['delete'])) {
        header("Location: deleteStudent.php");
        // echo "S55550";
    }
?>