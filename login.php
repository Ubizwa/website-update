<?php include "head.php" ?>


<body>

<?php
include "sidebar.php";
include "server.php"; ?>
You can log in here: <br>
<form action="loginprocess.php" method="post">
Username: <input type="text" name="usernameuser" required/><br>
Password: <input type="password" name="passworduser" required/><br>
<input type="submit" value="submit">
</form>
</body>
</html>