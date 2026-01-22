<?php
    include 'dbconnect.php';
    session_start();

    $Profile = $_SESSION['Login'];
    if($Profile==true){

    }
    else{
        header('Location:http://localhost/DBMS%20Project/adminregistration.php');
    }
    $sql = "SELECT * FROM admin WHERE name = '$Profile'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:#DCDCDC;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: rgba(0, 0, 0, 0.85);
            padding: 30px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.5);
            gap:30px;
            text-align:center;
        }

        .admin-photo {
            width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .sidebar h2 {
            color: #ffcc00;
            margin-bottom: 30px;
            font-size:35px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 40px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #ffcc00;
        }

        .main-content {
            flex-grow: 1;
            padding: 40px;
            backdrop-filter: blur(3px);
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color:black;
        }

        .main-content p {
            font-size: 1.2rem;
            max-width: 600px;
            color:black;
        }
        #view{
            color:black;
            background-color:gold;
            border:0px;
            border-radius:6px;
            font-size:20px;
            cursor:pointer;
            padding:10px;
        }

    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="admininsertplayerdata.php">Insert Player Details</a></li>
                <li><a href="adminviewplayer.php">View Player Records</a></li>
                <li><a href="admininsertfixtures.php">Insert Fixtures</a></li>
                <li><a href="admininsertresults.php">Insert Results</a></li>
                <li><a href="adminviewthisseason.php">View Team Details</a></li>
                <li><a href="logout.php">Log Out</a></li> <br><br><br>
                <li><a href="Home.html"><button type="submit" id="view">View Website</button></a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="welcome_box">
                <h1>Welcome, Admin <br><?php echo($row['Name']); ?></h1>
                <p>This dashboard helps you manage Manchester United's player information, match stats, and club data.</p>
            </div>
        </div>        
    </div>
</body>
</html>
