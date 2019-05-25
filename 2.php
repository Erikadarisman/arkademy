<?php
function getDatesFromRange($start, $end, $format = 'Y-m-d') { 

    // Declare an empty array 
    $array = array(); 

    // Variable that store the date interval 
    // of period 1 day 
    $interval = new DateInterval('P1D'); 

    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 

    // Use loop to store date into array 
    foreach($period as $date) {                  
        $array[] = $date->format($format);  
    } 

    // Return the array elements 
    return $array; 
} 

// Function call with passing the start date and end date 
$Date = getDatesFromRange('2019-05-01', '2019-05-25'); 

echo implode( ", ", $Date );
// var_dump($Date); 

?> 
