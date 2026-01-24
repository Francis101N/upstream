<?php
session_start();
require('connect.php');

if (!isset($_SESSION['admin_user'])) {
    // Redirect to login page if not logged in
    header("Location: index");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>visitors | trustvaultglobal</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index">
                            <img src="images/logo (3).png" alt="CoolAdmin" width="120px" height="15px" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="visitors">
                                <i class="fas fa-chart-bar"></i>Unique Visitors</a>
                        </li>
                        <li>
                            <a href="account_holders">
                                <i class="fas fa-table"></i>Account Holders</a>
                        </li>
                        <li>
                            <a href="deposits">
                                <i class="fas fa-arrow-down text-success me-2"></i>Deposits
                            </a>
                        </li>
                        <li>
                            <a href="withdrawals">
                                <i class="fas fa-arrow-up text-danger me-2"></i>Withdrawals
                            </a>
                        </li>
                        <li>
                            <a href="transactions">
                                <i class="fas fa-exchange-alt text-primary me-2"></i>Transactions
                            </a>
                        </li>
                        <li>
                            <a href="update_account">
                                <i class="far fa-check-square"></i>Update Account</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-download"></i>Backups</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="export" target="_blank">Back up accounts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/logo (3).png" alt="CoolAdmin" width="140px" height="10px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="visitors">
                                <i class="fas fa-chart-bar"></i>Unique Visitors</a>
                        </li>
                        <li>
                            <a href="account_holders">
                                <i class="fas fa-table"></i>Account Holders</a>
                        </li>
                        <li>
                            <a href="deposits">
                                <i class="fas fa-arrow-down text-success me-2"></i>Deposits
                            </a>
                        </li>
                        <li>
                            <a href="withdrawals">
                                <i class="fas fa-arrow-up text-danger me-2"></i>Withdrawals
                            </a>
                        </li>
                        <li>
                            <a href="transactions">
                                <i class="fas fa-exchange-alt text-primary me-2"></i>Transactions
                            </a>
                        </li>
                        <li>
                            <a href="update_account">
                                <i class="far fa-check-square"></i>Update Account</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fa fa-download"></i>Backups</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="export" target="_blank">Back up accounts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit bg-primary" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">

                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin
                                                <?php echo $_SESSION['admin_user']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <span class="email"><?php echo $_SESSION['admin_email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="account-profile">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="changeAdmin_pass">
                                                        <i class="zmdi zmdi-settings"></i>Change admin password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">


                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 mb-4 text-primary fw-bold">Unique Visitors Overview</h3>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover align-middle shadow-sm"
                                    style="border-radius: 10px; overflow: hidden;">
                                    <thead class="table-dark text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>IP Address</th>
                                            <th>Operating System</th>
                                            <th>Country</th>
                                            <th>Browser</th>
                                            <th>Date Visited</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center" style="font-size: 15px;">
                                        <?php
                                        $query = "SELECT * FROM visitors ORDER BY date_created DESC";
                                        $result = mysqli_query($conn, $query);
                                        $serial = 1; // initialize row number
                                        
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr style='height: 70px;'>";
                                            echo "<td>" . $serial++ . "</td>"; // numbered row
                                            echo "<td>" . htmlspecialchars($row['ip_address']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['operating_system']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['country']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['browser']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['date_created']) . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>

                    <style>
                        .table th,
                        .table td {
                            padding: 18px 12px !important;
                            vertical-align: middle !important;
                        }

                        .table tbody tr:hover {
                            background-color: rgba(30, 144, 255, 0.08);
                            transition: 0.3s ease;
                        }

                        .btn-danger:hover {
                            background-color: #c82333 !important;
                            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
                            transition: 0.3s ease;
                        }

                        .title-5 {
                            font-weight: 600;
                            letter-spacing: 0.5px;
                        }
                    </style>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2025 trustvaultglobal All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->