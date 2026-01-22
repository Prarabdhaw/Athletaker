<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Man Utd Fixtures & Results</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #DA291C;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .section {
      margin: 40px 20px;
    }

    .section h2 {
      color: #DA291C;
      text-align: center;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .fixture-card {
      width: 280px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-left: 6px solid #DA291C;
      padding: 15px;
      position: relative;
    }

    .fixture-card .competition {
      text-align: center;
      font-weight: bold;
      color: #DA291C;
      font-size: 16px;
    }

    .fixture-card .gameweek {
      text-align: center;
      font-size: 14px;
      color: #555;
      margin: 5px 0;
    }

    .fixture-card .venue {
      text-align: center;
      font-size: 13px;
      color: #888;
      margin-bottom: 10px;
    }
    .fixture-card .date {
      text-align: center;
      font-size: 13px;
      color: #888;
      margin-bottom: 10px;
    }
    .fixture-card .time{
      text-align: center;
      font-size: 13px;
      color: #888;
      margin-bottom: 10px;
    }

    .teams {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
      font-size: 16px;
      font-weight: bold;
    }


    .home-team {
      text-align: left;
      color: #000;
    }

    .away-team {
      text-align: right;
      color: #000;
    }

    
    nav{
      background-color: #DA291C;
      display: flex;
      justify-content: center;
      padding: 10px;
      gap: 70px;
      font-size: large;
}

nav a{
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
}


nav a:hover{
    transform: scale(1.3);
}

nav .dropdown {
  position: relative;
  display: inline-block;
}

nav .dropdownbtn {
  color: rgb(255, 255, 255);
  text-decoration: none;
  font-size: bold;
  cursor: pointer;
  display: inline-block;
}


nav .dropdowncontent {
  display: none;
  position: absolute;
  background-color: #DA291C;
  border-radius: 5px;
}


nav .dropdowncontent a {
  color: rgb(255, 255, 255);
  padding: 10px 15px;
  text-decoration: none;
  display: flex;
  align-items: center;
}


nav .dropdowncontent a:hover {
      text-decoration: none;
}


nav .dropdown:hover .dropdowncontent {
  display: block;
}
footer {
      background-color: black;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      left: 0; 
      right: 0;
      width: 100%;
}
  </style>
</head>
<body>
  <nav>
    <a href="Home.html">Home</a>
    <a href="Playerdetails.php">Players</a>
    <div class="dropdown">
      <a href="#" class="dropdownbtn">Team</a>
      <div class="dropdowncontent">
        <a href="thisseason.php">This Season</a>
        <a href="Historicalachievement.html">Historical Achievements</a>
      </div>

    </div>
    <a href="About.html">About</a>
    <a href="Contact.html">Contact</a>
  </nav>
  
  <!-- Upcoming Fixtures -->
  <div class="section">
    <h2>📅 Upcoming Fixtures</h2>
    <div class="card-container">
      <?php
          include 'dbconnect.php';

          $sql="select * from fixtures";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
      <div class="fixture-card">
        <div class="competition"><?php echo $row['Competition']?></div>
        <div class="gameweek">Gameweek:<?php echo $row['Gameweek']?></div>
        <div class="teams">
          <div class="home-team"><?php echo $row['Hometeam']?></div>
          <div class="away-team"><?php echo $row['Awayteam']?></div>
        </div>
        <div class="venue"><?php echo $row['Venue']?></div>
        <div class="date"><?php echo $row['Matchdate']?></div>
        <div class="time"><?php echo $row['Matchtime']?></div>
        
      </div>

      <?php
            }
          }
  ?>
  <!-- Previous Results -->
  <div class="section">
    <h2>📊 Previous Results</h2>
    <div class="card-container">
      <?php
          include 'dbconnect.php';

          $sql="select * from results";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
      <div class="fixture-card">
        <div class="competition"><?php echo $row['Competition']?></div>
        <div class="gameweek">Gameweek:<?php echo $row['Gameweek']?></div>
        <div class="teams">
          <div class="home-team"><?php echo $row['Hometeam']?></div>
          <div class="away-team"><?php echo $row['Awayteam']?></div>
        </div>
        <div class="venue"><?php echo $row['Venue']?></div>
        <div class="date"><?php echo $row['Matchdate']?></div>

      </div>

      <?php
            }
          }
  ?>
  <footer>
    &copy; 2025 Athletaker
  </footer>
</body>
</html>
