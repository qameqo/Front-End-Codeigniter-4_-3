<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"></script>
<script src="<?php echo base_url('assets/js/moment.js'); ?>"></script>
    <title>The Media 2021</title>
</head>
<?php $session = session(); ?>
<body> 
<!-- z-index:3000; -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white p-0"
        style="box-shadow:2px 2px 5px #888;" id="navhead">
        <div class="container p-1">
            <img src="<?php echo base_url('assets/img/logo.jpg'); ?>" class="img-user" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link navactive" href="<?php echo base_url('Pages'); ?>" id="linkhome"> <strong
                                class="text-dark"> หน้าแรก </strong><span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"> <strong class="text-dark">
                            คณะกรรมการบริหาร <span> <i class="fa fa-angle-down" aria-hidden="true"></i> </span></strong>
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item drop " href="PersonDetails">ผู้ช่วยศาสตราจารย์ ดร.สุดาวรรณ สมใจ</a>
                            <a class="dropdown-item drop " href="#">รองศาสตราจารย์ ดร.ศิรวิทย์ กุลโรจนภัทร</a>
                            <a class="dropdown-item drop " href="#">ผู้ช่วยศาสตราจารย์ (พิเศษ) ดร.ศรีปริญญา ธูปกระจ่าง</a>
                            <a class="dropdown-item drop " href="#">ผู้ช่วยศาสตราจารย์ (พิเศษ) ดร.รัชฎา ฟองธนกิจ</a>
                            <a class="dropdown-item drop " href="#">พันตำรวจเอก ดร.นพดล บุรณนัฏ</a>
                            <a class="dropdown-item drop " href="#">ดร.พลอมร ธรรมประทีป</a>
                            <a class="dropdown-item drop " href="#">ดร.ชาญเดช เจริญวิริยะกุล</a>
                            <a class="dropdown-item drop " href="#">ดร.ณัฐณภรณ์ เอกนราจินดาวัฒน์</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Crouse'); ?>" id="linkcourse"><strong
                                class="text-dark">คอร์ส</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('News'); ?>"> <strong
                                class="text-dark">ข่าวสาร</strong></a>
                    </li>
                    <?php 
                    if ($session->has('id'))
                    { 
                    ?>
                     <li class="nav-item" id="nav-account">
                        <a class="nav-link " href="<?php echo base_url('Profile') ?>"> <strong
                                class="text-dark">บัญชีของฉัน</strong></a>
                    </li>
                    <?php  
                        }else{ 
                    ?>
                    <li class="nav-item" id="nav-login">
                        <a class="nav-link " href="<?php echo base_url('Signin') ?>"> <strong
                                class="text-dark">เข้าสู่ระบบ</strong></a>
                    </li>
                    <?php  
                        } 
                    ?>
                    

                    
                    <!-- <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('Enroll/#Enroll'); ?>" target="_blank" id="linkenroll"> <strong>Enroll in Crouse</strong></a>
                    </li> -->
                   
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <!-- <a class="nav-link navactive" href="<?php echo base_url('Pages'); ?>"> <strong> Home </strong><span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#course" id="linkcourse"><strong>Course</strong></a>
                <a class="nav-link " href="#training" id="linktraining"> <strong>Training time</strong></a>
                <a class="nav-link " href="#footer" id="linkcontactus"> <strong>Contact Us</strong></a>
                <a class="nav-link " href="<?php echo base_url('Enroll/#Enroll'); ?>" target="_blank" id="linkenroll"> <strong>Enroll in Crouse</strong></a> -->
                    <!-- <strong> <a href="#">TH</a>&nbsp;|&nbsp;<a href="#">EN</a></strong> -->
                </form>
            </div>
        </div>
    </nav>
    <input type="hidden" id="url" value="<?php echo $url_api ?>"  />
    <input type="hidden" id="app_id" value="<?php echo $app_id ?>" />
    <input type="hidden" id="app_key" value="<?php echo $app_key ?>" />
    <script>
        $(document).ready(function () {
        $('.navbar .dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
        });
        $('.drop').click(function () {
            $(this).find('.drop').css('background-color','grey');
        });
    });

    $("#nav-account").click(function(){
        
    });
    </script>