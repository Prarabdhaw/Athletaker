<?php 
    include 'dbconnect.php';
    $Id=$_GET['Id'];
    $sql="Select * from playerdetails where Id='$Id'";
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
    input[type="number"],input[type="date"]{
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
    <h2>Insert Player Details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="id">Id:</label>
      <input type="text" id="name" name="Id" value="<?php echo $row['Id'];?>"required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="Name" value="<?php echo $row['Name'];?>"required>

      <label for="age">Age:</label>
      <input type="text" id="name" name="Age" value="<?php echo $row['Age'];?>" required>

      <label for="jersey">Jersey Number:</label>
      <input type="number" id="jersey" name="Jersey" value="<?php echo $row['Jersey'];?>" required>

      <label for="position">Position:</label>
      <input type="radio" id="position" name="Position" value="Goalkeeper" <?php if($row['Position']=='Goalkeeper') echo 'checked'?> required>Goalkeeper <br>
      <input type="radio" id="position" name="Position" value="Defender" <?php if($row['Position']=='Defender') echo 'checked'?> required>Defender <br>
      <input type="radio" id="position" name="Position" value="Midfielder" <?php if($row['Position']=='Midfielder') echo 'checked'?> required>Midfielder <br>
      <input type="radio" id="position" name="Position" value="Attacker" <?php if($row['Position']=='Attacker') echo 'checked'?> required >Attacker <br>

      <label for="matches">Matches:</label>
      <input type="number" id="matches" name="Matches" value="<?php echo $row['Matches'];?>" required>

      <label for="goals">Goals:</label>
      <input type="number" id="goals" name="Goals" value="<?php echo $row['Goals'];?>" required>

      <label for="assists">Assists:</label>
      <input type="number" id="assists" name="Assists" value="<?php echo $row['Assists'];?>" required>

      <label for="cleansheets">Clean Sheets:</label>
      <input type="number" id="cleansheets" name="Cleansheets" value="<?php echo $row['Cleansheets'];?>" required>

      <label for="contract">Contract:</label>
      <input type="date" id="contract" name="Contract" value="<?php echo $row['Contract'];?>" required>

      <button type="submit" name="Submit">Submit</button>
    </form>
     <a href="adminviewplayer.php"><button>View</button></a>
  </div>

  <?php
    include 'dbconnect.php';
    if(isset($_POST['Submit'])){
      $Id=$_POST['Id'];
      $Name=$_POST['Name'];
      $Age=$_POST['Age'];
      $Jersey=$_POST['Jersey'];
      $Position=$_POST['Position'];
      $Matches=$_POST['Matches'];
      $Goals=$_POST['Goals'];
      $Assists=$_POST['Assists'];
      $Cleansheets=$_POST['Cleansheets'];
      $Contract=$_POST['Contract'];


      $sql="Update playerdetails set Id='$Id',Name='$Name',Age='$Age',Jersey='$Jersey',Position='$Position',Matches='$Matches',Goals='$Goals',Assists='$Assists',Cleansheets='$Cleansheets',Contract='$Contract' where Id='$Id'";
      
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
