<?php

$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "dolar");

$query = "INSERT INTO `taba`(`id`,`tabone`)
          VALUES('','$_POST[tabone]')";

$query1 = "INSERT INTO `tabb`(`id`,`tabtwo`)
          VALUES('','$_POST[tabtwo]')";
/*
$query = "INSERT INTO `dolar`.`tabb`(
`tabtwo`

)
VALUES ('".$_POST['tabtwo']."')";*/



mysqli_query($link, $query);
mysqli_query($link, $query1);

header('location:create_dolar.php');
