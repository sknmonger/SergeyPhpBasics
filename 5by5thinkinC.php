<?php



header('Content-Type: text/html; charset=utf-8');
header('X-Accel-Buffering: no'); // Disable buffering for Nginx
if (ob_get_level()) ob_end_clean();
// Online PHP compiler (interpreter)
// Write and run PHP online using this editor.
//Code in frequency of C#

echo "△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△△";echo  "<br>";
echo "&nbsp;&nbsp;&nbsp;"."This is a program in php but in Frequency of C#; Statelogic ";echo  "<br>";
echo "▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽▽";echo  "<br>";
echo  "<br>";echo  "<br>";
echo "Solve problem locating discord source.";echo  "<br>";
echo  "−−−−−−−−−−−−−−−−−−−−−––––––––––––––——————————————————————————";echo  "<br>";
echo  "<br>";echo  "<br>";
echo "discord could be 10 - 100 meters from my location.";echo  "<br>";
echo  "−−−−−−−−−−−−−−−−−−−−−––––––––––––––——————————————————————————";echo  "<br>";
echo  "<br>";echo  "<br>";
echo "choices of problems:";echo  "<br>";
echo  "−−−−−−−−−−−−−−−−−−−−−––––––––––––––——————————————————————————";echo  "<br>";
$problems = ["Powerleak", "Misuse of RF", "Social disharmony", "psychological Disharmony", "Radiation anomaly"];





echo  "<br>";echo  "<br>";
//choose goto 
//choose:
echo "Number of Problems: " . count($problems);  echo  "<br>";
var_dump($problems);
echo  "<br>";echo  "<br>";
?>


<html>
    <style>
        #ch-prb {margin-left: 270px; margin-top: 170px; margin-bottom: 170px;}

        #timer-animation {opacity: 0; font-size: 23px;}
        
        #timer-animation{
            animation-duration: 5s; animation-name: timeout; transition: ease-in-out; }
        
        @keyframes timeout {
            0%    {opacity: 0;}
            25%   {opacity: 1;}
            50%   {opacity: 0;}
            75%   {opacity: 1;}
            100%  {opacity: 0;}
        }

        .result {font-size: xx-large; font-weight: bolder; margin: auto auto; text-align: center;}
       
    </style>
    <form id="ch-prb"  method="POST" action="">
       <input type="text" placeholder="Enter a number of choice." name="prob"/>
        <button type="submit" value="submit"  />Send</button>
    </form>
</html>


<?php
$prob = $_POST['prob'] ?? '';
echo $prob;

//end of Question 
//Proposition 
// To find the problem is to know if it is singular or plural or  connected and not //connected. 
//provide solutions in array. 

$solutions = array("Call meralco", "Call NTC", "Call the Baranggay", "Go to Psychiatrist" , "Call PNRI and DENR");
echo  "<br>";
echo "Number of Solutions: " . count($solutions); //reserved function count
echo  "<br>";
var_dump($solutions);
echo  "<br>";echo  "<br>";

$input = $prob;
//$equivalent = $problems[$input] = $solutions[0];
//The Input should be == solution ; 

?>


<div id="timer-animation">

   <span class="symbol1">L</span> 
    <span class="symbol2">O</span> 
     <span class="symbol3">A</span> 
      <span class="symbol4">D</span> 
       <span class="symbol5">I</span> 
        <span class="symbol5">N</span> 
         <span class="symbol5">G</span> 

</div>


<?php

if ($input == 0) {

    flush(); 
    sleep(4);
    echo "<div class='result'>";
  echo "Here is the solution for  " . $problems[$input] . " > " . $solutions[0]; echo  "<br>";
    echo "</div>";
}
else if ($input == 1) {
    flush(); 
    sleep(4);
    echo "<div class='result'>";
    echo "Here is the solution for " . $problems[$input] . " > " . $solutions[1]; echo  "<br>";
    echo "</div>";
}
else if ($input == 2) {
    flush(); 
    sleep(4);
    echo "<div class='result'>";
    echo "Here is the solution for  " . $problems[$input] . " > " . $solutions[2]; echo  "<br>";
    echo "</div>";
}
else if ($input == 3) {
    flush(); 
    sleep(4);
    echo "<div class='result'>";
    echo "Here is the solution for  " . $problems[$input] . " > " . $solutions[3]; echo  "<br>";
    echo "</div>";
}
else if ($input == 4) {
    flush(); 
    sleep(4);
    echo "<div class='result'>";
    echo "Here is the solution for " . $problems[$input] . " > " . $solutions[4]; echo  "<br>";
    echo "</div>";
} 
else {

    flush(); 
    sleep(4);
    echo "<div class='result'>";
  echo "You chose the wrong number..." ;
   echo "</div>";
  echo  "<br>";
  //goto choose;
}




?>