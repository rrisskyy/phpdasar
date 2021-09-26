
<?php
    $blackbulls = [
        [
            "name" => "Grey",
            "power" => 350,
            "rank" => "15",
            "skill" => "Transformation Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "grey.png"
        ],
        [
            "name" => "Gordon Agrippa",
            "rank" => "14",
            "power" => 510,
            "skill" => "Posion Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "gordon.png"
        ],
        [
            "name" => "Secre Swallowtail",
            "rank" => "13",
            "power" => 620,
            "skill" => "Forbidden Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "secre.png"
        ],
        [
            "name" => "Finral Roulacase",
            "rank" => "12",
            "power" => 750,
            "skill" => "Teleportation Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "finral.png"
        ],
        [
            "name" => "Magna Swing",
            "rank" => "11",
            "power" => 880,
            "skill" => "Fire Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "magna.png"
        ],
        [
            "name" => "Henry Legolant",
            "rank" => "10",
            "power" => 1570,
            "skill" => "Black Bulls Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "henry.png"
        ],
        [
            "name" => "Zora Ideale",
            "rank" => "9",
            "power" => 2100,
            "skill" => "Trap Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "zora.png"
        ],
        [
            "name" => "Gauche Adlai",
            "rank" => "8",
            "power" => 3000,
            "skill" => "Mirror Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "gauche.png"
        ],
        [
            "name" => "Vanessa Enoteca",
            "rank" => "7",
            "power" => 3400,
            "skill" => "Red Thread of Fate magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "vanessa.png"
        ],
        [
            "name" => "Luck Voltia",
            "rank" => "6",
            "power" => 5000,
            "skill" => "Thunder Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "luck.png"
        ],
        [
            "name" => "Noelle Silva",
            "rank" => "5",
            "power" => 7800,
            "skill" => "Water Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "noelle.png"
        ],
        [
            "name" => "Charmy Pappiston",
            "rank" => "4",
            "power" => 10500,
            "skill" => "Cotton and dwarf Magic",
            "grimoire" => "3 Leaf",
            "position" => "Member",
            "img" => "charmy.png"
        ],
        [
            "name" => "Asta",
            "rank" => "3",
            "power" => 12500,
            "skill" => "Anti Magic",
            "grimoire" => "5 Leaf",
            "position" => "Member",
            "img" => "asta.png"
        ],
        [
            "name" => "Nacht",
            "rank" => "2",
            "power" => 17500,
            "skill" => "Devil Magic",
            "grimoire" => "5 Leaf",
            "position" => "Vice Captain",
            "img" => "nacht.png"
        ],
        [
            "name" => "Yami Sukehiro",
            "rank" => "1",
            "power" => 21000,
            "skill" => "Dark Magic",
            "grimoire" => "3 Leaf",
            "position" => "Captain",
            "img" => "yami.png"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Clover</title>
</head>
<body>
    <h1>Black Bulls Members</h1>
    <ul>
        <?php foreach($blackbulls as $member):?>
        <li><img src="img/<?= $member["img"]?>" alt=""></li>
        <li>Rank: <?= $member["rank"]?></li>
        <li>Name: <?= $member["name"]?></li>
        <li>Power: <?= $member["power"]?></li>
        <li>Magic: <?= $member["skill"]?></li>
        <li>Grimoire: <?= $member["grimoire"]?></li>
        <li>Position: <?= $member["position"]?></li>
        <br><br>
        <?php endforeach;?>
    </ul>
</body>
</html>