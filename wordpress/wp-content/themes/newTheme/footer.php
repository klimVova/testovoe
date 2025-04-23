<!-- Footer Start -->
<?php 
    $items = get_field('footer' , 'option');
    $services = get_field('services' , 'option');
    $quiks = get_field('quik' , 'option');
    $elements = $items['adress'];
    $socials = $items['solial'];
    $nqewsletter = $items['nqewsletter'];
    $copy = $items['copy'];
    $links = $services['links'];
    $link_quiks = $quiks['links'];
?>
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4"><?= $items['title'] ? $items['title'] : '';?></h5>
                <?php
                    foreach($elements as $e):
                ?>
                <p class="mb-2"><i class="<?= $e['icon'] ? $e['icon'] : '';?>"></i><?= $e['text'] ? $e['text'] : '';?></p>
                <?php endforeach;?>        
                <div class="d-flex pt-2">
                <?php
                    foreach($socials as $el):
                ?>
                    <a class="btn btn-outline-light btn-social rounded-circle" href="<?= $el['link'] ? $el['link'] : '';?>"><i class="<?= $el['icon'] ? $el['icon'] : '';?>"></i></a>
                <?php endforeach;?>          
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                
                <h5 class="text-light mb-4"><?= $services['title'] ? $services['title'] : '';?></h5>
                <?php  
                    foreach($links as $link):
                ?>
                <a class="btn btn-link" href="<?= $link['link'] ? $link['link'] : '';?>"><?= $link['name'] ? $link['name'] : '';?></a>
                <?php endforeach;?>        
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4"><?= $quiks['title'] ? $quiks['title'] : '';?></h5>
                <?php  
                    foreach($link_quiks as $l):
                ?>
                <a class="btn btn-link" href="<?= $l['link'] ? $l['link'] : '';?>"><?= $l['name'] ? $l['name'] : '';?></a>
                <?php endforeach;?>  
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4"><?= $nqewsletter['title'] ? $nqewsletter['title'] : '';?></h5>
                <p><?= $nqewsletter['content'] ? $nqewsletter['content'] : '';?></p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#"><?= $copy['info_copy'] ? $copy['info_copy'] : '';?>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <?= $copy['dev'] ? $copy['dev'] : '';?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->




<style>
    .current_page_item a{
        color: var(--primary) !important;
    }
    .menu ul{
        display: flex;
    }
    .page_item{
        list-style: none;
    }
    .page_item a {
        margin-right: 30px;
        padding: 25px 0;
        color: var(--dark);
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        outline: none;
    }

    .breadcrumb{
        background-color: transparent !important;
    }
</style>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/1.0.0/css/bootstrap-datetimepicker.min.css" integrity="sha512-yhWjVjH1yCkclDS7v5gpZuJueQkijw0nXLe9+H6ZkLyedIXJCI18yFN/YDQLwMlT9qWi0OWQtjJUdMw+freKRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js" integrity="sha512-+UiyfI4KyV1uypmEqz9cOIJNwye+u+S58/hSwKEAeUMViTTqM9/L4lqu8UxJzhmzGpms8PzFJDzEqXL9niHyjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php wp_footer(); ?>
</body>

</html>