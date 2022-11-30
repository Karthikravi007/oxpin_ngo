<!DOCTYPE html>
<html lang="en">
<?php
include "db.php";
session_start();
error_reporting(0);
if($_SESSION['madmin']=='') { header("Location: index.php");	}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>ngo Admin Pannel</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NGO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsehome"
                    aria-expanded="true" aria-controls="collapsehome">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <div id="collapsehome" class="collapse" aria-labelledby="headinghome" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="home.php">Home Slider</a>
                        <a class="collapse-item" href="about_mini.php">Home Charity</a>
                         <a class="collapse-item" href="donate.php">Donation</a>                      
                         <a class="collapse-item" href="content.php">Content (Volunteers)</a>                      
                         <a class="collapse-item" href="volunteer.php">Become a Volunteer</a>                      
                         <a class="collapse-item" href="childrens.php">Gift for Childrens</a>                     
                         <a class="collapse-item" href="count.php">Count</a>                     
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseabout"
                    aria-expanded="true" aria-controls="collapseabout">
                    <i class="fas fa-info-circle"></i>
                    <span>About</span>
                </a>
                <div id="collapseabout" class="collapse" aria-labelledby="headingabout" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="about.php">About</a>
                    </div>
                </div>
            </li>
		 <li class="nav-item">
                <a class="nav-link" href="event.php">
                    <i class="fas fa-calendar"></i>
                    <span>Event</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="testimonial.php">
                    <i class="fas fa-quote-left"></i>
                    <span>Testimonial</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">
                    <i class="fas fa-list"></i>
                    <span>Header</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logo.php">
                    <i class="fas fa-circle"></i>
                    <span>Logo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portfolio.php">
                    <i class="fas fa-image"></i>
                    <span>Gallery</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="social.php">
                    <i class="fas fa-globe"></i>
                    <span>Social Media</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="footer.php">
                    <i class="fas fa-circle"></i>
                    <span>Footer Logo</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donation.php">
                    <i class="fas fa-piggy-bank"></i>
                    <span>Donation (Razorpay)</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="contact.php">
                    <i class="fas fa-phone"></i>
                    <span>Contact</span></a>
            </li>
            <!-- Divider -->
           
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
            

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <b> NGO <b> </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>