<?php
// code of calculator 'procedure'

$num1=$_POST['num1'];
$num2=$_POST['num2'];

//formulas
 $sum = $num1+$num2;
 $difference = $num1-$num2;
 $product = $num1*$num2;
 $qoutient = $num1/$num2;

// result display
echo "Sum =".$sum."";
echo "<br>";
echo "Difference=".$difference."";
echo "<br>";
echo "Product=".$product."";
echo "<br>";
echo "Qoutient=".$qoutient."";


?>