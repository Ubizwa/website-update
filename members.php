<?php include "head.php"; 
?>



<body>

<?php

include "server.php";
include "sidebar.php";

$sql = "SELECT username,created_at,id FROM users ORDER BY created_at";
$result = $conn->query($sql);

echo "<table>
<tr>
<th>Members</th><th>Registered at</th>
</tr>";

if($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td><a href='profile/memberprofile.php?id=" . $row["id"] . "'>" . $row["username"] . "</a></td><td>" . $row["created_at"] . "</td></tr>";
}
}
else {
echo "No members";
}

$conn->close();


echo "</table>";



?>

</body>
</html>