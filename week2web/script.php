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
?>
