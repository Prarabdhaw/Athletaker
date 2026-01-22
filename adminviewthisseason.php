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

    footer {
      text-align: center;
      padding: 10px;
      background-color: #000;
      color: white;
      margin-top: 60px;
    }
  </style>
</head>
<body>

  
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
        <div>
            <button><a href="deletefixture.php?Fid=<?php echo $row['Fid'];?>">Delete</a></button>
            <button><a href="adminupdatefixture.php?Fid=<?php echo $row['Fid'];?>">Update</a></button>
        </div>
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
        <div>
            <button><a href="deleteresult.php?Rid=<?php echo $row['Rid'];?>">Delete</a></button>
            <button><a href="adminupdateresult.php?Rid=<?php echo $row['Rid'];?>">Update</a></button>
        </div>
      </div>

      <?php
            }
          }
  ?>
      
</body>
</html>
