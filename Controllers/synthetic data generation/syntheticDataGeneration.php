<?php


function syntheticDataGeneration()
{
    //these variables can set by passing parameters in function
  
    $max_integer        = 40;
    $min_integer          = 5;
    //for sensor value
    $max_float        = 99.0;
    $min_float          = 20.0;

  
   $random_number_for_location_id= rand($max_integer, $min_integer);
   echo $random_number_for_location_id."    ";
   $random_number_for_sensor_id     = rand($max_integer, $min_integer);
   echo  $random_number_for_sensor_id."    ";
   $random_number_for_sensor_data_value =   number_format((float)rand(  $max_float ,$min_float ), 2, '.', '');
 
   echo $random_number_for_sensor_data_value;
   //ID CAN'T BE IN FLOAT SO TAKEN INT

   $max_sensor_location_id        = "SELECT MAX(SENSOR_LOCATION_ID) AS MAX_SENSOR_LOCATION_ID FROM SENSOR_LOCATION_INFORMATION 
   WHERE DELETE_FLAG = 0";
  
  
   $insertion_in_sensor_location_information = "INSERT INTO SENSOR_LOCATION_INFORMATION (LOCATION_ID,SENSOR_ID) 
   VALUES( $random_number_for_location_id , $random_number_for_sensor_id)";
  
   $insertion_into_sensor_data = "INSERT INTO SENSOR_DATA(VALUE,SENSOR_LOCATION_ID)
   VALUES(  $random_number_for_sensor_data_value,$max_sensor_location_id+1) ";
  
  
  return 0;
  
  
}

syntheticDataGeneration();



?>