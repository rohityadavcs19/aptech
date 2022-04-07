<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<!-- <style>
    .fixed-top #topnav ul {
        list-style-type:none;
        color:black;
    }
    </style> -->
<body onload="checkos()">
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Test</span>
                    <span class="profession">Cetre Audit</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

               <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#basicdetails">
                            <i class='bx bx-home-alt icon' ></i>
                 <span class="text nav-text">Basic Details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#desktopdetails">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
            <span class="text nav-text">desktop details</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">
            <div class = "fixed-top">
                <nav style="float:right;" class="nav nav-navbar" id="topnav">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <button type="submit" id="livelocation" name="location">Live location</button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Welcome</a>
                            </li>
                            <?php echo " " . date('m/d/y'); ?>

                        </ul>
                    <!-- <ul>
                        <li>welcome</li>
                    </ul> -->
                </nav>
            </div>
            <div id="basicdetails">
                <?php include 'basicdetails.php'?>

        <!-- <h2 id="heading">Basic Details</h2>
         <hr>
<form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Test Centre Code</label>
            <input type="tel" class="form-control" id="inputEmail4" name="centre_code" placeholder="Center Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Test Centre Name</label>
            <input type="text" class="form-control" id="inputPassword4" name="centre_name" placeholder="Centre Address" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Delhi</option>
                <option>Mumbai</option>
                <option>Agra</option>
                <option>Mathura</option>
                <option>Banarash</option>
                <option>Rajashthan</option>
                <option>Delhi</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputEmail4">Auditor FirstName</label>
                <input type="text" class="form-control" id="inputEmail4" name="auditor_firstname" placeholder="Auditor Name" required>
            </div>
            <div class="form-group col-md-3">
                <label for="inputPassword4">LastName</label>
                <input type="text" class="form-control" id="inputPassword4" name="auditor_lastname" placeholder="Auditor middlee Name" required>
            </div>
            <div class="form-group">
                <label for="inputAddress">Auditor Contact</label>
                <input type="text" class="form-control" id="inputAddress" name="auditor_contact" placeholder="Auditor last Name" required>
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputEmail4">Audit Date</label> <br>
            <div class="auditdate" style="width: 200px; border: 1px solid gray; padding: 5px; margin: 2px;">

                <?php echo date('d-m-Y'); ?>
            </div>

            <span class="validity"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name of Centre Administrator</label>
            <input type="text" class="form-control" id="inputEmail4" name="centre_admin_name" placeholder="Administrator Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Contact details of Administrator</label>
            <input type="tel" class="form-control" id="inputPassword4" name="centre_admin_contact" placeholder="Administrator Contact no." required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name of Centre IT Head</label>
            <input type="text" class="form-control" id="inputEmail4" name="centre_IThead_name" placeholder="IT Head Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Contact details of IT Head</label>
            <input type="tel" class="form-control" id="inputPassword4" name="centre_IThead_contact" placeholder="IT head Contact no." required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name of Centre Network And Security Head</label>
            <input type="text" class="form-control" id="inputEmail4" name="centre_network_name" placeholder="NS Head Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Contact details of Network And Security Head</label>
            <input type="tel" class="form-control" id="inputPassword4" placeholder="NS Head Contact no." name="centre_network_contact" required>
        </div>
    </div>
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Total Number of PC's</label>
            <input type="number" class="form-control" id="inputPassword4" placeholder="NO. of PC's" name="PCs_booked" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">How far is Center from Bus Stand?</label>
            <input type="number" class="form-control" id="inputEmail4" name="distance_BusStand" placeholder="In KM" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">How far is Center from Railway Station?</label>
            <input type="number" class="form-control" id="inputPassword4" placeholder="In KMs" name="distance_railway" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">How far is Center from from main City?</label>
            <input type="number" class="form-control" id="inputPassword4" placeholder="In KMs" name="distance_city" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputPassword4">How many Computer labs are allocated for Exam?</label>
            <input type="number" class="form-control" id="inputFloor" placeholder="Total number of labs" name="computer_labs" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">On which floors Computer LABS are located?</label>
            <input type="varchar" class="form-control" id="inputFloor" placeholder="floors" name="floors" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputPassword">PH friendly centre?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="PH_friendly" id="exampleRadios1" value="Yes" required>YES <br>
                <input class="form-check-input" type="radio" name="PH_friendly" id="exampleRadios1" value="No">NO
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8" style="text-align:justify;">
            <label for="inputPassword4">Lift Availability (Y/N) Lifts not be used only for PH candidates. There should be tooth pick or any other item that can be used for pressing button and can be thrown away once used in the dust bin. To avoid hand contact with buttons?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="lift_availability" id="exampleRadios1" value="Yes" required />YES <br>
                <input class="form-check-input" type="radio" name="lift_availability" id="exampleRadios1" Vvalue="No" />NO
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8" style="text-align:justify;">
            <label for="inputPassword4">Is any adequate space for candidate waiting area adhering to social distancing norms i.e. 6 feet distance for each individual standing/sitting there?
            </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="waiting_space" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="waiting_space" id="exampleRadios1" value="No" />NO
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8" style="text-align:justify;">
            <label for="inputPassword4">Is any adequate space for Queuing up candidate maintaining 6 feet distance to enter the test center premises for document verification & frisking?
            </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="queuing_space" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="queuing_space" id="exampleRadios1" value="No">NO
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-8" style="text-align:justify;">
            <label for="inputPassword4">Candidate screening facility available at the center Entry gate. Required number of the trained person with instrument (e.g.: - thermal gun to check fever of the candidates?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="screening_facility" id="exampleRadios1" value="Yes" required>Yes<br>
                <input class="form-check-input" type="radio" name="screening_facility" id="exampleRadios1" value="No">No
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputPassword4">Place for Registration Desk with LAN, POWER & Sufficient Light?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="regis_desk" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="regis_desk" id="exampleRadios1" value="No">NO
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Secure Server Room Availability?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="server_room" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="server_room" id="exampleRadios1" value="No">NO

            </div>
        </div>
    </div>
    <label>Are all the Labs in one Building or Different Building?</label><br>
    <input type="radio" name="building" value="same" onclick="same();" required />Same
    <input type="radio" name="building" value="different" onclick="different();" />Different
    <div id="div1" class="hide">
        <hr>
        <label>Are they using same subnetmask?</label><br>
        <input type="radio" id="yes" id="samesubnetmask" name="samesubnetmask" value="Yes">YES <br>
        <input type="radio" id="no" id="samesubnetmask" name="samesubnetmask" value="No">NO
    </div>
    <div id="div2" class="hide">
        <hr>
        <label>Distance between them?</label><br>
        <input type="text" id="distance_bw" name="distance_bw" />
    </div><br>

    <hr>
    <label>Does TC belong to covid19 hotspot?</label><br>
    <input type="radio" name="covid_hotspot" value="No" onclick="hotspotN();" required />
    No
    <input type="radio" name="covid_hotspot" value="Yes" onclick="hotspotY();" />
    Yes
    <br>
    <div id="tcsenitized" class="hide">
        <hr>
        <label>Is the TC Sanitized?</label><br>
        <input type="radio" id="yes" name="TC_sanitized" value="Yes">YES <br>
        <input type="radio" id="no" name="TC_sanitized" value="No">NO
    </div>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputPassword4">Does any of the center staff has the history of Covid 19 Positive?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="anystaff_covid_history" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="anystaff_covid_history" id="exampleRadios1" value="No">NO

            </div>

        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Does each floor has Wash basins along with Soap available for hand wash?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="washbasins" id="exampleRadios1" value="Yes" required>YES<br>
                <input class="form-check-input" type="radio" name="washbasins" id="exampleRadios1" value="No">NO

            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
</div>
<div id="desktopdetails">
    <?php include 'desktopdetails.php';?>
</div>
        	
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

    </script>

</body>
</html>
