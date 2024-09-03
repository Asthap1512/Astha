
<?php

$physics = 85;  
$chemistry = 90; 
$biology = 78;  
$mathematics = 88; 
$computer = 92; 


$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;
$percentage = ($totalMarks / 500) * 100;


if ($percentage >= 90) {
    $grade = 'A+';
} elseif ($percentage >= 80) {
    $grade = 'A';
} elseif ($percentage >= 70) {
    $grade = 'B+';
} elseif ($percentage >= 60) {
    $grade = 'B';
} elseif ($percentage >= 50) {
    $grade = 'C';
} else {
    $grade = 'D';
}


echo "Marks Obtained:\n";
echo "Physics: $physics\n";
echo "Chemistry: $chemistry\n";
echo "Biology: $biology\n";
echo "Mathematics: $mathematics\n";
echo "Computer: $computer\n";
echo "Total Marks: $totalMarks\n";
echo "Percentage: " . number_format($percentage, 2) . "%\n";
echo "Grade: $grade\n\n";


$dayIndex = 5; 

switch ($dayIndex) {
    case 1:
        $dayName = 'Sunday';
        break;
    case 2:
        $dayName = 'Monday';
        break;
    case 3:
        $dayName = 'Tuesday';
        break;
    case 4:
        $dayName = 'Wednesday';
        break;
    case 5:
        $dayName = 'Thursday';
        break;
    case 6:
        $dayName = 'Friday';
        break;
    case 7:
        $dayName = 'Saturday';
        break;
    default:
        $dayName = 'Invalid day index';
        break;
}

// Display the result
echo "The day corresponding to index $dayIndex is: $dayName\n";

?>