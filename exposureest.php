<form id="justecho" method="POST">
<label type="text" style="font-size: 24px;">How much radiation do you Get?</label>
<input type="text" step="0.0000001" placeholder="Your Usv/hour" name="rgiven">
<button id="echo" type="submit" name="submit">Radioactivity Estimates</button>

<?php
echo phpversion();

$date = new DateTime();

if (isset($_POST['rgiven'])) {
/*Variables given*/
$usvgiven = floatval($_POST['rgiven']);

/*constant fixed vars based on hours in day month and year*/
$day = 24;
$months = 720;
$year = 8760;


/*arithmetic */
    $daily   = $usvgiven * $day;
    $monthly = $usvgiven * $months;
    $yearly  = $usvgiven * $year;
    
/*display output*/

    echo "<br>";
    
    echo "Daily estimate: "   . number_format( $daily)   . " Microseviert" .  "<br>";
    echo "Monthly estimate: " . number_format($monthly ) . " Microseviert" .   "<br>";
    echo "Yearly estimate: "  . number_format($yearly )  . " Microseviert" .   "<br>";

/*display output vardump for programmers not used to it looks programmy*/
echo "----------------------------------------------------------------------------------------------------------<Br>";
var_dump($usvgiven); var_dump($yearly); var_dump($monthly);var_dump($daily);  echo "<Br>";
echo "----------------------------------------------------------------------------------------------------------<Br>";
echo "Your Radiation Estimates";
echo "<br> $date->format('Y-M-D H:I:S')";
}

/*
need to study more objects functions style of out put and input 
Doesn't work on Wordpress in Post or Page still haven't solved the problem
Time 7:57pm 12/04/26 Tension is felt in the church and state... Status Alert and safe
*/

?>

