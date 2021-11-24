<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Student</title>
    <!-- <link rel="stylesheet" href="./styles.css"> -->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    body{background:linear-gradient(90deg, black, darkred);}
    form{
        display:flex;
        flex-direction:row;
        /* padding: 450px; */
    }
    button{
        font-family: 'Libre baskerville';
        background: linear-gradient(90deg, royalblue, lightgreen);
        height: 50px;
        width: 80px;
        border-radius: 10px;
        cursor: pointer;
        margin: 10px 300px;
    }
    input{
        font-family: 'Oswald', sans-serif;
        font-size: 1.5rem;
        color: #ff00aa;
        margin: 20px;
        height: 35px;
        width: 35%;
        background: linear-gradient(45deg, navy, transparent);
        border-radius: 15px;
        padding: 10px 30px;
    }
    .input{
        color: whitesmoke;
        font-size: 4rem;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 350px;
    }
    footer{
        background-color: navy;
        display: flex;
        justify-content: center;
        padding: 5px;
        color: whitesmoke;
    }
</style>
<body>
    <form method="post">        
        <input type="number" name="aadhaar" placeholder="AADHAAR Number">
        <button type="submit" name="delete" class="btn">Delete</button>
        
    </form>
    <div class="input">
    <?php
        include 'conn/dbconnect.php';        
            //Code for deleting records
            if(isset($_POST['delete'])){
                $aadhaar = $_POST['aadhaar'];
                $sql = "delete from staff where AADHAAR= $aadhaar";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo 'Data deleted successfully';
                }else{
                    echo '<script>alert("Something went wrong!!!!!")</script>';
                }
            }
        ?>
    </div>
    <footer>&copy;All Rights Reserved | 2021</footer>
</body>
</html>

