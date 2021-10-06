<?php

$t = date("H");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_REQUEST['givenname'];
if (empty($name)) {
echo "You didn't give any name";
} else {



if ($t < "12") {
echo "Good morning " . $name .".";
}
elseif ($t < "20") {
echo "Good day " . $name . ".";
}
else
{
echo "Good night " . $name . ".";
}

}

}

?>