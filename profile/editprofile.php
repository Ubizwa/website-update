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
<tr><th>Edit your profile</th></tr>
<form action="submiteditsprofile.php" method="post">
<tr><td>Username: <input type="text" name="usernameedit" value="<?php
echo $_SESSION["username"]; ?>">
</td></tr>
<tr><td>Hobbies: <input type="text" name="hobbiesedit" value="<?php
echo $_SESSION["hobbies"]; ?>">
</td></tr>
<tr><td>Favourite bands: <input type="text" name="musicedit" value="<?php
echo $_SESSION["music"]; ?>">
</td></tr>
<tr><td>Website: <input type="text" name="websiteedit" value="<?php
echo $_SESSION["website"]; ?>">
</td></tr>
<tr><td><input type="submit" value="Submit changes">
</form>
</td></tr>
</table>
</div>


</body>
</html>