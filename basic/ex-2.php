<?php
// Sample String : 
// 'Tomorrow I \'ll learn PHP global variables.'
// 'This is a bad command : del c:\\*.*' 
// Expected Output : 
// Tomorrow I 'll learn PHP global variables.
// This is a bad command : del c:\*.* 

$sampleStr = 'Tomorrow I\'ll learn PHP global variables.';
$sampStr = 'This is a bad command : del c:\\*.*';

function printString($str) {
    echo $str;
    echo nl2br("\n");
    return;
    
}

printString($sampleStr);
printString($sampStr);

//sample answer
// echo "Tomorrow I \'ll learn PHP global variables."."\n"; 
// echo "This is a bad command : del c:\\*.*"."\n"; 
?>

