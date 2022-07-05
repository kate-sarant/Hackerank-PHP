<?php

$arr = [7,69,2,221,8974];

function miniMaxSum($arr) {
$arrMy = $arr;
sort($arrMy);

$a = array_pop($arrMy);
foreach ($arrMy as $key => $avalue) {
  $aSum=+ $aSum+$avalue;
}

$arrB = $arr;
sort($arrB );
$b = array_shift($arrB);
foreach ($arrB  as $key => $value) {
  $bSum=+ $bSum+$value;
}
$rez = intval($aSum)." ".intval($bSum);
return $rez;
}

echo miniMaxSum($arr);

 ?>
