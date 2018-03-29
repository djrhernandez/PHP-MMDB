<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="Doctor Has Arrived" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/PI_Mercy_Valkyrie.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Mercy Medical Clinic</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head></head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="http://cs.csubak.edu/~kwerts/MercyMedicalClinic/Index.php" class="simple-text">
                Mercy Medical Clinic
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="Index.php">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="http://cs.csubak.edu/~dirizarryher/cs342/u_ApptCenter.php">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="reports.php">
                        <i class="material-icons">description</i>
                        <p>Reports</p>
                    </a>
                </li>
                <li>
                    <a href="doctors.php">
                        <i class="fa fa-user-md"></i>
                        <p>Doctors</p>
                    </a>
                </li>
                <li>
                    <a href="receptionists.php">
                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        <p>Receptionists</p>
                    </a>
                </li>
                <li>
                    <a href="nurses.php">
                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        <p>Nurses</p>
                    </a>
                </li>
                <li>
                    <a href="Pharmacists.php">
                        <i class="material-icons">local_pharmacy</i>
                        <p>Pharmacists</p>
                    </a>
                </li>
                <li>
                    <a href="patients.php">
                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        <p>Patients</p>
                    </a>
                </li>
                <li>
                    <a href="insuranceco.php">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <p>Insurance Companies</p>
                    </a>
                </li>
                <li>
                    <a href="addEmployee.php">
                        <i class="material-icons">person_add</i>
                        <p>Add Employee</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="img-responsive" src="./assets/img/faces/logo69.png"/>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Future Appointments</h4>
                                <p class="category">Appoints 2 months in advanced</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Patient Name</th>
                                    <th>Date Scheduled</th>
                                    <th>Time</th>
                                    <th>Symptoms</th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Donald Trump</td>
                                        <td>12-DEC-16</td>
                                        <td>12:30 pm</td>
                                        <td>Heavy Weezing</td>
                                    </tr>
                                    <tr>
                                        <td>Minerva Hooper</td>
                                        <td>11-JAN-17</td>
                                        <td>11:00 am</td>
                                        <td>Severe Rash</td>
                                    </tr>
                                    <tr>
                                        <td>Donald Duck</td>
                                        <td>18-JAN-14</td>
                                        <td>12:30 pm</td>
                                        <td>Headaches </td>
                                    </tr>
                                    <tr>
                                        <td>David Hernandez</td>
                                        <td>22-DEC-9</td>
                                        <td>7:30 am</td>
                                        <td>Depression</td>
                                    </tr>
                                    <tr>
                                        <td>Aaron Jerwoski</td>
                                        <td>5-DEC-16</td>
                                        <td>1:30 pm</td>
                                        <td>Anxiety</td>
                                    </tr>
                                    <tr>
                                        <td>Dumble Toughskin</td>
                                        <td>12-DEC-16</td>
                                        <td>3:00 pm</td>
                                        <td>Slight fracture to the tibia</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Employees</h4>
                                <p class="category"></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <?php
                                    require_once('Connect.php');
                                    ?>
                                    <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Sex</th>
                                    <th>Salary</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $stid = oci_parse($link, 'SELECT e.eid, e.name, e.dob, e.sex, e.salary FROM CS3420.DHKW_EMPLOYEES e');

                                    if (!$stid) {
                                        $err = oci_error($link);
                                        trigger_error(htmlentities($err['message'], ENT_QUOTES), E_USER_ERROR);
                                    }

                                    $r = oci_execute($stid);
                                    $a = 0;
                                    while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
                                    {
                                        print "<tr>\n";

                                        foreach ($row as $item)
                                        {
                                            print "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                                        }
                                        print "</tr>\n";
                                    }
                                    oci_free_statement($stid);
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.linkedin.com/in/kyle-werts-227b3056">Kyle Werts</a>
                </p>
            </div>
        </footer>
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
