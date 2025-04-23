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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <?php wp_head(); ?>
</head>
<body>
    <?php 
    $items= get_field('info', 'option');
    $elems = $items['left_block'];
    $phone = $items['right_block'];
    $socials = $items['socials'];
    $logo = $items['logo'];
    $appointment = $items['appointment'];
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
                foreach($elems as $elem):
                ?>
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="<?= $elem['icon'] ? $elem['icon'] : '';?>"></small>
                    <small><?= $elem['info'] ? $elem['info'] : '';?></small>
                </div>
                <?php endforeach;?>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="<?= $phone['icon'] ? $phone['icon'] : '';?>"></small>
                    <small><?= $phone['phone'] ? $phone['phone'] : '';?></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <?php 
                        foreach($socials as $social):
                    ?>
                        <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="<?= $social['link'] ? $social['link'] : '';?>">
                            <i class="<?= $social['icon'] ? $social['icon'] : '';?>"></i>
                        </a>
                    <?php endforeach;?>        
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="<?= $logo['icon'] ? $logo['icon'] : '';?>"></i><?= $logo['text'] ? $logo['text'] : '';?></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
                            wp_nav_menu([
                            'theme_location' => 'menu-header',
                            'container' => 'div',
                        ]);?>

            </div>
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><?=$appointment['text'] ? $appointment['text'] : '';?><i class="<?=$appointment['icon'] ? $appointment['icon'] : '';?>"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <style>
      
    </style>