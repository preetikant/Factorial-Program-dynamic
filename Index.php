<!-- <?php  

// function fact($num){
// 	$factorial =1;
// 	for($i=1;$i<=$num;$i++){
// 	$factorial = $factorial * $i;
// }
// 	return $factorial;
// }
// $num=10;
// $fa=fact($num);
// echo "Factorial=$fa";
// ?>
//  -->

<!DOCTYPE html>
<html>
<head>
	<title>factorial page</title>
</head>
<body>
	<form method="post" action="Index.php">
		Enter Number: <input type="text" name="number" placeholder="Enter number..">
		<input type="submit" name="submit" value="Calculate Factorial">
	</form>
</body>
</html>

<?php 
// for ($row = 0; $row < 5; $row ++) {
//         echo str_repeat('*', ($row) + 1) . "<br/>";
// }﻿

$num=$_POST["number"];
$factorial=1;
for ($i=$num; $i>=1 ; $i--) { 
	$factorial=$factorial*$i;
}
	echo "Factorial of $num is $factorial";
 ?>