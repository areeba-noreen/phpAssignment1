<?php
$marks= array(
    array(20, 30, 40),
    array(40, 50, 60),
    array(60, 54, 87),
    array(12, 23, 67),
    array(78, 23, 76),
    array(98, 34, 87),
    array(22, 43, 65),
    array(67, 62, 88),
    array(14, 54, 98),
    array(33, 55, 78),
    array(11, 43, 42),
    array(15, 77, 22),
    array(88, 46, 65),
    array(21, 67, 22),
    array(99, 55, 28),
);
$sum=0;
$sumOfAllMarks=0;
$sumOfEngMarks=0;
$sumOfMathsMarks=0;
$sumOfScienceMarks=0;


for($i=0; $i<15; ++$i){
    echo "Maths Marks of Student $i = ".$marks[$i][0]. "<br>";
    echo "English Marks of Student $i = ".$marks[$i][1]. "<br>";
    echo "Science Marks of student $i = ".$marks[$i][2]. "<br>";
    echo "<br>";
    $sum = $marks[$i][0] + $marks[$i][1] + $marks[$i][2];
    echo "<b>Sum of Marks of Student $i = $sum </b> <br>";
    echo "<br>";
    $sumOfAllMarks = $sumOfAllMarks + $marks[$i][0] + $marks[$i][1] + $marks[$i][2];
    $sumOfMathsMarks = $sumOfMathsMarks + $marks[$i][0]; 
    $sumOfEngMarks = $sumOfEngMarks + $marks[$i][1];
    $sumOfScienceMarks = $sumOfScienceMarks + $marks[$i][2];
}
echo "Sum of Marks of All Students = " .$sumOfAllMarks. "<br>";
echo "Sum of Maths Marks of All Students = " .$sumOfMathsMarks. "<br>";
echo "Sum of English Marks of All Students = " .$sumOfEngMarks. "<br>";
echo "Sum of Science Marks of All Students = " .$sumOfScienceMarks. "<br>";
echo "<br>";
echo "Average of Maths Marks =" .$sumOfMathsMarks/15.00 . "<br>";
echo "Average of English Marks =" .$sumOfEngMarks/15.00 . "<br>";
echo "Average of Science Marks =" .$sumOfScienceMarks/15.00 . "<br>";

?>