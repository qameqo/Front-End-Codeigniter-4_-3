<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.datetimepicker.min.css'); ?>">
    <link rel=" icon" type="image/png" href="<?php echo base_url('assets/img/logoA.png'); ?>" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.datetimepicker.js'); ?>"></script>

    <script src="<?php echo base_url('assets/js/moment.js'); ?>"></script>
    <title>The Media 2021</title>
</head>

<body style="background-color:#FFFEFC">
    <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:#faf6f5;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('Pages'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span>game atipat</span>
                            <img src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png" alt="">
                        </a>
                        <div class="dropdown-menu mt-auto" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Setting</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="ver_nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row justify-content-start">
                <div class="col-sm-2">
                    <ul class="navbar-nav mr-auto bg-white flex-column vertical-nav"
                        style="box-shadow:2px 5px 5px #888888;">
                        <li class="nav-item pt-3 pb-3">
                            <a class="nav-link text-dark ">
                                <img src="<?php echo base_url('assets/img/logo.jpg'); ?>" class="img-user" alt="">
                                <span class="back ">Backend</span>
                            </a>
                            <!-- <span class="h5">Backend</span> -->
                        </li>
                        <div style="border-bottom:1px solid #888888"></div>
                        <li class="nav-item">
                       
                            <a class="nav-link" href="Dashboard" ><b> Dashboard</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> หน้าเว็บไซต์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Account">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> บัญชีผู้ใช้</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Crouse">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> คอร์ส</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Lecturer">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> วิทยากร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="User">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> ผู้เข้าอบรม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="News">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> ข่าวสาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Person">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> คณะกรรมการบริหาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Payment">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> การชำระเงิน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Certificate">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> ใบประกาศณียบัตร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login">&nbsp;&nbsp;<i class="fas fa-angle-right"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <ul class="navbar-nav pl-3 ml-auto" >

                <li class="nav-item nav-user">
                    <a class="nav-link " href="#" id="navbarDropdown">
                        User <img src="<?php echo base_url('assets/img/person14.jpg'); ?>" class="img-user" alt="">
                    </a>
                </li>
            </ul> -->

        </div>
    </nav>