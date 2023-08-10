<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    </td>
    <?
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "du_an1";

    $link = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM product";
    $image = $_GET['image'];
    $price = $_GET['price'];
    $description = $_GET['description'];



    ?>
    <tr>
        <div class="box_item">
            <a href="">
                <img src="image/<?php echo $image ?>" alt="">

            </a>
            <div class="item-hov">
            </div>

            <div class="money">
                <b><?php echo $price ?></b>
            </div>
            <div class="box-item-text">
                <a href="">
                    <?php echo $description ?>
                </a>
                <div class="box-item-gray">
                    <a href="">Men Originals</a>
                    <a href="">2 colours <span>new</span></a>
                </div>


            </div>

        </div>

    </tr>


</body>

</html>