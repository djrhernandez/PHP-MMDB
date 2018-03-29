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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="/assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo">
            <a href="Index.php" class="simple-text">
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
                <li>
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
                <li class="active">
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Employee Profile</h4>
                                <p class="category">Complete profile</p>
                            </div>
                            <div class="card-content">
                                <form action ="<?php echo $current_file;?>" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">EMP ID</label>
                                                <input type="text" name="id" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Salary</label>
                                                <input type="text" name="salary" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Street</label>
                                                <input type="text" name="street" class="form-control" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">City</label>
                                                <input type="text" name="city" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">State</label>
                                                <input type="text" name="state" class="form-control" maxlength="2" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Zip Code</label>
                                                <input type="text" name="zip" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Date of Birth</label>
                                                <input type="text" name="dob" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Sex</label>
                                                <input type="text" name="sex" class="form-control" maxlength="1" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Social Security #</label>
                                                <input type="text" name="ssn" class="form-control" >
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Phone Number</label>
                                                <input type="text" name="phone" class="form-control" maxlength="11">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Job Type</label>
                                                <input type="text" class="form-control" >
<!--                                                <select class="form-control" name="type" id="sel1">-->
<!--                                                    <option></option>-->
<!--                                                    <option>DR</option>-->
<!--                                                    <option>NS</option>-->
<!--                                                    <option>RC</option>-->
<!--                                                    <option>PH</option>-->
<!--                                                </select>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                    <label class="control-label" name="doh">Date Hired (DD-MON-YY)</label>
                                                    <input type="text" id="datetimepicker" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-right" name="submit" value="submit"><i class="fa fa-plus" aria-hidden="true"></i> Add Employee</button>
                                    <div class="clearfix"></div>
                                </form>
                                <?php
                                require_once('Connect.php');

                                $emp = array();
                                $emp[0] = '';
                                $tempCount = 0;

                                if(isset($_post['submit'])) {
                                    $tempCount++;
                                    //Add the Employee into the table

                                    $emp[0] = $_POST['id'];
                                    $emp[1] = $_POST['name'];
                                    $emp[2] = $_POST['dob'];
                                    $emp[3] = $_POST['sex'];
                                    $emp[4] = $_POST['ssn'];
                                    $emp[5] = $_POST['street'];
                                    $emp[6] = $_POST['city'];
                                    $emp[7] = $_POST['state'];
                                    $emp[8] = $_POST['zip'];
                                    $emp[9] = $_POST['phone'];
                                    $emp[10] = $_POST['type'];
                                    $emp[11] = $_POST['doh'];
                                    $emp[12] = $_POST['salary'];

                                    $ins_now = null;
                                    $ins = "INSERT INTO DHKW_EMPLOYEES(eid,name,dob,sex,ssn,street,city,state,zip_code,phone_number,job_type,date_hired,salary)
                                              VALUES('" . $emp[0] . "','" . $emp[1] . "','" . $emp[2] . "','" . $emp[3] . "','" . $emp[4] . "','" . $emp[5] . "','" . $emp[6] . "'
                                              ,'" . $emp[7] . "','" . $emp[8] . "','" . $emp[9] . "','" . $emp[10] . "','" . $emp[11] . "','" . $emp[12] . "')";

                                    $ins_now = oci_parse($link, $ins);
                                    if (oci_execute($ins_now)) {
                                        echo "INSERTED\n";
                                    } else {
                                        echo "Error\n";
                                    }
                                    $res = oci_commit($link);
                                    if (!$res) {
                                        $ex = oci_error($link);
                                        trigger_error(htmlentities($ex['message']), E_USER_ERROR);
                                    }
                                }elseif(isset($_POST['remove'])) {
                                    //Remove the employee
                                    $del_now = null;
                                    $del = "DELETE FROM DHKW_EMPLOYEES WHERE name = '" .$_POST['name']."' AND type = '".$_POST['type']."'";
                                    $del_now = oci_parse($link, $del);
                                    if (oci_execute($del_now)) {
                                        echo "Deleted";
                                    } else {
                                        echo "ERROR";
                                    }
                                }


//                                        $sql = 'INSERT INTO CS3420.DHKW_EMPLOYEES(name,dob,sex,ssn,street,city,state,zip,phone,type,doh,salary)' . 'VALUES(:name, :dob, :sex, :ssn, :street, :city, :state, :zip, :phone, :type, :doh, :salary)';
//                                        //$sql = oci_parse($link, "call CS3420.DHKW_INSERT_EMPLOYEE(:nm, :db, :sx, :ss, :sr, :ct, :st, :zc, :pn, :jt, :dh, :sy)");
//                                        $send = oci_parse($link, $sql);
//
//                                        oci_bind_by_name($send, ':name ', $name);
//                                        oci_bind_by_name($send, ':dob ', $dob);
//                                        oci_bind_by_name($send, ':sex ', $sex);
//                                        oci_bind_by_name($send, ':ssn ', $ssn);
//                                        oci_bind_by_name($send, ':street ', $street);
//                                        oci_bind_by_name($send, ':city ', $city);
//                                        oci_bind_by_name($send, ':state ', $state);
//                                        oci_bind_by_name($send, ':zip ', $zip);
//                                        oci_bind_by_name($send, ':phone ', $phone);
//                                        oci_bind_by_name($send, ':type ', $type);
//                                        oci_bind_by_name($send, ':doh ', $doh);
//                                        oci_bind_by_name($send, ':salary ', $salary);
//
//                                        oci_execute($send, OCI_DEFAULT);
//
//
//                                    if (!oci_execute($send)) {
//                                        echo oci_error();
//                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#">
                                    <img class="img" src="assets/img/faces/logo.png" />
                                </a>
                            </div>

                            <div class="content">
                                <h6 class="category text-gray">Nobel Prize Winner</h6>
                                <h4 class="card-title">Dr. Mercy</h4>
                                <p class="card-content">
                                    I'll send you my consultation fee!
                                </p>
                                <a href="#" class="btn btn-primary btn-round">More</a>
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
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
//    (function($) { $('#datetimepicker').datepicker({ dateFormat: 'd-M-yy' }); })(jQuery)
    $('#datetimepicker').datepicker({ dateFormat: 'd-M-yy' });
</script>


</html>
