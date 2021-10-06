<?php  include "head.php" ?>


<body>

<?php
include "sidebar.php";
include "server.php";

$usernameuser = $_POST["usernameuser"];
$passworduser = $_POST["passworduser"];

$sql = "SELECT username, password, created_at,id, hobbies, music, website FROM users WHERE username='$usernameuser' AND password='$passworduser'";
$result = $conn->query($sql);

if($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
echo "Hello " . $row["username"]. ". You are succesfully logged in.";


$_SESSION["loggedin"] = "loggedin";
$_SESSION["username"] = $row["username"];
$_SESSION["registerdate"] = $row["created_at"];
$_SESSION["id"] = $row["id"];
$_SESSION["hobbies"] = $row["hobbies"];
$_SESSION["music"] = $row["music"];
$_SESSION["website"] = $row["website"];


}
}
else
{
echo "Couldn't find your username.";
}
$conn->close();

?>
</body>
</html>