<?php 

// include("../../Database Connection/databaseConnection.php");
?>



<body>

    <div class="vertical-menu">
        <ul class="nav flex-column">
            <li class="nav-item ">

                <a class="nav-link active" style="color: white;" aria-current="page" href="../dashboard.php">

                    <i class='bx bxs-dashboard'></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="../contact information/showContacts.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-contact'></i>
                    Active Contacts
                </a>
            </li>
            <li class="nav-item">
                <a href="../sensor information/showSensors.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-analyse'></i>
                    Sensor Types
                </a>
            </li>

            <!--Active Location-->
            <li class="nav-item">
                <a href="../location information/showLocations.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-building-house'></i>
                    Active Regions
                </a>
            </li>


            <li class="nav-item">
                <a href="../alarm information/showAlarms.php" class="nav-link " style="color: white;">
                    <i class='bx bxs-alarm-exclamation'></i>
                    Alarm Categories
                </a>
            </li>
            <li class="nav-item">
                <a href="../alarm information/showActiveAlarms.php" class="nav-link " style="color: white;">
                    <i class='bx bx-radar'></i>
                    Active Alarms
                </a>
            </li>
            <li class="nav-item ">
                <p style="color:cyan">Data based on &nbsp;<i class='bx bxs-right-arrow'></i></p>
                <a class="nav-link " href="../sensor information/sensorDataBasedOnTwoLocationBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bxs-location-plus'></i>
                    Multiple Locations
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../sensor information/sensorDataBasedOnSpecificSensorAndLocationBased.php"
                    style="color: white;">
                    <i class='bx bxs-edit-location'></i>
                    Sensor & Location
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../sensor information/specificLocationBased.php" style="color: white;">
                    <i class='bx bx-current-location'></i>
                    Specific Location
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../sensor information/sensorDataBasedOnSingleSensorBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bxs-share-alt'></i>
                    Specific Sensor
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../sensor information/sensorDataBetweenTwoDate.php" style="color: white;">
                    <i class='bx bxs-calendar'></i>
                    Date
                </a>
            </li>


            <!--Alarm-->



            <li class="nav-item ">
                <p style="color:cyan">Message based on &nbsp;<i class='bx bxs-right-arrow'></i></p>
                <a class="nav-link" href="../alarm information/showAlarmMessageBasedOnTwoLocationBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bxs-location-plus'></i>
                    Multiple Locations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../alarm information/showAlarmMessageBasedOnSpecificSensorAndLocation.php"
                    style="color: white;">
                    <i class='bx bxs-edit-location'></i>
                    Sensor & Locations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="../alarm information/showAlarmMessageBasedOnSpecificLocationBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bx-current-location'></i>
                    Specific Location
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../alarm information/showAlarmMessageBasedOnSingleSensorBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bxs-share-alt'></i>
                    Specific Sensor
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../alarm information/showAlarmMessageBasedOnSpecificAlarmBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bxs-alarm-add'></i>
                    Specific Alarm
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../alarm information/showAlarmMessageBetweenTwoDate.php"
                    style="color: white;">
                    <i class='bx bx-calendar-plus'></i>
                    Date
                </a>
            </li>



        </ul>
    </div>
</body>