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
<tr><th>My profile</th></tr>
<tr><td>Username: <?php
echo $_SESSION["username"];

echo "</td></tr>
<tr><td>Date of registration: ";
echo $_SESSION["registerdate"];
echo "</td></tr><tr><td>Hobbies: ";
echo $_SESSION["hobbies"];
echo "</td></tr>
<tr><td>Favourite bands:";
echo $_SESSION["music"];
echo "</td></tr>";
echo "<tr><td>Website: ";
echo $_SESSION["website"];
echo "</td></tr>";

?>
<tr><td>
<button onclick="document.location='editprofile.php'">Edit my profile</button></td></tr>
</table>
</div>


</body>
</html>