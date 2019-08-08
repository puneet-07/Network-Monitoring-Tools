<?php
include "config.php";
ini_set('display_errors', '1');
$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $_POST['user']);
$mypassword = mysqli_real_escape_string($con, $_POST['pass']);

shell_exec("./packets.sh");

$sql_query = "select * from users where username='".$myusername."' and password='".$mypassword."'";
        $result = mysqli_query($con,$sql_query);
        $count = mysqli_num_rows($result);

if ($count == 1)
{
    $var = shell_exec("./packets.sh");
    header("Location:selection.html");
}
else {
    echo "YOU HAVE ENTERED WRONG USERNAME OR PASSWORD";
}
?>
