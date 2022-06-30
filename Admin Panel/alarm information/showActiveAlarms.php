<?php  
include("../../Database Connection/databaseConnection.php");

require("../../Controllers/alarm based/alarmActiveBasedOnExistingContacts.php");



$query = findAlarmActiveBasedOnExistingContacts();
$result = mysqli_query($conn, $query);


 ?>
<!doctype html>
<html lang="en">
<?php
                    include("../partials/headerForAlarmSection.php");
                    ?>

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
                        <!-- <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
                </div>
            </nav>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="heading" style="font-size: 17px;"> <i class='bx bxs-notepad'></i></i>&nbsp;ACTIVE
                        ALARMS
                    </h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
                        <form action=""></form>
                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
                        </form>
                    </div>
                </div>


                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <table class="table table-bordered table-dark" id="printableTable"
                        style=" border: 20px white;font-size: 16px;text-align:center">
                        <thead>
                            <tr>
                                <th>ALARM CATEGORY ID</th>
                                <th>ALARM NAME</th>
                                <th>ALARM MESSAGE</th>
                                <th>ALARM RECORDED DATE</th>
                                <th>SENSOR DATA</th>
                                <th>SENSOR TYPE</th>
                                <th>REGION NAME</th>
                                <th>CONTACT EMAIL</th>
                                <th>CONTACT NUMBER</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>
                            <tr>
                                <td><?php echo $row["ALARM_CATEGORY_ID"];?></td>
                                <td><?php echo $row["ALARM_NAME"]; ?></td>
                                <td><?php echo $row["ALARM_MESSAGE"]; ?></td>
                                <td><?php echo $row["ALARM_RECORDED_DATE"]; ?></td>
                                <td><?php echo $row["SENSOR_DATA"]; ?></td>
                                <td><?php echo $row["SENSOR_TYPE"]; ?></td>
                                <td><?php echo $row["REGION_NAME"]; ?></td>
                                <td><?php echo $row["CONTACT_EMAIL"]; ?></td>
                                <td><?php echo $row["CONTACT_NUMBER"]; ?></td>



                            </tr>
                            <?php  
                               }  

                               echo "<input type='button' class='btn btn-warning' style='margin:1%' onclick='PrintTable();' value='Print'/>";
                          }
                          else{
                            echo '<div class="alert alert-danger" role="alert">
                            <img src="../ICONS/no-data.png" height="40" width="40"/>
                            Sorry there is no such recorded data at this time !
                          </div>';
                          }    
                          ?>

                        </tbody>
                    </table>
                </div>
                <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                <!-- <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Recent Services</div>

            <!--changed part-->
                <!-- <div class="sales-details" style="margin-top: 23px;">
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Worker Name</th>
                        <th>Worker Type</th>
                        <th>Working Date</th>
                        <th>Working Shift</th>
                        <th>Worker Payment</th>
                    </tr>
                    
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>name</td>
                                    <td>type</td>
                                    <td>date</td>
                                    <td>shift</td>
                                    <td>payment</td>
                                </tr>
                                <tr>
                                  <td>id</td>
                                  <td>name</td>
                                  <td>name</td>
                                  <td>type</td>
                                  <td>date</td>
                                  <td>shift</td>
                                  <td>payment</td>
                              </tr>
         
                              <tr>
                                <td>id</td>
                                <td>name</td>
                                <td>name</td>
                                <td>type</td>
                                <td>date</td>
                                <td>shift</td>
                                <td>payment</td>
                            </tr>
       
                            <tr>
                              <td>id</td>
                              <td>name</td>
                              <td>name</td>
                              <td>type</td>
                              <td>date</td>
                              <td>shift</td>
                              <td>payment</td>
                          </tr>
     
                          <tr>
                            <td>id</td>
                            <td>name</td>
                            <td>name</td>
                            <td>type</td>
                            <td>date</td>
                            <td>shift</td>
                            <td>payment</td>
                        </tr>
   
                        <tr>
                          <td>id</td>
                          <td>name</td>
                          <td>name</td>
                          <td>type</td>
                          <td>date</td>
                          <td>shift</td>
                          <td>payment</td>
                      </tr>
 
                      <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>name</td>
                        <td>type</td>
                        <td>date</td>
                        <td>shift</td>
                        <td>payment</td>
                    </tr>

                    <tr>
                      <td>id</td>
                      <td>name</td>
                      <td>name</td>
                      <td>type</td>
                      <td>date</td>
                      <td>shift</td>
                      <td>payment</td>
                  </tr>

           
                </table>
            </div>
            <div class="button" style="margin-top: 12px;">
                <a href="#">See All</a>
            </div>
        </div>
        
    </div>
    </main>
  </div>
</div> -->




                <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
                    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
                    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
                    crossorigin="anonymous"></script>
                <script src="dashboard.js"></script>
</body>

</html>