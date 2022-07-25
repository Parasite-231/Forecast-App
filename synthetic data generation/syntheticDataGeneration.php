<?php


function generateSyntheticData()
{
    include("./Database Connection/db_connect.php");

    $maxSensorLocationId = 0;

    //1.import config file(.json/.txt/.csv)
    //2.parse config file
    //3.retrieve values from config file
    //4.assign those values in the following vars accordingly

    // Read the JSON file 
    $readFromJsonFile = file_get_contents('allRandomNumberAssignee.json');

    // Decode the JSON file
    $jsonDataDecoded = json_decode($readFromJsonFile,true);

    // echo $jsonDataDecoded['LocationIDRange'][0]['minimumValueForLocationId'];
    

     //current month num val by explode+...
     $month = date('m'); 
    //  echo " ".$month."  ";

    //setting min and max value range
    $minimumValueForLocationId = $jsonDataDecoded['LocationIDRange'][0]['minimumValueForLocationId'] ;
    $maximumValueForLocationId =$jsonDataDecoded['LocationIDRange'][0]['maximumValueForLocationId'] ;
    $minimumValueForSensorId = $jsonDataDecoded['SensorIDRange'][0]['minimumValueForSensorId']  ;
    $maximumValueForSensorId = $jsonDataDecoded['SensorIDRange'][0]['maximumValueForSensorId']  ;

    //ranges for random values of all types of sensors (200.0 means these values need to be determined)
    $minRandTemp = $jsonDataDecoded['TempValueRange'][$month-1]['minRandTemp']  ;
    $maxRandTemp = $jsonDataDecoded['TempValueRange'][$month-1]['maxRandTemp']  ;

    $minRandSmoke = $jsonDataDecoded['SmokeValueRange'][0]['minRandSmoke']  ;
    $maxRandSmoke = $jsonDataDecoded['SmokeValueRange'][0]['maxRandSmoke']  ;

    $minRandHumid = $jsonDataDecoded['HumidValueRange'][$month-1]['minRandHumid']  ;
    $maxRandHumid = $jsonDataDecoded['HumidValueRange'][$month-1]['maxRandHumid']  ;

    $minRandCO = $jsonDataDecoded['COValueRange'][0]['minRandCO']  ;
    $maxRandCO = $jsonDataDecoded['COValueRange'][0]['maxRandCO']  ;

    $minRandPM2_5 = $jsonDataDecoded['PM2_5ValueRange'][$month-1]['minRandPM2_5']  ;
    $maxRandPM2_5 = $jsonDataDecoded['PM2_5ValueRange'][$month-1]['maxRandPM2_5']  ;

    $minRandMethane= $jsonDataDecoded['MethaneValueRange'][0]['minRandMethane']  ;
    $maxRandMethane= $jsonDataDecoded['MethaneValueRange'][0]['maxRandMethane']  ;
    
    $minRandCO2 = $jsonDataDecoded['CO2ValueRange'][0]['minRandCO2']  ;
    $maxRandCO2 = $jsonDataDecoded['CO2ValueRange'][0]['maxRandCO2']  ;

 

    //generate temp value
    $randTempVal = mt_rand($minRandTemp, $maxRandTemp - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

    //generate humid value
    $randHumidVal =   mt_rand($minRandHumid, $maxRandHumid - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

   
    //generate CO value
    $randCOVal = mt_rand($minRandCO, $maxRandCO - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

   
    //generate PM2_5 value
    $randPM2_5Val = mt_rand($minRandPM2_5, $maxRandPM2_5 - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
    //generate methane value
    $randMethaneVal = mt_rand($minRandMethane, $maxRandMethane - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
    //generate CO2 value
    $randCO2Val = mt_rand($minRandCO2, $maxRandCO2 - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
    //generate smoke value
    $randSmokeVal = mt_rand($minRandSmoke, $maxRandSmoke - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

    //queries-->

   
   //select query
  
   $query = "SELECT MAX(SENSOR_LOCATION_ID) AS MAX_ID FROM SENSOR_LOCATION_INFORMATION WHERE DELETE_FLAG = 0";
   $result = mysqli_query($conn, $query);  
   if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $maxSensorLocationId = $data['MAX_ID'];
   }

   $randomLocationId = mt_rand($minimumValueForLocationId,$maximumValueForLocationId);
   $randomSensorId = mt_rand($minimumValueForSensorId,$maximumValueForSensorId);
   
  

    // insertion query in SENSOR_LOCATION_INFORMATION Table
    $insertionQueryInSensorLocationInformation = "INSERT INTO SENSOR_LOCATION_INFORMATION(LOCATION_ID,SENSOR_ID) VALUES
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId),
    ($randomLocationId,$randomSensorId)";

    if (mysqli_query($conn, $insertionQueryInSensorLocationInformation)) {
        echo "The query was successfully executed. Record was inserted into SENSOR_LOCATION_INFORMATION Table!<br />";
    //    echo "<b>Data: $insertionQueryInSensorLocationInformation </b><br /><br />";
   } else {
        echo "The query could not be executed!<br />" . mysqli_error($conn);
   } 



    //insertion in SENSOR_DATA Table
    $insertionQueryInSensorDataTable = "INSERT INTO SENSOR_DATA(VALUE,SENSOR_LOCATION_ID) VALUES
    ($randTempVal,$maxSensorLocationId+1),
    ($randHumidVal,$maxSensorLocationId+1),
    ($randCOVal,$maxSensorLocationId+1),
    ($randPM2_5Val,$maxSensorLocationId+1),
    ($randMethaneVal,$maxSensorLocationId+1),
    ($randCO2Val,$maxSensorLocationId+1),
    ($randSmokeVal,$maxSensorLocationId+1)";
    if (mysqli_query($conn, $insertionQueryInSensorDataTable)) {
        echo "The query was successfully executed. Record was inserted into SENSOR_DATA Table!<br />";
    //    echo "<b>Data: $insertionQueryInSensorDataTable </b><br /><br />";
   } else {
        echo "The query could not be executed!" . mysqli_error($conn);
   }

    // //outputs
    // echo "Random Location id :       $randomLocationId";
    // echo '<br>';
    // echo "Random Sensor Id  :          $randomSensorId " ;
    // echo '<br>';
    // echo "Random Temperature Data Value : $randTempVal";
    // echo '<br>';
    // echo "Random Humidity Data Value : $randHumidVal";
    // echo '<br>';
    // echo "Random Carbon-monoxide Data Value : $randCOVal";
    // echo '<br>';
    // echo "Random Particulate-Matter-2.5 Data Value : $randPM2_5Val";
    // echo '<br>';
    // echo "Random Methane Data Value : $randMethaneVal";
    // echo '<br>';
    // echo "Random Carbon-dioxide Data Value : $randCO2Val";
    // echo '<br>';
    // echo "Random Smoke Data Value : $randSmokeVal";
    return 0;
}

generateSyntheticData();
?>