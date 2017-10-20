<?php 
$data = $_POST['data'];
$sortedArray = array();
$dataArray = (explode("\n", $data)); //each new line 1 "object"

$lengthOfArray = count($dataArray);
for($x=0; $x<$lengthOfArray; $x++){
    array_push($sortedArray, $dataArray[$x]); //push into array
}

sort($sortedArray); //sort the array by name
echo implode("\n", $sortedArray);
?>