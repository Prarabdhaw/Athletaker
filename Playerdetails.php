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
    width: 50%;
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
  nav{
      background-color: #DA291C;
      display: flex;
      justify-content: center;
      padding: 10px;
      gap: 70px;
      font-size: large;
      margin-top:0;
      position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
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
          </tr>
          <?php
          }
        }
        ?>
    </table>
    <br><br><br>
  </div>
  <footer>
    &copy; 2025 Athletaker
  </footer>
</body>
</html>
