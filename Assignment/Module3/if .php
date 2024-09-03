<?php

$startYear = 1901;
$endYear = 2016;


for ($year = $startYear; $year <= $endYear; $year++) {
    
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                
                $isLeapYear = true;
            } else {
                                $isLeapYear = false;
            }
        } else {
                        $isLeapYear = true;
        }
    } else {
        $isLeapYear = false;
    }

    
    if ($isLeapYear) {
        echo "$year is a leap year.\n";
    } else {
        echo "$year is not a leap year.\n";
    }
}
?>