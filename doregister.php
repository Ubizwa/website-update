<?php  include "head.php";

?>
<body>

<?php
include "sidebar.php";
include 'server.php';


$usernameuser = $_POST["username"];
$passworduser = $_POST["password"];


$check = "SELECT username FROM users WHERE username='$usernameuser'";
$resultcheck = $conn->query($check);



$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss",$usernameuser, $passworduser);



if($resultcheck->num_rows > 0) {

echo "That username is already taken.";
}
else 

{



$usernameuser;
$passworduser;
$stmt->execute();

echo "Your registration was successful."; 


}



$stmt->close();
$conn->close();




?>

<br>
You can log in <a href="login.php">here</a>.

</body>
</html>