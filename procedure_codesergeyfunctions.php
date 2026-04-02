<?php
//define class
class calculatorObject {

//class variables
var $sum;
var $difference;
var $product; 
var $qoutient;

//class members functions and methods 
function add($num1,$num2){
    $this->sum=$num1+$num2;
}

function subtract($num1,$num2){
    $this->difference=$num1-$num2;
}
function multiply($num1,$num2){
    $this->product=$num1*$num2;
}
function divide($num1,$num2){
    $this->qoutient=$num1/$num2;
}

// class closing bracket
}

// from Html
$num1=$_POST["num1"];
$num2=$_POST["num2"];

//Class Instance Getting Class name calculator2 
$calculator = new calculatorObject();

/*call class method and FUnctions
$calculator is Class ->FUnction(that has $num1 & $num2);
 OBJECT CLASS -> FUNCTION (DATA); */

$calculator->add($num1,$num2);
$calculator->subtract($num1,$num2);
$calculator->multiply($num1,$num2);
$calculator->divide($num1,$num2);

//outputs
/*Echo "(htmlzone)=".(phpzone)."(htmlzone)";*/ 

echo "sum=".$calculator->sum."<br>";
echo "difference=".$calculator->difference."<br>";
echo "product=".$calculator->product."<br>";
echo "qoutient=".$calculator->qoutient."<br>";


//Using Design in PHP File CSS HTML ECHO TAGS<<<HTML HTML;
echo <<<HTML
<style>.newcal {padding: 1% 1%;
                font-size: 22px;
                text-align: center;
                margin-left: 10%;
                background-color: blue;
                color: white;}
                
                
                
                </style>
<div>
    <div style="height: 300px; widht:10px;">
    </div>

<label type="text" class="newcal">Sum is $calculator->sum</label>
<label type="text" class="newcal">difference is $calculator->difference</label>
<label type="text" class="newcal">product is $calculator->product</label>
<label type="text" class="newcal">qoutient is $calculator->qoutient</label>

</div>
HTML;
echo "<br>";
?>
