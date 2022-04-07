<?php ?>

<div id="basicdetails">



<h2 id="heading">Basic Details</h2>
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

            <!-- <input type="date"      class="form-control" id="inputEmail4" name="audit_date" placeholder="Administrator Name" required> -->
            <!-- <label for="date">Date</label>
                        <input type="date" onload="getDate()" class="form-control" id="date" name="date"> -->
            <!-- <label>
                            Choose your preferred party date (required, April 1st to 20th):
                            <input type="date" name="party" min="2017-04-01" max="2017-04-20" required> -->
            <span class="validity"></span>
            <!-- </label>  -->
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
    <!-- <button type="get"><a href="../Results/result1.html">Fetch</a></button> -->
</form>
</div>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
<script>
    function same() {
        document.getElementById('div1').style.display = 'none';
        document.getElementById('div2').style.display = 'none';

    }

    function different() {
        document.getElementById('div1').style.display = 'block';
        document.getElementById('div2').style.display = 'block';
    }

    function hotspotN() {
        document.getElementById('tcsenitized').style.display = 'none';
    }

    function hotspotY() {
        document.getElementById('tcsenitized').style.display = 'block';
    }
</script>
<script>
    function getDate() {
        var today = new Date();

        document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


    }
</script>