<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        color: white;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        transition: 1s;
    }
    .kotak:hover{
        transform: rotate(360deg);
        border-radius: 50%;
    }
    .clear{
        clear: both;
    }
    </style>

</head>
<body>
    <?php 
    $arr = [1,2,3,4,5,6,7,8,9];
    $arr1 = [["A","B","C"],["D","E","F"],["G","H","I"]];
    ?>
    
        <?php foreach($arr as $i) : ?>
            <div class="kotak"><?= $i;?></div>
        <?php endforeach;?>
            <div class="clear"></div>
        <ul>
        <?php foreach ($arr1 as $i):?>
            <?php foreach($i as $i1):?>
                <br>
                <div class="kotak"><li><?= $i1;?></li></div> 
                <br>
            <?php endforeach;?>
            
        <?php endforeach;?>
        </ul>    
</body>
</html>