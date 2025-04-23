<?php
/* Template Name: Main page Template */
get_header();
$info = get_field('main');
$about = get_field('about');
$services = get_field('services');
$blocks = $info['block_info'];
$sliders = $info['slide'];
$lists = $about['lists'];
$elems =$services['block_services']; 
?>

<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-white mb-5"><?= $info['title'] ? $info['title'] : '';?></h1>
            <div class="row g-4">
                <?php 
                    foreach($blocks as $block):
                ?>
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up"><?= $block['numb'] ? $block['numb'] : '';?></h2>
                        <p class="text-light mb-0"><?= $block['info'] ? $block['info'] : '';?></p>
                    </div>
                </div>
                <?php endforeach;?>        
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <?php foreach($sliders as $slide):
                    ?>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= $slide['photo'] ? $slide['photo'] : '';?>" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0"><?= $slide['info'] ? $slide['info'] : '';?></h1>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75 align-self-end" src="<?= $about['image_first'] ? $about['image_first'] : '';?>" alt="">
                    <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="<?= $about['image_second'] ? $about['image_second'] : '';?>" alt="" style="margin-top: -25%;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4"><?= $about['name'] ? $about['name'] : '';?></p>
                <h1 class="mb-4"> <?= $about['title'] ? $about['title'] : '';?> </h1>
                <?= $about['content'] ? $about['content'] : '';?>
                <?php 
                    foreach($lists as $list):
                ?>    
                <p><i class="<?= $list['icon'] ? $list['icon'] : '';?> text-primary me-3"></i> <?= $list['text'] ? $list['text'] : '';?></p>
                <?php endforeach;?>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href=""><?= $about['button'] ? $about['button'] : '';?></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4"> <?= $services['name'] ? $services['name'] : '';?> </p>
            <h1><?= $services['title'] ? $services['title'] : '';?></h1>
        </div>
        <div class="row g-4">
            <?php
                foreach($elems as $el):
            ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="<?= $el['icon'] ?  $el['icon'] : '';?>"></i>
                    </div>
                    <h4 class="mb-3"><?= $el['title'] ?  $el['title'] : '';?></h4>
                    <p class="mb-4"><?= $el['contetn'] ?  $el['contetn'] : '';?></p>
                    <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i><?= $el['button'] ?  $el['button'] : '';?></a>
                </div>
            </div>
            <?php  endforeach;?>
        </div>
    </div>
</div>
<!-- Service End -->


<?php get_footer();?>