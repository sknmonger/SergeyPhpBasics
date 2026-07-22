<?php

//This is a file that will send a .txt to a path && display on HTML for copying
//.txt && Display text or list Without Mysql DB for speed. 

//Given List 
// destination Path 
// Include Date and Time 

date_default_timezone_set("Asia/Manila");

echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo date('l, F j, Y'). "<br>";
echo "Time Today is: " . date("h:i:s"). "<br><br><br>";


$mylist = fopen("listsendto911/criminallist911.txt", "r") or die("Error: Unable to open file!");
echo fread($mylist, filesize("listsendto911/criminallist911.txt"));
fclose($mylist);
$mylist = file_get_contents('listsendto911/criminallist911.txt');

$targetfile = fopen("forNica/listtonica.txt", "w") or die("Unable to open file!");
$txt = $mylist;


fwrite($targetfile, $mylist);
fclose($targetfile);



//failed mission at 3:48PM sending information achieved but sending File for
//Transfer and copy failed

?>

<html>
<body>

<form action="include/listupload.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload List" name="submit">
</form>

</body>
</html>