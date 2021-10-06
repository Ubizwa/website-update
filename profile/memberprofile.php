<?php  
include "../head.php"; 
?>
<body>
<?php

include "../sidebar.php";
include "../server.php";

?>

<div>
<table>
<tr><th>Profile</th></tr>
<tr><td>Username: 

<?php
$idmember = $_GET["id"];


$check = "SELECT username, hobbies, music, website, created_at FROM users WHERE id='$idmember'";
$resultcheck = $conn->query($check);


if($resultcheck->num_rows > 0) {

while($row = $resultcheck->fetch_assoc()) {
echo $row["username"];

echo "</td></tr>
<tr><td>Date of registration: ";
echo $row["created_at"];
echo "</td></tr><tr><td>Hobbies: ";
echo $row["hobbies"];
echo "</td></tr>
<tr><td>Favourite bands:";
echo $row["music"];
echo "</td></tr>";
echo "<tr><td>Website: ";
echo $row["website"];
echo "</td></tr>";
}
}
else
{
echo "Couldn't load profile.";
}

$conn->close();

?>
<tr><td>
</table>
</div>


</body>
</html>