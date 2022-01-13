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
                    <img src="<?php echo base_url();?>assets/img/banner/contact_us.jpg" alt="edqi bangalore">
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
        
        <div class="bread__crumb bg-light py-2 border-bottom">
            <div class="container">
                <ul>
                    <li class="bread__crumb-parent">
                        <a href="<?php echo base_url();?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="bread__crumb-parent">
                        Contact us
                    </li>
                </ul>
            </div>
        </div>

        
        <main>
            <section class="section__contact">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        
                    </div>
                    <div class="col-12 col-sm-4"></div>
                    <div class="col-12 col-sm-4"></div>
                </div>
            </section>
        </main>
    </div>

<?php
    include('../private/required/footer.inc.php');
?>
