<?php
/* Template Name: Service page Template */
get_header();
$info = get_field('service');
$appointment = get_field('appointment');
$items = $info['blocks'];
$elements = $appointment['ingo'];
?>
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <div class="section section-breadcrumb">
                        <?php get_template_part('tmp/breadcrumbs'); ?>
                    </div>
                </ol>
            </nav>
        </div>
    </div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4"><?= $info['name'] ? $info['name'] : '';?></p>
            <h1><?= $info['title'] ? $info['title'] : '';?></h1>
        </div>
        <div class="row g-4">
            <?php
                foreach($items as $item):
            ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="<?= $item['icno'] ? $item['icno'] : '';?>"></i>
                    </div>
                    <h4 class="mb-3"><?= $item['title'] ? $item['title'] : '';?></h4>
                    <p class="mb-4"><?= $item['content'] ? $item['content'] : '';?></p>
                    <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded-pill py-1 px-4"><?= $appointment['name'] ? $appointment['name'] : '';?></p>
                <h1 class="mb-4"><?= $appointment['title'] ? $appointment['title'] : '';?></h1>
                <p class="mb-4"><?= $appointment['content'] ? $appointment['content'] : '';?></p>
                <?php
                    foreach($elements as $elem):
                ?>
                <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="<?= $elem['icon'] ? $elem['icon'] : '';?>"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2"><?= $elem['text'] ? $elem['text'] : '';?></p>
                        <h5 class="mb-0"><?= $elem['contact'] ? $elem['contact'] : '';?></h5>
                    </div>
                </div>
                <?php  endforeach;?>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                <?php echo do_shortcode('[contact-form-7 id="74bbb95" title="form"]') ;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->




<?php get_footer();?>