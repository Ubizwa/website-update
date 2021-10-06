<?php  include "head.php" ?>

<body>

<?php
include "server.php";
include "sidebar.php";

session_unset();
session_destroy();

echo "You have succesfully logged out."

?>

</body>
</html>
