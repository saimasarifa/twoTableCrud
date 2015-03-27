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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
</head>
<body>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <form action ="add_dolar.php" method="post">

                <h1>hi i am dolar</h1>

                <label>entry one</label>
                <input type ="text" name="tabone" />
                <label>entry two</label>
                <input type ="text" name="tabtwo" />

                <button type ="submit">submit</button>

            </form>

        </div>

    </div>
    <br />
<div class="row">
    <div class="col-md-6">
        <table border="2" width="90%">
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
        </div>
    <div class="col-md-6">
    <table border="1" width="90%">
            <tr>
                <td>ID</td>
                <td>information</td>
                <td>Action</td>

            </tr>
            <?php
            foreach($result1 as $key=>$row){
                ?>

                <tr>
                    <td><?php echo $key+1?></td>
                    <td><?php echo $row['tabtwo']?></td>
                    <td><a href="delete_dolar.php?id=<?php echo $row['id']?>">Delete</a> |
                    </td>


                </tr>

            <?php
            }
            ?>

        </table>
    </div>
</div>
</section>



</body>
</html>
