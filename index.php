
<html>
    <body>
        <h1>
            Hello Hamsterboy!
        </h1>
    </body>

</html>

<?php

require 'C:\xampp\htdocs\MegaHamsterCom\Classes\Areas.php';
require 'C:\xampp\htdocs\MegaHamsterCom\Classes\TheFlat.php';
require 'C:\xampp\htdocs\MegaHamsterCom\Classes\ThePit.php';
require 'C:\xampp\htdocs\MegaHamsterCom\Classes\TheRoom.php';

echo ("<br>");
$myTheRoom = new TheRoom();
$myTheRoom->calculateArea();
echo ("<br>");
$thePit = new ThePit();
$thePit-> calculateArea();
echo ("<br>");
$theflat = new TheFlat();
$theflat ->getSpecialEquipment();
echo ("<br>");
$theflat ->outputProductInfo();