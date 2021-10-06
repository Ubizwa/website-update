<div class="header">
Hroth's back to the 90s page
</div>

<div class="welcome">
<?php

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
$url = "https://";
}
else
{
$url = "http://";
}

$url.= $_SERVER['HTTP_HOST'];
$url.= $_SERVER['REQUEST_URI'];





if($_SESSION["loggedin"] == "loggedin")

{
echo "Welcome " . $_SESSION["username"];


if(strpos($url, 'profile.php') !== false)
{
echo "<a href='../logout.php'>Log out</a>";
}
else
{
echo "<a href='logout.php'>Log out</a>";
}


}
else


{
echo "Welcome guest, ";

if(strpos($url, 'profile.php') !== false)
{
echo "<a href='../login.php'>log in</a>";
}
else
{
echo "<a href='login.php'>log in</a>";
}

echo "or ";

if(strpos($url, 'file/profile.php') !== false)
{
echo "<a href='../register.php'>register</a>";
}
else
{
echo "<a href='register.php'>register</a>";
}


}

?>


</div>

<div class="sidebar">
<ul>
<li>

<?php



if(strpos($url, 'profile.php') !== false)
{
echo "<a href='../home.php'>Home</a><br></li>";
echo "<li><a href='../members.php'>Members</a><br></li>";
}
else
{
echo "<a href='home.php'>Home</a><br></li>";
echo "<li><a href='members.php'>Members</a><br></li>";
}



if ($_SESSION["loggedin"] == "loggedin")

{

if(strpos($url, 'file/profile.php') !== false)
{
echo "<li>My profile</li>";
}
elseif(strpos($url, 'profile.php') !== false)
{
echo "<li><a href='profile.php'>My profile</a></li>";
}
else
{
echo "<li><a href='profile/profile.php'>My profile</a></li>";
}

}
?>

</ul>

</div>