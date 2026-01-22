<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Player Comparison</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin-top: 100px;
    }
    h2 {
      text-align: center;
      font-size: 30px;
      font-family: 'Bebas Neue', sans-serif;
    }
    header h1 {
      text-align: center;
      font-size: 40px;
      margin-top: 30px;
      font-family: 'Bebas Neue', sans-serif;
      color: #000000;
    }
    header p {
      text-align: center;
      font-family: cursive;
      font-size: 20px;
    }
    nav {
      background-color: #DA291C;
      display: flex;
      justify-content: center;
      padding: 10px;
      gap: 70px;
      font-size: large;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }
    nav a:hover {
      transform: scale(1.3);
    }
    nav .dropdown {
      position: relative;
      display: inline-block;
    }
    nav .dropdownbtn {
      color: white;
      text-decoration: none;
      cursor: pointer;
    }
    nav .dropdowncontent {
      display: none;
      position: absolute;
      background-color: #DA291C;
      border-radius: 5px;
    }
    nav .dropdowncontent a {
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      display: block;
    }
    nav .dropdown:hover .dropdowncontent {
      display: block;
    }
    .form-container {
      text-align: center;
      margin-top: 40px;
    }
    select, button {
      padding: 10px;
      font-size: 16px;
      margin: 10px;
    }
    table {
      width: 80%;
      border-collapse: collapse;
      margin: 30px auto;
    }
    th, td {
      border: 2px solid #000;
      padding: 10px;
      text-align: center;
    }
    .thead {
      background-color: #DA291C;
      color: white;
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
    <h1>Player Comparison</h1>
    <p>Compare Your Favorite Stars</p>
  </header>

  <div class="form-container">
    <form method="post">
      <?php
        include 'dbconnect.php';
        $sql = "SELECT DISTINCT Name FROM playerdetails ORDER BY Name ASC";
        $result = mysqli_query($conn, $sql);
      ?>
      <label>Select Player 1:</label>
      <select name="player1" required>
        <option value="" disabled selected>Choose Player</option>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
        <?php } ?>
      </select>

      <?php
        // Run again for second dropdown
        $result2 = mysqli_query($conn, $sql);
      ?>
      <label>Select Player 2:</label>
      <select name="player2" required>
        <option value="" disabled selected>Choose Player</option>
        <?php while($row = mysqli_fetch_assoc($result2)) { ?>
          <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
        <?php } ?>
      </select>

      <button type="submit">Compare</button>
    </form>
  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $p1 = mysqli_real_escape_string($conn, $_POST['player1']);
    $p2 = mysqli_real_escape_string($conn, $_POST['player2']);

    $sql = "SELECT * FROM playerdetails WHERE Name IN ('$p1', '$p2')";
    $result = mysqli_query($conn, $sql);
    $players = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $players[] = $row;
    }

    if (count($players) == 2) {
      echo "<table>
              <tr class='thead'>
                
                <th>{$players[0]['Name']}</th>
                <th>Attribute</th>
                <th>{$players[1]['Name']}</th>
              </tr>
              <tr><td>{$players[0]['Age']}</td><td style='background-color: lavender;'>Age</td><td>{$players[1]['Age']}</td></tr>
              <tr><td>{$players[0]['Jersey']}</td><td style='background-color: lavender;'>Jersey</td><td>{$players[1]['Jersey']}</td></tr>
              <tr><td>{$players[0]['Position']}</td><td style='background-color: lavender;'>Position</td><td>{$players[1]['Position']}</td></tr>
              <tr><td>{$players[0]['Matches']}</td><td style='background-color: lavender;'>Matches</td><td>{$players[1]['Matches']}</td></tr>
              <tr><td>{$players[0]['Goals']}</td><td style='background-color: lavender;'>Goals</td><td>{$players[1]['Goals']}</td></tr>
              <tr><td>{$players[0]['Assists']}</td><td style='background-color: lavender;'>Assists</td><td>{$players[1]['Assists']}</td></tr>
              <tr><td>{$players[0]['Cleansheets']}</td><td style='background-color: lavender;'>Clean Sheets</td><td>{$players[1]['Cleansheets']}</td></tr>
              <tr><td>{$players[0]['Contract']}</td><td style='background-color: lavender;'>Contract</td><td>{$players[1]['Contract']}</td></tr>
            
              </table>";
    } else {
      echo "<p style='text-align:center; color:red;'>Both players must be selected and exist in the database.</p>";
    }
  }
  ?>

  <footer>
    &copy; 2025 Athletaker
  </footer>
</body>
</html>
