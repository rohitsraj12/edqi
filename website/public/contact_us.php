<?php

    $page_title = "Contact Us";
    $page_meta_key = "";
    $page_meta_description = "";

    // config file
    include('../private/config/url.config.php');
    include('../private/required/header.inc.php');

?>
    <div class="body__banner">
        <div class="wrap__banner">
            <div class="banner__image">
                <div class="desktop__banner other__banner" data-aos="fade-in"
                    data-aos-offset="100"
                    data-aos-delay="50"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in">
                    <img src="<?php echo base_url();?>assets/img/banner/slider-02.jpg" alt="edqi bangalore">
                </div>
                <!-- end desktop banner -->
                <div class="mobile__banner full__banner">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end body banner -->

    <div class="body__container">
        <main>

        </main>
    </div>

<?php
    include('../private/required/footer.inc.php');
?>
