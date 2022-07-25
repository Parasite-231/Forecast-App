<?php



function generateSyntheticData()
{


//column to store nth data
// $col = 2;
// $array[] = 0;
 
// $file_to_read = fopen('generateRandomValuesForParameters.csv', 'r');
 
// if($file_to_read !== FALSE){
     
//     // echo "<table>\n";
//     while(($data = fgetcsv($file_to_read, 1000, ',')) !== FALSE){
//         echo "<tr>";
//         for($i = 2,$j = 0; $i < count($data); $i++,$j ++) {
//             // echo "<td>".$data[$i]."</td>";
//             $array[$j] = $data[$i];
//             // echo  $array[$j];
//             // echo "\n";
//             // echo '<br/>';
            
            
           
           
           
        

       
       
//         // echo "\n";
 
//      //setting min and max value range
//     $minimumValueForLocationId =   $array[$i];
//     $maximumValueForLocationId =  $array[$i+1];
//     $minimumValueForSensorId =   $array[$i+2];
//     $maximumValueForSensorId =   $array[$i+3];

//      //ranges for random values of all types of sensors (200.0 means these values need to be determined)
//     $minRandTemp =   $array[$i+4];
//     $maxRandTemp =   $array[$i+5];

//     $minRandSmoke =   $array[$i+6];
//     $maxRandSmoke =   $array[$i+7];

//     $minRandHumid =   $array[$i+8];
//     $maxRandHumid =   $array[$i+9];

//     $minRandCO =   $array[$i+10];
//     $maxRandCO =   $array[$i+11];

//     $minRandPM2_5 =   $array[$i+12];
//     $maxRandPM2_5 =   $array[$i+13];

//     $minRandMethane=   $array[$i+14];
//     $maxRandMethane=   $array[$i+15];
    
//     $minRandCO2 =   $array[$i+16];
//     $maxRandCO2 =   $array[$i+17];

    
//     //generate temp value
//     $randTempVal = mt_rand($minRandTemp, $maxRandTemp - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

//     //generate humid value
//     $randHumidVal =   mt_rand($minRandHumid, $maxRandHumid - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

   
//     //generate CO value
//     $randCOVal = mt_rand($minRandCO, $maxRandCO - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

   
//     //generate PM2_5 value
//     $randPM2_5Val = mt_rand($minRandPM2_5, $maxRandPM2_5 - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
//     //generate methane value
//     $randMethaneVal = mt_rand($minRandMethane, $maxRandMethane - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
//     //generate CO2 value
//     $randCO2Val = mt_rand($minRandCO2, $maxRandCO2 - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
   
//     //generate smoke value
//     $randSmokeVal = mt_rand($minRandSmoke, $maxRandSmoke - 1) + mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();

//      //select query
//      $maxSensorLocationId = "SELECT MAX(SENSOR_LOCATION_ID) AS MAX_id FROM SENSOR_LOCATION_INFORMATION WHERE DELETE_FLAG = 0";
//      $randomLocationId = mt_rand($minimumValueForLocationId,$maximumValueForLocationId);
//      $randomSensorId = mt_rand($minimumValueForSensorId,$maximumValueForSensorId);

//         //outputs
//         echo "Random Location id :       $randomLocationId";
//         echo '<br>';
//         echo "Random Sensor Id  :          $randomSensorId " ;
//         echo '<br>';
//         echo "Random Temperature Data Value : $randTempVal";
//         echo '<br>';
//         echo "Random Humidity Data Value : $randHumidVal";
//         echo '<br>';
//         echo "Random Carbon-monoxide Data Value : $randCOVal";
//         echo '<br>';
//         echo "Random Particulate-Matter-2.5 Data Value : $randPM2_5Val";
//         echo '<br>';
//         echo "Random Methane Data Value : $randMethaneVal";
//         echo '<br>';
//         echo "Random Carbon-dioxide Data Value : $randCO2Val";
//         echo '<br>';
//         echo "Random Smoke Data Value : $randSmokeVal";

//         break;

           
        

        
//     }
    
//     // echo "</table>\n";
 
//     fclose($file_to_read);
// }



//column to print, E would be 5th
$col = 2;
$items = array();

// open the file for reading
$file = fopen("generateRandomValuesForParameters.csv","r");

// while there are more lines, keep doing this
while(! feof($file))
{
    // print out the given column of the line
    

    $items[] = fgetcsv($file)[$col];
   
    
}

print_r($items);
echo '<br>';


// // close the file connection
// fclose($file);
    //1.import config file(.json/.txt/.csv)
    //2.parse config file
    //3.retrieve values from config file
    //4.assign those values in the following vars accordingly

    // Read the JSON file 
    // $readFromJsonFile = file_get_contents('allRandomNumberAssignee.json');

    // // Decode the JSON file
    // $jsonDataDecoded = json_decode($readFromJsonFile,true);

    // echo $jsonDataDecoded['LocationIDRange'][0]['minimumValueForLocationId'];
    
    // //setting min and max value range
    $minimumValueForLocationId =  $items[1];
    $maximumValueForLocationId =  $items[2];
    $minimumValueForSensorId =   $items[3];
    $maximumValueForSensorId =   $items[4];

    // //ranges for random values of all types of sensors (200.0 means these values need to be determined)
    $minRandTemp =  $items[5];
    $maxRandTemp =   $items[6];

    $minRandSmoke = $items[7];
    $maxRandSmoke =  $items[8];

    $minRandHumid =   $items[9];
    $maxRandHumid = $items[10];

    $minRandCO =   $items[11];
    $maxRandCO =  $items[12];

    $minRandPM2_5 = $items[13];
    $maxRandPM2_5 =$items[14];

    $minRandMethane=   $items[15];
    $maxRandMethane= $items[16];
    
    $minRandCO2 =   $items[17];
    $maxRandCO2 = $items[18];


    //select query
    $maxSensorLocationId = "SELECT MAX(SENSOR_LOCATION_ID) AS MAX_id FROM SENSOR_LOCATION_INFORMATION WHERE DELETE_FLAG = 0";
    $randomLocationId = mt_rand($minimumValueForLocationId,$maximumValueForLocationId);
    $randomSensorId = mt_rand($minimumValueForSensorId,$maximumValueForSensorId);
    

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


   

  

    //insertion query in SENSOR_LOCATION_INFORMATION Tables
    // $insertionQueryInSensorLocationInformation = "INSERT INTO SENSOR_LOCATION_INFORMATION(LOCATION_ID,SENSOR_ID) VALUES( $randomLocationId,$randomSensorId)";
    // //insertion in SENSOR_DATA Table
    // $insertionQueryInSensorDataTable = "INSERT INTO SENSOR_DATA(VALUE,SENSOR_LOCATION_ID) VALUES(23,$maxSensorLocationId+1)";


    //outputs
    echo "Random Location id :       $randomLocationId";
    echo '<br>';
    echo "Random Sensor Id  :          $randomSensorId " ;
    echo '<br>';
    echo "Random Temperature            Data Value : $randTempVal";
    echo '<br>';
    echo "Random Humidity                Data Value : $randHumidVal";
    echo '<br>';
    echo "Random Carbon-monoxide         Data Value : $randCOVal";
    echo '<br>';
    echo "Random Particulate-Matter__2.5 Data Value : $randPM2_5Val";
    echo '<br>';
    echo "Random Methane                 Data Value : $randMethaneVal";
    echo '<br>';
    echo "Random Carbon-dioxide         Data Value : $randCO2Val";
    echo '<br>';
    echo "Random Smoke Data Value : $randSmokeVal";
    return 0;
}



generateSyntheticData();


?>