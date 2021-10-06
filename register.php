<?php  include "head.php" ?>


<body>

<?php
include "sidebar.php";
include "server.php";

?>



Register an account:<br><br>
<form action="doregister.php" method="post" name="register" onsubmit="check()">
Username: <input type="text" name="username" class="username" required/><br>
Password: <input type="password" name="password" class="password" required/><br>
<input type="submit" name="submit" value="Register"><br>
</form>


</body>
</html>