<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h1 {
        margin-top: 40px;
        color: #333;
    }
    form {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: black;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #ce2f2fff;
    }

    label {
        font-weight: bold;
    }
    a{
        color:blue;
        text-decoration:none;
    }
    .registration{
        text-align:center;
    }
</style>

</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="POST">
        Name: 
        <input type="text" name="Name" id=""><br>
        Password:
        <input type="password" name="Password" id=""><br><br>
        <input type="submit" value="Submit" name = "Submit"><br><br>
        <div class="registration">
            <label for="Registration">Create an account? <a href="adminregistration.php">Register</a></label>
        </div>
    </form>

    <?php

    include 'dbconnect.php';
    session_start();
        if(isset($_POST['Submit'])){
            $Name = $_POST['Name'];
            $Password = md5($_POST['Password']);

            $sql = "SELECT * FROM admin WHERE Name = '$Name' and Password = '$Password' ";

            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if($num > 0){
                echo "<script>
                alert('Login success')
                </script>";

                $_SESSION['Login'] = $Name;
                header("Location: http://localhost/DBMS%20Project/admin.php");


            }
            else{

                echo "<script>
                alert('Login failed')</script>";

            }
        }

    ?>
</body>
</html>
