<?php
  require("connect.php");
  $SQL = "SELECT * FROM users";
  $result = mysqli_query($conn, $SQL) or die("could not complete your query");

  echo "<table>";
    echo "<tr><th>Entry ID</th><th>First Name</th><th>Last Name</th><th>PID</th><th>Grade</th><th>Verify</th></tr>";
      while($row = mysqli_fetch_array($result)) {
        $entry_id = $row['entry_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $PID = $row['PID'];
        $grade = $row['grade'];
        $verify = $row['verify'];
        echo "<tr><td>$entry_id<td>$firstname</td><td>$lastname</td><td>$PID</td><td>$grade</td><td>$verify</td></tr>"; }
echo "</table>";
mysqli_close($conn);
?>
