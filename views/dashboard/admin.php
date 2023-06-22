<?php
session_start();
var_dump($_SESSION["sesi"]);

if($_SESSION["sesi"] == false){
    header("location: ../../index.php");
}
?>
<h1>admin</h1>
<br>
<a href="../../logout.php"> logout</a>