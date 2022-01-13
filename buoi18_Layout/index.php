<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #tong{
            width: 100%;
            height: 700px;
            background: black;
        }
        #tren{
            width: 100%;
            height: 20%;
            background: red;
        }
        #giua{
            width: 100%;
            background: yellow;
            height: 70%;
        }
        #duoi{
            width: 100%;
            height: 10%;
            background: green;
        }
    </style>
</head>

<body>
    <div id="tong">
        <?php include 'menu.php'; ?>
        <?php include 'products.php'; ?>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>