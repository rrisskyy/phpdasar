<?php 
    $angka = [1,25,22,3,51,6,7,11,23];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <?php for ($i = 0; $i < count($angka); $i++): ?>
        <div class="kotak1"><?= $angka[$i] ?></div>
        <?php endfor; ?>

    <div class="clear"></div>        
    
    <?php foreach( $angka as $num ): ?>
        <div class="kotak1"><?= $num ?></div>
    <?php endforeach; ?>




</body>
</html>