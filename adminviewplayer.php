<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Player Details</title>
  <style>
    h2{
      font-size:30px;
      text-align:center;
      font-family: 'Bebas Neue', sans-serif;
    }
   body{
    margin-top: 100px;
   }
  header h1{
    font-size: 40px;
    align-content: center;
    text-align: center;
    margin-top: 30px;
    font-family:'Bebas Neue', sans-serif;
    color: #000000;
  }
  header p{
    font-size: 20px;
    align-content: center;
    text-align: center;
    font-family: cursive;
  }
  .table-container{
      margin-top:100px;
  }
  table {
    width: 70%;
    border-collapse: collapse;
    margin: 0 auto;
  }
  .thead{
    background-color:#DA291C;
    color:white;
    margin:80%;
  }
  .tdetails{
    text-align:center;
  }
  </style>
</head>
<body>
  <header>
      <h1>Player Details</h1>
      <p>Where Champions Are Tracked</p>
  </header>
  <div class="table-container">
    <table cellpadding="10px" border="2">
        <tr class="thead">
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Jersey</th>
            <th>Position</th>
            <th>Matches</th>
            
            <th>Clean Sheets</th>
            <th>Contract</th>
            <th>Actions</th>
        </tr>
        <h2>🧤Goalkeepers</h2>
        <?php
          include 'dbconnect.php';

          $sql="select * from playerdetails where position='Goalkeeper'";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
          <tr class="tdetails">
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Age']?></td>
            <td><?php echo $row['Jersey']?></td>
            <td><?php echo $row['Position']?></td>
            <td><?php echo $row['Matches']?></td>
            <td><?php echo $row['Cleansheets']?></td>
            <td><?php echo $row['Contract']?></td>
            <td>
            <button><a href="deleteplayer.php?Id=<?php echo $row['Id'];?>">Delete</a></button>
            <button><a href="adminupdateplayer.php?Id=<?php echo $row['Id'];?>">Update</a></button>
            </td>  
          </tr>
          <?php
          }
        }
        ?>
    </table>
    <table cellpadding="10px" border="2">
        <tr class="thead">
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Jersey</th>
            <th>Position</th>
            <th>Matches</th>
            <th>Goals</th>
            <th>Assists</th>
            <th>Clean Sheets</th>
            <th>Contract</th>
            <th>Actions</th>
        </tr>
        <h2>🛡️Defenders</h2>
        <?php
          include 'dbconnect.php';

          $sql="select * from playerdetails where position='Defender'";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
          <tr class="tdetails">
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Age']?></td>
            <td><?php echo $row['Jersey']?></td>
            <td><?php echo $row['Position']?></td>
            <td><?php echo $row['Matches']?></td>
            <td><?php echo $row['Goals']?></td>
            <td><?php echo $row['Assists']?></td>
            <td><?php echo $row['Cleansheets']?></td>
            <td><?php echo $row['Contract']?></td>
            <td>
            <button><a href="deleteplayer.php?Id=<?php echo $row['Id'];?>">Delete</a></button>
            <button><a href="adminupdateplayer.php?Id=<?php echo $row['Id'];?>">Update</a></button>
            </td> 
          </tr>
          <?php
          }
        }
        ?>
        <table cellpadding="10px" border="2">
        <tr class="thead">
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Jersey</th>
            <th>Position</th>
            <th>Matches</th>
            <th>Goals</th>
            <th>Assists</th>

            <th>Contract</th>
            <th>Actions</th>
        </tr>
        <h2>🪄Midfielders</h2>
        <?php
          include 'dbconnect.php';

          $sql="select * from playerdetails where position='Midfielder'";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
          <tr class="tdetails">
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Age']?></td>
            <td><?php echo $row['Jersey']?></td>
            <td><?php echo $row['Position']?></td>
            <td><?php echo $row['Matches']?></td>
            <td><?php echo $row['Goals']?></td>
            <td><?php echo $row['Assists']?></td>
            <td><?php echo $row['Contract']?></td>
            <td>
            <button><a href="deleteplayer.php?Id=<?php echo $row['Id'];?>">Delete</a></button>
            <button><a href="adminupdateplayer.php?Id=<?php echo $row['Id'];?>">Update</a></button>
            </td>   
          </tr>
          <?php
          }
        }
        ?>
    </table>
    <table cellpadding="10px" border="2">
        <tr class="thead">
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Jersey</th>
            <th>Position</th>
            <th>Matches</th>
            <th>Goals</th>
            <th>Assists</th>

            <th>Contract</th>
            <th>Actions</th>
        </tr>
        <h2>🎯Attackers</h2>
        <?php
          include 'dbconnect.php';

          $sql="select * from playerdetails where position='Attacker'";
          $result=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);

          if($num>0){
            while($row=mysqli_fetch_assoc($result)){

        ?>
          <tr class="tdetails">
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Age']?></td>
            <td><?php echo $row['Jersey']?></td>
            <td><?php echo $row['Position']?></td>
            <td><?php echo $row['Matches']?></td>
            <td><?php echo $row['Goals']?></td>
            <td><?php echo $row['Assists']?></td>
            <td><?php echo $row['Contract']?></td>
            <td>
            <button><a href="deleteplayer.php?Id=<?php echo $row['Id'];?>">Delete</a></button>
            <button><a href="adminupdateplayer.php?Id=<?php echo $row['Id'];?>">Update</a></button>
            </td> 
          </tr>
          <?php
          }
        }
        ?>
    </table>
  </div>
</body>
</html>
