<?php
// include("../Database Connection/databaseConnection.php");



function findAlarmMessageBasedOnSpecificLocationBetweenOnTwoDates($location_id,$start_date,$end_date){



  $query = "SELECT ALARM_CATEGORY.ALARM_NAME AS ALARM_NAME,
  ALARM_CATEGORY.ALARM_MESSAGE AS ALARM_MESSAGE,
  ALARM_INFORMATION.RECORDED_DATE AS ALARM_RECORDED_DATE,
  SENSOR_DATA.VALUE AS SENSOR_DATA,
  SENSOR.SENSOR_TYPE AS SENSOR_TYPE,
  LOCATION.LOCATION_NAME AS REGION_NAME 
  FROM ALARM_CATEGORY 
  INNER JOIN ALARM_INFORMATION ON
  ALARM_INFORMATION.ALARM_ID =ALARM_CATEGORY.ALARM_ID 
  INNER JOIN SENSOR_DATA_AND_ALARM_INFORMATION ON
  SENSOR_DATA_AND_ALARM_INFORMATION.ALARM_INFO_ID = ALARM_INFORMATION.ALARM_INFO_ID
  INNER JOIN SENSOR_DATA ON
  SENSOR_DATA.S_DATA_ID = SENSOR_DATA_AND_ALARM_INFORMATION.S_DATA_ID
  INNER JOIN SENSOR_LOCATION_INFORMATION ON
  SENSOR_DATA.SENSOR_LOCATION_ID = SENSOR_LOCATION_INFORMATION.SENSOR_LOCATION_ID
  INNER JOIN LOCATION ON
  LOCATION.LOCATION_ID = SENSOR_LOCATION_INFORMATION.LOCATION_ID
  INNER JOIN SENSOR ON
  SENSOR_LOCATION_INFORMATION.SENSOR_ID = SENSOR.SENSOR_ID
  WHERE ALARM_CATEGORY.DELETE_FLAG = 0 AND 
  LOCATION.LOCATION_ID = $location_id AND
  ALARM_INFORMATION.RECORDED_DATE BETWEEN '$start_date' AND '$end_date' 
  ORDER BY ALARM_INFORMATION.RECORDED_DATE DESC";
  
  return $query;
   
  
}







?>