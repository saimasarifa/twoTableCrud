<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "dolar");

$query = "DELETE FROM `dolar`.`taba` WHERE `taba`.`id` = $id";

mysqli_query($link, $query);
//var_dump($query);
header('location:list_dolar.php');
?>
