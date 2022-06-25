<?php 

// include("../../Database Connection/databaseConnection.php");
?>



<body>

    <div class="vertical-menu">
        <ul class="nav flex-column">
            <li class="nav-item ">

                <a class="nav-link active" style="color: white;" aria-current="page" href="dashboard.php">

                    <i class='bx bxs-dashboard'></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="showSensors.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-analyse'></i>
                    Active Sensors
                </a>
            </li>
            <li class="nav-item">
                <a href="showLocations.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-building-house'></i>
                    Active Regions
                </a>
            </li>
            <li class="nav-item">
                <a href="showAlarms.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-alarm-exclamation'></i>
                    Active Alarms
                </a>
            </li>
            <li class="nav-item ">
                <p style="color:cyan">Data based on &nbsp;<i class='bx bxs-right-arrow'></i></p>
                <a class="nav-link " href="sensorDataBasedOnTwoLocationBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-location-plus'></i>
                    Multiple Locations
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="sensorDataBasedOnSpecificSensorAndLocationBased.php" style="color: white;">
                    <i class='bx bxs-edit-location'></i>
                    Sensor & Location
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="specificLocationBased.php" style="color: white;">
                    <i class='bx bx-current-location'></i>
                    Specific Location
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sensorDataBasedOnSingleSensorBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-share-alt'></i>
                    Sensor
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sensorDataBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-calendar'></i>
                    Date
                </a>
            </li>
            <!--Alarm-->
            <li class="nav-item ">
                <p style="color:cyan">Message based on &nbsp;<i class='bx bxs-right-arrow'></i></p>
                <a class="nav-link" href="sensorDataBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-location-plus'></i>
                    Multiple Locations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sensorDataBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-edit-location'></i>
                    Sensor & Locations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showAlarmMessageBasedOnSpecificLocationBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bx-current-location'></i>
                    Specific Location
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showAlarmMessageBasedOnSingleSensorBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-share-alt'></i>
                    Specific Sensor
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showAlarmMessageBasedOnSpecificAlarmBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-alarm-add'></i>
                    Specific Alarm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="showAlarmMessageBetweenTwoDate.php" style="color: white;">
                    <i class='bx bx-calendar-plus'></i>
                    Date
                </a>
            </li>



        </ul>
    </div>
</body>