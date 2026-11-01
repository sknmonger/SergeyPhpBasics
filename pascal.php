<?php
/*Pascal  square of 2 as */
$irr = 8;
 echo "<br>";
echo "vardump($irr)";
 echo "<br>";
for ($pascalman = 1; $pascalman < 108; $pascalman++ ){

$rows = 1; //errorlogic
$irrnew = $irr+$irr;
$irrnew2 = $irrnew + $irr;
$irrnew3 = $irrnew2 + $irr;
$irrnew3b = $irrnew2 + $irrnew2;

   echo "$irr"; 
   echo "<br>";
   echo "$irr" . "/" . "$irr";
   echo  "<br>";
   echo "$irr" . "/" ."$irrnew" ."/" . "$irr";
   echo  "<br>";
   echo "$irr" . "/" ."$irrnew2" ."/" . "$irrnew2"."/" . "$irr";
   echo  "<br>";
   echo "$irr" ."/" . "$irrnew3" ."/" . "$irrnew3b" ."/" ."$irrnew3"."/" . "$irr";
   echo  "<br>";
}

?>