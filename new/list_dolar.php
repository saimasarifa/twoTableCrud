<?php


$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "dolar");

$query = "select * from `taba`";
$query1 = "select * from `tabb`";
/*$query = "select * from tabb;";*/


$result = mysqli_query($link, $query);
$result1 = mysqli_query($link, $query1);
/*var_dump($result);
die();*/



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<ul>

    <li><a href="create_dolar.php">Create New </a> </li>
</ul>



    <table border="2" width="50%">
        <tr>
            <td>ID</td>
            <td>information</td>
            <td>Action</td>

        </tr>
        <?php
        foreach($result as $key=>$row){

            ?>

            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $row['tabone']?></td>
                <td><a href="delete_dolar.php?id=<?php echo $row['id']?>">Delete</a> |
                </td>
            </tr>

        <?php
        }
        ?>

    </table>


    <table border="1" width="50%">
        <tr>
            <td>ID</td>
            <td>information</td>
        </tr>
        <?php
        foreach($result1 as $row){
            ?>

            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['tabtwo']?></td>


            </tr>

        <?php
        }
        ?>

    </table>

</body>
</html>



