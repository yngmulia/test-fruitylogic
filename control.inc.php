<?php
/**
 * 
 */
class Control {
  
  /*function __construct(argument) {
    # code...
  }*/

  function tam_str_n($str) {
  	$res = "";
  	for ($i=0; $i < strlen($str); $i++) $res.= "<br>".($i+1).". $str";

  return substr($res, 4);
  }
	function jml_day($m="", $y="") {
	  $m = (!empty($m)) ? $m : (int) date("m");
	  $y = (!empty($y)) ? $y : (int) date("Y");
	  $lastday = date('d', strtotime('-1 second', strtotime('+1 month', strtotime(date($m).'/01/'.date($y).' 00:00:00'))));

	return $lastday;
	}
	function maxgood() {
		$res = "";
		for ($i=1; $i <= 100; $i++) {
			if ($i % 3 == 0 && $i % 5 == 0) $res.= ", MaxGood";
			elseif ($i % 3 == 0) $res.= ", Max";
			elseif ($i % 5 == 0) $res.= ", Good";
			else $res.= ", $i";
		}

	return substr($res, 2);
	}
	function isAnagram($a, $b) {
		$a = str_replace(" ", "", $a);	$a = str_replace("-", "", $a);
		$b = str_replace(" ", "", $b);	$b = str_replace("-", "", $b);

		$res = true;
		if (strlen($a)!=strlen($a)) $res = false;
		else {
			for ($i=0; $i < strlen($a); $i++) { //echo $a[$i]." ".strpos($b, $a[$i])." $b<br> ";
				if (strpos($b, $a[$i])===false) {
					$res = false;
					break;
				}/**/
			}
		}
		if ($res) echo "true<br>";
		else echo "false<br>";

	return $res;
	}
}

?>