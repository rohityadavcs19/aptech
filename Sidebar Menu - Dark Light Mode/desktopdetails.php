<?php ?>



<body onload="checkos()">
    <div id="desktopdetails">




        <h2 id="heading">Desktop Details</h2>
        <hr>
        <form id="form" method="post">
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputState">Desktop Configuration in Lab</label>
                    <select id="inputState" class="form-control" name="des_config" required>
                        <option value="">Choose...</option>
                        <option>PIV</option>
                        <option>Dual</option>
                        <option>2.4GHz</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">RAM available on each desktop</label>
                    <select id="inputState" class="form-control" name="ram_avail" required>
                        <option value="">Choose...</option>
                        <option>1GB</option>
                        <option>2GB</option>
                        <option>4GB</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Minimum hard disk space available on desktop</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Min Hardisk Space" name="disk_space" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Type of Monitors</label>
                    <select id="monitortype" class="form-control" name="monitor_type" required>
                        <option value="">choose</option>
                        <option>15th</option>
                        <option>17th</option>
                        <option>18th</option>

                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="OperatingSystem">Operating system on desktops</label>
                    <select id="OperatingSystem" name="os_name" onchange="checkos();" required>
                        <option value="Select" selected>Select</option>
                        <option value="WindowsOS">Windows</option>
                        <option value="LinuxOS">Linux</option>
                    </select><br><br>
                </div>
            </div>
            <div id="Win-version">
                <label for="windows">Windows Version</label>
                <select name="os_version">
                    <option value="windows-7">Windows-7</option>
                    <option value="windows-8">windows-8</option>
                    <option value="windows-10">windows-10</option>
                    <option value="windows-11">windows-11</option>
                </select><br>
            </div>
            <div id="Linux-version">
                <label for="Linux">Linux Distributor</label>
                <select name="os_version">
                    <option value="Red-hat">Red-hat</option>
                    <option value="ubuntu">Ubuntu</option>
                    <option value="centos">CentOS</option>
                    <option value="fedora">Fedora</option>
                </select><br>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="inputState">IE version on desktops</label>
                    <select id="monitortype" class="form-control" name="ie_version" required>
                        <option selected>choose</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>NO</option>

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">License OS in all Client node</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="License" name="os_license" required>YES<br>
                        <input type="radio" class="form-check-input" id="License" name="os_license" required>NO
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name of Antivirus installed on PC's</label>
                    <input type="text" class="form-control" id="Antivirus" name="antivirus_name" placeholder="Name of Antivirus installed on PC's" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Branded Machines?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Branded_machine" value="Yes" id="flexRadioDefault1" required>YES
                        <br>
                        <input class="form-check-input" type="radio" name="Branded_machine" value="NO" id="flexRadioDefault1">NO
                    </div>

                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">.Net Framework 4.0 or higher installed?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="ramework" value="Yes" name="dotnet_install" required>YES
                        <br>
                        <input class="form-check-input" type="radio" id="ramework" value="No" name="dotnet_install">NO

                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Head to Head seating distance will be as per norms of Health ministry of India
                        i.e. 6 feet head to head distance?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="count" value="yes" name="distance_norms" required> YES
                        <br>
                        <input class="form-check-input" type="radio" id="count" value="No" name="distance_norms">NO
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">College has Thin client?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="client" value="Yes" name="thin_client" required>YES
                        <br>
                        <input class="form-check-input" type="radio" id="client" value="NO" name="thin_client">No
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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
        function checkos() {
            var ostype = document.getElementById("OperatingSystem").value;
            if (ostype === "WindowsOS") {

                document.getElementById('Win-version').style.display = 'block';
                document.getElementById('Linux-version').style.display = 'none';


            } else if (ostype === "Select") {

                document.getElementById('Win-version').style.display = 'none';
                document.getElementById('Linux-version').style.display = 'none';

            } else {

                document.getElementById('Win-version').style.display = 'none';
                document.getElementById('Linux-version').style.display = 'block';


            }

        }
    </script>

</body>