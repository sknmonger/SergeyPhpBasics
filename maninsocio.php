<?php
/*Man in society Algo 
Question 
How much variable can the brain take and process to function as a healthy individual?

How much is 1 var ? 
Use Arrays. 
Array number of words&numbers = or[9,18,36]
var = words&numbers;

should I convert society and man as Alphanumeric Counting? or just string count? 
Ex: Apple basket Cool = 3 OR Apple Basket Cool = 5+6+4 = 15;

Result : I just used Word count. 

Value = 

ANSWER : 
Question Rephrase: How many words(var) can an individuals brain process to function as a healthy Human being?
$healthyBrain <= 26 Words; Passive Function
$ActiveBrain <= 53 Words; Engaged Function
$CompetitiveBrain <= 79Words; Competitive Function
$SuperiorBrain <= 105Words;  Genuis Function

NOTE: Not Specifical truth but estimates and approximates
*/

//*GLOBALS OUTSIDE OBJECT FIXED*//

$society = '24900000000';
$man = '1000';
$functional = '38';
$value = (($society/$man)/$functional);
$individual = 1000/38;
$mansociety = "$man" . "/" . "$society" . " words" . "<br>";

class societymatrix {

public $value;
public $society;
public $man;
//Set Society Value 
function DeclareHelloWorld($society, $man): void {
$this ->society = number_format((float)$society);    
$this ->man = number_format($man);    
}

function ReportSMatrix(){
if ($this ->society >= $this ->man) {


    Echo "Society Name Word Count:" . $this ->society;
    Echo "<br>";
    Echo $this ->man . "Words per Individual";
    echo "<br>";
    

    } else {
        Echo "Not enough Grammar, World is Entropic!! WARNING!";
        echo "<br>";
    }


}

}



//*initial Display modes*/

class Aword {

function displayvalue() {
echo "MAN" . str_repeat('&nbsp;', 17) . number_format($GLOBALS['man']);echo "<br>";
echo "IN" . str_repeat('&nbsp;', 17). ""; echo "       ------------";echo "<br>";
echo "SOCIETY" .  str_repeat('&nbsp;', 3); echo number_format($GLOBALS['society']) . "<br>";
echo "<br>";
echo $GLOBALS['value'] . " is the Macro Tolerance";
echo "<br>";
echo $GLOBALS['individual'] . " Active state";echo "<br>";

}

function Greetings() {
    Echo "Hello Society 🌎";
    Echo "<br>";
    Echo "Where is Man in Society?";echo "<br>";
    Echo "Program inspired by PeterLBerger Chapter 4";echo "<br>";

    echo "<h3>MAN IN SOCIETY</h3><qoute> <p>The Horizons of the world, as the grown ups feinte it, are determined by the 
    coordinates of remote mapmakers. The child may produce alternate identifications by having himbself addressed as father 
    while playing house, as indian chief or as Davy Crockett, but he will kno all the time that he is only 
    playing and that the real facts about himself are those registered by the school authorities. We leave out 
    the qoutation marks and thus betray that we too have been trapped into sanity in our childhood-of course. 
    we should write all the key words in qoutation marks-'Know', 'Real', 'facts.' 
    The same child is the one who believes in what it says in the school records.
     The normal adult is the one who lives within his assigned coordinates. </p></qoute>by Peter L Berger";
    echo "<br>";
}

}

/*CALLED FUNCTIONS FUNCTIONS FROM CLASS*/
$socio = new Aword();
$socio ->Greetings(); 
$socio ->displayvalue();
$SMatrix = new societymatrix();
$SMatrix ->DeclareHelloWorld($society, $man);
$SMatrix ->ReportSMatrix();



?>