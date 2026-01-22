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

    .container {
        background-color: #fff;
        padding: 25px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 320px;
    }

    label {
        display: block;
        margin-top: 10px;
        color: #333;
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        margin-top: 15px;
        padding: 10px;
        background-color: black;
        border: none;
        color: white;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #ce2f2fff;
    }
    a{
        color:blue;
        text-decoration:none;
    }
    .login{
        text-align:center;
    }
</style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="#" method="POST">
        <div class="container">
        <label for="Name">Name:</label>
        <input type="text" name="Name"><br>
        <label for="Name">Email:</label>
        <input type="text" name="Email"><br>
        <label for="Name" >Password:</label>
        <input type="password" name="Password"><br>
        <label for="Name">Confirm Password:</label>
        <input type="password" name="Cpassword"><br>
        <input type="submit" name="Submit">
        <div class="login">
            <label for="Login">Alredy an user? <a href="adminlogin.php">Login</a></label>
        </div>
        
    </div>
    </form>
    <?php
        include 'dbconnect.php';
        if(isset($_POST['Submit'])){
            $Name=$_POST['Name'];
            $Email=$_POST['Email'];
            $Password=$_POST['Password'];
            $Cpassword=$_POST['Cpassword'];
            if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                echo "<script> alert('Invalid Email'); </script>";
            }
            else if($Password!=$Cpassword){
                echo "<script> alert('Password doesnot match'); </script>";
            }
            else{
                $sql="select * from admin where Email='$Email'";
                $result=mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if($num>0){
                    echo "<script> alert('Email already exists')</script>";
                }
                else{
                $pass = md5($Password);
                $sql="Insert into admin(Name,Email,Password) Values('$Name','$Email','$pass')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "<script> alert('Registration Successful') </script>";
                }
                else{
                echo "<script> alert('Registration not successful') </script>";
                }
                }
            }
        }
        
          
        
    ?>
</body>
</html>