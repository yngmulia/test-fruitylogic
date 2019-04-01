<?php
require("control.inc.php");

$tes = NEW control();

$tes = NEW Control();
$arr = array();
$arr[] = $tes->tam_str_n("Test FruityLOGIC");
$arr[] = $tes->jml_day(2, 2017);
$arr[] = $tes->maxgood();

echo "<pre>";
echo implode("<br>", $arr);
echo "<br>==========ANAGRAM==========<br>";
$tes->isAnagram("secure", "rescue");
$tes->isAnagram("conifers", "fir cones");
$tes->isAnagram("google", "facebook");
$tes->isAnagram("hari", "rhai");
echo "</pre>";
?>