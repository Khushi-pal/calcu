<?php
 $matrix1 = array(array(5,3), array(4,3));
 $matrix2 = array(array(9, 3), array(9, 7));
 function transpose ($matrix) {
 $tMatrix = [];
 $o = count($matrix);
 $p = count($matrix[0]);
 for ($j = 0; $j < $o; $j++) {
 for ($k = 0; $k < $p; $k++) {
 $tMatrix[$k][$j] = $matrix[$j][$k];
 }
 }
 return $tMatrix;
 }
 function display ($matrix) {
 $o = count($matrix);
 $p = count($matrix[0]);
 for ($j = 0; $j < $o; $j++) {
 echo "<br>";
 for ($k = 0; $k < $p; $k++) {
 echo $matrix[$j][$k]."&nbsp;";
 }
 }
 }
 function addMatrix ($m1, $m2) {
 $result = array();
 $o = count($m1);
 $p = count($m1[0]);
 for ($j = 0; $j < $o; $j++) {
 for ($k = 0; $k < $p; $k++) {
 $result[$j][$k] = $m1[$j][$k] + $m2[$j][$k];
 }
 }
 return $result;
 }
 function multiplyMatrix ($m1, $m2) {
 $result = array();
 $p = count($m1);
 $q = count($m2[0]);
 $r = count($m2);

 for ($j = 0; $j < $p; $j++) {
 for ($k = 0; $k < $q; $k++) {
 $result[$j][$k] = 0;
 for ($l = 0; $l < $r; $l++) {
 $result[$j][$k] += $m1[$j][$l] * $m2[$l][$k];
 }
 }
 }
 return $result;
 }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Matrix Multiplication</title>
</head>
<body>
 <h1>Matrix operation</h1>
 <h2>Input the Matrix 1</h2>
 <?php display($matrix1); ?>
 <h2>Transpose the Matrix 1</h2>
 <?php display(transpose($matrix1)); ?>
 <h2>Input the Matrix 2</h2>
 <?php display($matrix2); ?>
 <h2>Transpose the Matrix 2</h2>
 <?php display(transpose($matrix2)); ?>
 <h2>Sum of Matrix 1 and Matrix 2</h2>
 <?php display(addMatrix($matrix1, $matrix2)); ?>

 <h2>Product of Matrix 1 and Matrix 2</h2>
 <?php display(multiplyMatrix($matrix1, $matrix2)); ?>
</body>
</html>