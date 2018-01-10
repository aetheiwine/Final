<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/viewstyle.css">
  <title>Database View</title>
</head>

<body>
    <h1> Database View Page </h1>
    <p> Here you can view the Database </p>


    <?php

        $username="root";
        $password="";
        $database="trial";
        mysql_connect("localhost",$username,$password);
        mysql_select_db($database) or die( "Unable to select database");

        $query= "SELECT * FROM trials";

        $result=mysql_query($query);
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Appointment</th><th>date</th><th>time</th><th>Delete</th><th>Update</th></tr>";

        while($row = mysql_fetch_array($result))
         {
          echo '<td>' . $row['appoint'] . '</td>';
          echo '<td>' . $row['date'] . '</td>';
          echo '<td>' . $row['time'] . '</td>';
		  echo '<td><button onclick="deleteme()">Delete</button></td>';
		  echo '<td><button onclick="updateme()">Update</button></td>';
          echo "</tr>"; 
          }
         echo "</table>";

         mysql_close();

    ?>
</body>
</html>