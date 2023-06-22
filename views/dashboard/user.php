<?php
session_start();

if($_SESSION["sesi"] == false){
    header("location: ../index.php");
}
?>

<h1>user</h1>
<br>
<a href="../logout.php"></a>