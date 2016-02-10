<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$PID = $_POST['PID'];
$grade = $_POST['grade'];
$verify = $_POST['verify'];

if (!$firstname) {
echo "<p>Please <a href=\"form.html\">go back</a> and enter your first name</a></p>";
}
elseif (!$lastname) {
echo "<p>Please <a href=\"form.html\">go back</a> and enter your last name</a></p>";
}
elseif (!$PID) {
echo "<p>Please <a href=\"form.html\">go back</a> and enter your PID</a></p>";
}
elseif (!$grade) {
echo "<p>Please <a href=\"form.html\">go back</a> and choose your grade</a></p>";
}
elseif (!$verify) {
echo "<p>Please <a href=\"form.html\">go back</a> and complete the form without a bot</a></p>";
}
else
{
  echo "<h2>Your Results</h2>";
  echo "<p>Thanks, <b>$firstname, $lastname</b>";
  echo "<p>Your PID is <b>$PID</b></p>";
  echo "<p>You are currently a <b>$grade</b></p>";
  echo "<p><a href=\"form.html\">start over!<a></p>";

}

if (isset($_POST['submit'])) {
//create, check connection
require("connect.php");

$SQL="INSERT INTO users (firstname, lastname, PID, grade, verify)
VALUES('$firstname','$lastname','$PID','$grade','$verify')";

if (mysqli_query($conn, $SQL)) {
    echo "<p>Thank you $firstname! You have been added to our data base.";
} else {
    echo "<p>We could not add you at this time. Please try again later.";
}
mysqli_close($conn);
}
?>
