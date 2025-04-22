<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
<?php
$items= get_field('info', 'option');
$elems = $items['left_block'];
$phone = $items['right_block'];
$socials = $items['social'];
$name = $items['logo_name'];
?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <?php

            foreach($elems as $el):
            ?>
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <img style="width: 20px; height: 24px;" src="<?= $el['icon'] ? $el['icon'] : '';?>" alt="">
                <small><?= $el['content'] ? $el['content'] : '';?></small>
            </div>
            <?php endforeach;?>
        </div>
        <div class="col-lg-5 px-5 text-end">

            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <img style="width: 20px; height: 24px;" src="<?= $phone['icon'] ? $phone['icon'] : '';?>" alt="">
                <small><?= $phone['content'] ? $phone['content'] : '';?></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <?php
                    foreach($socials as $social):
                ?>
                <a class="btn" href="<?= $social['link'] ? $social['link'] : '';?>">
                    <img style="width: 20px; height: 35px;" src="<?= $social['icon'] ? $social['icon'] : '';?>" alt=""></a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><img style="width: 30px; height: 25px; padding-right: 5px;" src="<?= $name['icon'] ? $name['icon'] : '';?>" alt=""><?= $name['name'] ? $name['name'] : '';?></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">


   <div class="navbar-nav ms-auto p-4 p-lg-0">
       <?php
       wp_nav_menu([
           'theme_location' => 'menu-header',
           'container_class' => 'header__menu',
       ]);
       ?>
<!--            <a href="index.html" class="nav-item nav-link active">Home</a>-->
<!--            <a href="about.html" class="nav-item nav-link">About</a>-->
<!--            <a href="service.html" class="nav-item nav-link">Service</a>-->
<!--            <div class="nav-item dropdown">-->
<!--                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>-->
<!--                <div class="dropdown-menu rounded-0 rounded-bottom m-0">-->
<!--                    <a href="feature.html" class="dropdown-item">Feature</a>-->
<!--                    <a href="team.html" class="dropdown-item">Our Doctor</a>-->
<!--                    <a href="appointment.html" class="dropdown-item">Appointment</a>-->
<!--                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
<!--                    <a href="404.html" class="dropdown-item">404 Page</a>-->
           </div>
            </div>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
<style>
    .menu{
        display: flex;
    }
    .menu-item{
        list-style: none;
    }

    .menu-item a{
        margin-right: 30px;
        padding: 25px 0;
        color: #FFFFFF;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        outline: none;

        color: var(--dark);
    }
    </style>