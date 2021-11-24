<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="./styles.css">
    <style>
        body{
        background: linear-gradient(90deg, navy, hotpink);
        height: 700px;        
    }
    .php{
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:2rem;
        color:whitesmoke;
        margin: 50px;
    }
    </style>
</head>
<body>
    <h1>Student Login</h1>
    <form method="post">
        <input type="number" name="roll"  placeholder="Enter your Roll number">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit" class="btn">Log in</button>
    </form>
    <div class="php">
        
            <?php
            include 'conn/dbconnect.php';
            error_reporting(0);
            if(isset($_POST['submit'])){
                $roll = $_POST['roll'];
                $password = $_POST['password'];
                $sql = "select * from student where roll = $roll and password='$password';";
                $data = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($data);
                if($row != 0){
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "
                        <table border='9' style='width:95%''>
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
                            </table>
                        ";
                    }
                }else{
                    echo '<script>alert("Invalid Credentials")</script>';
                    // header("Location: home.php");
                }
            }
            
        ?>   
        
    </div>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

