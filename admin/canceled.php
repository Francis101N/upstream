<?php
session_start();
include('connection/connect.php');
include('fns.php');

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}

$query = "select * from bookings where status = 'Canceled' order by id desc";
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>Booking List</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="logo.png" width="80px" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form action="" method="get" role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" name="search" placeholder="Search..." class="form-control mt-0">
                                <a href="proc-search" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title p-2">Canceled Bookings ( <span class="text-danger" ><?= $num;?></span> )</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>


                            <!-- <a href="export" class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Export All
                                </a>

                                <input name="btn_download" type="submit" class="btn btn-info" value="Download Selected">


                                <input name="btn_mail" type="submit" class="btn btn-success" value="Mail Selected"> -->


                            <br>


                        </div>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <?php if ($error) echo '<div class="alert alert-danger" >' . $error . '</div>'; ?>
                            <?php if ($success || $_GET['success']) echo '<div class="alert alert-success">' . $success . $_GET['success'] . '</div>'; ?>
                            <div class="table-responsive">
                                <table class="table text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <!-- <th class="border-top-0"><input type="checkbox" id="checkAll"></td>
                                            </th> -->
                                            <th class="border-top-0">Check In Date</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                            </div>

                            <tbody>
                                <?php

                               
                                for ($i = 0; $i < $num; $i++) {

                                    $row = mysqli_fetch_array($result);
                                ?>
                                    <tr>
                                        <!-- <td><input type="checkbox" value="<?php echo $row['id']; ?>" name="selected_id[]"></td> -->
                                        <td><?php echo long_date($row['checkIn']); ?></td>
                                        <td><?php echo ucwords($row['firstname'] . ' ' . $row['lastname']); ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-info" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal<?php echo $row['id']; ?>">View more...</a>

                                            <a href="deleteRecord?id=<?php echo ($row['token']); ?>" onclick="return confirm('Are you sure you want to delete this booking?');" class="btn btn-danger" style="margin-right: 10px;">Del</a>

                                          

                                        </td>

                                        <div style="top: 100px;" id="exampleModal<?php echo $row['id']; ?>" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            <p>
                                                                <?= $row['roomType']; ?>
                                                            </p>
                                                        </h5>

                                                        <button type="button" id="checked" class="btn" data-dismiss="modal" type="button"><i class="fa fa-times"></i> </button>
                                                    </div>
                                                    <style>
                                                        .row .col-md-4 p,
                                                        p {
                                                            font-weight: 800;
                                                        }
                                                    </style>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                Check In:
                                                                <p>
                                                                    <?= long_date($row['checkIn']); ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-md-4">
                                                                Check Out:
                                                                <p>
                                                                    <?= long_date($row['checkOut']); ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-md-4">
                                                                Price:
                                                                <p>
                                                                    <?= number_format($row['price']); ?>
                                                                </p>
                                                            </div>

                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                No of Night:
                                                                <p>
                                                                    <?= $row['noNight']; ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-md-4">
                                                                Payment Method:
                                                                <p>
                                                                    <?= ($row['paymentType']); ?>
                                                                </p>
                                                            </div>

                                                            <div class="col-md-4">
                                                                Reservation No:
                                                                <p>
                                                                    <?= ($row['reserveNo']); ?>
                                                                </p>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                Date Orderd
                                                                <p>
                                                                    <?= long_date($row['dateCreated']); ?>
                                                                </p>
                                                            </div>

                                                            <?php if (isset($row['reference'])) {

                                                            ?>

                                                                <div class="col-md-4">
                                                                    Reference No:
                                                                    <p>
                                                                        <?= ($row['reference']); ?>
                                                                    </p>
                                                                </div>

                                                            <?php } ?>



                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="top: 100px;" id="exampleModal_1<?php echo $row['id']; ?>" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            <p>
                                                                Update payment status
                                                            </p>
                                                        </h5>

                                                        <button type="button" id="checked" class="btn" data-dismiss="modal" type="button"><i class="fa fa-times"></i> </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form method="post" action="updateRecord">
                                                            <input type="hidden" name="id" value="<?php echo $row['token']; ?>">
                                                            <select name="paymentType" class="form-control mb-5">
                                                                <option>Select One</option>
                                                                <option value="Confirmed">Confirmed</option>
                                                                <option value="Pending">Pending</option>
                                                            </select>

                                                            <input type="submit" name="update" value="Submit" class="btn btn-success">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('footer.php'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- Datatables -->
    <script src="dist/datatables/js/dataTables.min.js"></script>
    <script src="dist/datatables/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="dist/datatables/css/dataTables.bootstrap5.min.css">
    <!-- Datatables -->

    <script>
        $(document).ready(function() {
            $('.table').DataTable();

        });
    </script>
    <!-- smart table -->

    <script>
        $(function() {

            $("#checkAll").click(function() {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });

        })
    </script>
</body>

</html>