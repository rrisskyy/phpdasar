<?php
    $blackbulls = [
        [
            "name" => "Grey",
            "power" => 350,
            "rank" => "15",
            "skill" => "Transformation Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "img/grey.png"
        ],
        [
            "name" => "Yami Sukehiro",
            "rank" => "1",
            "power" => 21000,
            "skill" => "Dark Magic",
            "grimoire" => "3 Leaf",
            "position" => "Captain",
            "img" => "img/yami.png"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($blackbulls as $member):?>
        <li>
            <a href="pplink.php?gambar=<?php echo $member["img"]?>&nama=<?php echo $member["name"]?>&peringkat=<?php echo $member["rank"]?>&kekuatan=<?php echo $member["power"]?>&kemampuan=<?php echo $member["skill"]?>&posisi=<?php echo $member["position"]?>"><?=$member["name"]?>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
    
</body>
</html>