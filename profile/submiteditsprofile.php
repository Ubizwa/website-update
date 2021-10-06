<?php  
include "../head.php"; 
?>
<body>
<?php

include "../sidebar.php";
include "../server.php";

?>

<div>
<?php

$id = $_SESSION["id"];
$uname = $_POST["usernameedit"];
$musicchange = $_POST["musicedit"];
$hobbieschange = $_POST["hobbiesedit"];
$websitechange = $_POST["websiteedit"];

$sql = $conn->prepare("UPDATE users SET username=?, hobbies=?, music=?, website=? WHERE id=$id");
$sql->bind_param('ssss', $uname, $hobbieschange, $musicchange, $websitechange);
$sql->execute();




$check = "SELECT username FROM users WHERE id='$id'";
$result = $conn->query($check);

if($result->num_rows > 0) {
echo "Your profile has been changed.<br>";
echo "<a href='profile.php'>Go back to your profile.</a>";

$_SESSION["username"] = $uname;
$_SESSION["music"] = $musicchange;
$_SESSION["hobbies"] = $hobbieschange;
$_SESSION["website"] = $websitechange;


}
else
{
echo "Couldn't update your profile.<br>";
echo "<a href='profile.php'>Go back to your profile.</a>";
}

?>

</div>


</body>
</html>