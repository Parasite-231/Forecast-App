<?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "sensor_database";
                 $conn = new mysqli($hostName, $userName, $password, $databaseName);
                // Check connection
                if ($conn->connect_error) {
                  die("Oops!! There was a problem in server connection : " . $conn->connect_error);
                }
                  
                   


                    // Fetch the marker info from the database 
                    $location1 = "SELECT * FROM LOCATION WHERE DELETE_FLAG = 0"; 
                    $result = mysqli_query($conn, $location1);
                 
 
                    // Fetch the info-window data from the database 
                    $location2 = "SELECT  * FROM LOCATION WHERE DELETE_FLAG = 0"; 
                    $result2 = mysqli_query($conn, $location2);


                    
           
                    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="../../CSS Files/Admin Panel Designs/mapDesign.css" type="" href=""> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
    <!-- <script src="generateLocation.js"></script> -->

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALTgEvDdDa1QlsHYIi5HXTMKJOnRrtfkU">
    </script> -->
    <script src="https://www.google.com/maps/d/u/0/edit?mid=13i5y94VlqDFMV0Y9247aTSJefLliS6g&usp=sharing"></script>
    <script>
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
        map.setTilt(100);

        // Multiple markers location, latitude, and longitude
        var markers = [
            <?php if($result->num_rows > 0){ 
            
            while($row = $result->fetch_assoc()){ 
                echo '["'.$row['location_name'].'", '.$row['latitude'].', '.$row['longitude'].', "'.$row['icon'].'"],'; 
            } 
        } 
        ?>
        ];

        // Info window content
        var infoWindowContent = [
            <?php if($result2->num_rows > 0){ 
            while($row = $result2->fetch_assoc()){ ?>['<div class="info_content">' +
                '<h3><?php echo $row['location_name']; ?></h3>'],
            <?php } 
        } 
        ?>
        ];

        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;

        // Place each marker on the map  
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                icon: markers[i][3],
                title: markers[i][0]
            });

            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }

        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });
    }

    // Load initialize function
    google.maps.event.addDomListener(window, 'load', initMap);
    </script>


    <title>Show Map</title>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-4 col-lg-2 me-0 px-3" style="text-align: center;" href="#"> <img
                src="../../ICONS/weather-modified.png" width="35px" height="35px" alt="">&nbsp;FORECAST</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#" style="color: white;">Sign out</a>
            </div>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <?php
                    include("../partials/navBar.php");
                    ?>
                    <hr>

                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../ICONS/admin0.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>Itadori Yuji</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="23" height="25" fill="none" stroke="#ffffff"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!
                                        Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/
                                        (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<circle cx="12" cy="12" r="3">
                                        </circle>
                                        <path
                                            d="M19.74,14H21a1,1,0,0,0,1-1V11a1,1,0,0,0-1-1H19.74l0-.14a8.17,8.17,0,0,0-.82-1.92l.89-.89a1,1,0,0,0,0-1.41L18.36,4.22a1,1,0,0,0-1.41,0l-.89.89A8,8,0,0,0,14,4.25V3a1,1,0,0,0-1-1H11a1,1,0,0,0-1,1V4.25a8,8,0,0,0-2.06.86l-.89-.89a1,1,0,0,0-1.41,0L4.22,5.64a1,1,0,0,0,0,1.41l.89.89a8.17,8.17,0,0,0-.82,1.92l0,.14H3a1,1,0,0,0-1,1v2a1,1,0,0,0,1,1H4.26l0,.14a8.17,8.17,0,0,0,.82,1.92L4.22,17a1,1,0,0,0,0,1.41l1.42,1.42a1,1,0,0,0,1.41,0l.89-.89a8,8,0,0,0,2.06.86V21a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V19.75a8,8,0,0,0,2.06-.86l.89.89a1,1,0,0,0,1.41,0l1.42-1.42a1,1,0,0,0,0-1.41l-.89-.89a8.17,8.17,0,0,0,.82-1.92Z">
                                        </path>
                                    </svg>&nbsp;&nbsp;Settings</a></li>
                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="23" height="25" fill="none" stroke="#ffffff"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!
                                        Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/
                                        (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<circle cx="12" cy="6" r="4">
                                        </circle>
                                        <path
                                            d="M17.67,22a2,2,0,0,0,1.92-2.56A7.8,7.8,0,0,0,12,14a7.8,7.8,0,0,0-7.59,5.44A2,2,0,0,0,6.34,22Z">
                                        </path>
                                    </svg>&nbsp;&nbsp;Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" width="23" height="25" fill="none" stroke="#ffffff"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!
                                        Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/
                                        (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<path
                                            d="M14,7V4a2,2,0,0,0-2-2H4A2,2,0,0,0,2,4V20a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2V17">
                                        </path>
                                        <line x1="10" y1="12" x2="22" y2="12"></line>
                                        <polyline points="18 8 22 12 18 16"></polyline>
                                    </svg>&nbsp;&nbsp;Sign out</a></li>
                        </ul>
                    </div>




                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="heading" style="font-size: 17px;"> <i class='bx bxs-notepad'></i></i>&nbsp;DISPLAY
                        LOCATION ON GOOGLE MAP</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">

                        <form action=""></form>

                        </form>
                    </div>
                </div>



                <div class="map-container">
                    <div id="mapCanvas"></div>
                </div>




                <!-- // <script src="generateLocationTesta.js"></script> -->
</body>

</html>