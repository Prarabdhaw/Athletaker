<?php 
    include 'dbconnect.php';
    $Fid=$_GET['Fid'];
    $sql="Select * from fixtures where Fid='$Fid'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Insert Player Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 500px;
      margin-left:50px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #b30000;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],input[type="date"],input[type="time"]{
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    button {
      margin-top: 25px;
      padding: 12px 20px;
      background-color: #b30000;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }

    button:hover {
      background-color: #990000;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Insert Match Details</h2>
    <form action="" method="POST" enctype="multipart/form-data">

      <label for="competition">Competition:</label>
      <input type="text" id="competition" name="Competition" value="<?php echo $row['Competition'] ?>" required>

      <label for="gameweek">Gameweek:</label>
      <input type="number" id="gameweek" name="Gameweek" value="<?php echo $row['Gameweek'] ?>" required>

      <label for="Home">Home Team:</label>
      <input type="text" id="hometeam" name="Hometeam" value="<?php echo $row['Hometeam'] ?>" required>

      <label for="Away">Away Team:</label>
      <input type="text" id="awayteam" name="Awayteam"value="<?php echo $row['Awayteam'] ?>" required>

      <label for="venue">Venue:</label>
      <input type="text" id="venue" name="Venue" value="<?php echo $row['Venue'] ?>" required>

      <label for="date">Match Date:</label>
      <input type="date" id="matchdate" name="Matchdate" value="<?php echo $row['Matchdate'] ?>">

      <label for="time">Match Time:</label>
      <input type="time" id="matchtime" name="Matchtime" value="<?php echo $row['Matchtime'] ?>">

      <button type="submit" name="Submit">Submit</button>
    </form>
    <a href="adminviewthisseason.php"><button>View</button></a>
  </div>

  <?php
    include 'dbconnect.php';
    
    if(isset($_POST['Submit'])){

      $Competition=$_POST['Competition'];
      $Gameweek=$_POST['Gameweek'];
      $Hometeam=$_POST['Hometeam'];
      $Awayteam=$_POST['Awayteam'];
      $Venue=$_POST['Venue'];
      $Matchdate=$_POST['Matchdate'];
      $Matchtime=$_POST['Matchtime'];
    


      $sql="Update fixtures set Competition='$Competition',Gameweek='$Gameweek',Hometeam='$Hometeam',Awayteam='$Awayteam',Venue='$Venue',Matchdate='$Matchdate',Matchtime='$Matchtime' where Fid='$Fid'";
      $result=mysqli_query($conn,$sql);
      if($result){
        echo "<script>alert('Records were inserted successfully')</script>";
      }
      else{
      echo "<script>alert('Records were not inserted successfully')</script>";
    }
    }
  ?>
</body>
</html>
