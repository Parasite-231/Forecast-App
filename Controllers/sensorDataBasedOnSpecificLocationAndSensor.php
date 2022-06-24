<?php
include("../Database Connection/databaseConnection.php");

function findSensorDataBasedOnSpecificLocationAndSensorBetweenTwoDates($location_id,$sensor_id,$start_date,$end_date){



$query = "SELECT SENSOR_DATA.VALUE as SENSOR_DATA,SENSOR.SENSOR_TYPE AS SENSOR_TYPE,SENSOR_DATA.date as DATA_RECORDED_DATE, 
LOCATION.LOCATION_NAME as REGION_NAME, 
sensor_location_information.SENSOR_ID as SENSOR_ID 
FROM SENSOR_DATA JOIN 
sensor_location_information ON 
SENSOR_DATA.sensor_location_id = sensor_location_information.sensor_location_id 
JOIN LOCATION ON LOCATION.LOCATION_ID = sensor_location_information.LOCATION_ID 
INNER JOIN SENSOR ON sensor_location_information.SENSOR_ID = SENSOR.SENSOR_ID 
WHERE sensor_location_information.LOCATION_ID = '$location_id'
AND sensor_location_information.SENSOR_ID = '$sensor_id' 
AND SENSOR_DATA.DATE BETWEEN '$start_date' AND '$end_date'  ORDER BY SENSOR_DATA.DATE DESC, SENSOR.SENSOR_TYPE ";

return $query;


}

?>