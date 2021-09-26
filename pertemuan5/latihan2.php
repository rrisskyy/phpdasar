<?php
    $arr = [1,2,3,4,5,6,7,8,9,10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak1 {
            width: 50px;
            height: 50px;
            background-color: #DA2;
            float: left;
            line-height: 50px;
            text-align: center;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
        <?php for($i = 0; $i < count($arr); $i++){ ?>
            <div class="kotak1"><?php echo $arr[$i] ?></div>
        <?php } ?>

        
        <div class="clear"></div>

        <?php foreach($arr as $x){ ?>
            <div class="kotak1"><?php echo $x; ?></div>
        <?php } ?>


        <div class="clear"></div>

        <?php foreach($arr as $x): ?>
            <div class="kotak1"><?= $x; ?></div>
        <?php endforeach; ?>
</body>
</html>