<?php
session_start();
if($_SESSION["estado"]!="ok"){
    header("location: index.php");
}

echo "<h1>Hola ".$_SESSION["nombres"]."</h1>";
echo "Usted es un ".$_SESSION["tipo"];
