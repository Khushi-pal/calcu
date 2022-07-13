<?php
 $result = 0;

 if (isset($_GET['calculate'])) {
 $number1 = $_GET['number1'];
 $number2 = $_GET['number2'];
 $op = $_GET['op'];
 switch($op) {
 case '+':
 $result = $number1 + $number2;
 break;
 case '-':
 $result = $number1 - $number2;
 break;
 case '*':
 $result = $number1 * $number2;
 break;
 case '/':
 $result = $number1 / $number2;
 break;
 default:
 $result = 0;
 }
 }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Calculator</title>
 <style>
 input {
 display: block;
 }
 </style>
</head>
<body>
 <h1>Calculator</h1>
 <form action="" method="GET">
 <label for="number1">Enter the first number</label>
 <input type="text" id="number1" name="number1" value="0" required>

 <label for="number2">Enter the second number</label>
 <input type="text" id="number2" name="number2" value="0" required>

 <label for="op">Choose the  operation</label>
 <select name="op" id="op">
 <option value="+">Addition</option>
 <option value="-">Subtraction</option>
 <option value="*">Multiplication</option>
 <option value="/">Division</option>
 </select>
 <input type="submit" value="calculate" name="calculate">
 </form>
 <h2>Result: <?php echo $result; ?></h2>
</body>
</html>
