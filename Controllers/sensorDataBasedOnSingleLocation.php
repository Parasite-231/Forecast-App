<?php
// include("../Database Connection/databaseConnection.php");

function findSensorDataBasedOnSingleLocationBasedBetweenTwoDates($location_id,$start_date,$end_date){


// $sql = "SELECT LOCATION_ID FROM LOCATION WHERE LOCATION_NAME = $selected_area ";


$query = "SELECT SENSOR_DATA.VALUE AS SENSOR_DATA,SENSOR.SENSOR_TYPE AS SENSOR_TYPE, SENSOR_DATA.DATE AS DATA_RECORDED_DATE, 
LOCATION.LOCATION_NAME AS REGION_NAME FROM SENSOR_DATA INNER JOIN sensor_location_information 
ON SENSOR_DATA.sensor_location_id = sensor_location_information.sensor_location_id 
INNER JOIN LOCATION ON LOCATION.LOCATION_ID = sensor_location_information.LOCATION_ID 
INNER JOIN SENSOR ON sensor_location_information.SENSOR_ID = SENSOR.SENSOR_ID 
WHERE sensor_location_information.LOCATION_ID = '$location_id' AND SENSOR_DATA.DATE 
BETWEEN '$start_date' AND '$end_date' ORDER BY SENSOR_DATA.DATE DESC, SENSOR.SENSOR_TYPE ";

return $query;


}

?>