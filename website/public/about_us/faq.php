<?php
    $page_title = "FAQ";
    $page_meta_key = "";
    $page_meta_description = "";
    // config file
    include('../../private/config/url.config.php');
    include('../../private/required/header.inc.php');

    // http://preview.themeforest.net/item/atena-college-university-and-campus-template/full_screen_preview/13090694?_ga=2.237159488.1949033100.1637125469-719680716.1604380046

    // fonts: https://www.elegantthemes.com/blog/resources/elegant-icon-font

    // rinita's template : https://preview.colorlib.com/#andrea
        // http://eskimo.egemenerd.com/html/index.html?storefront=envato-elements


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

    <div class="body__container" data-aos="fade-in"
        data-aos-offset="100"
        data-aos-delay="50"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out">
        <div class="bread__crumb bg-light py-2 border-bottom">
            <div class="container">
                <ul>
                    <li class="bread__crumb-parent">
                        <a href="<?php echo base_url();?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="bread__crumb-parent">
                        <a href="<?php echo base_url();?>/about_us/">
                            About Us
                        </a>
                    </li>
                    <li class="bread__crumb-parent">
                        FAQ
                    </li>
                </ul>
            </div>
        </div>

        <main>
            <section class="section__about-us pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <section>
                                <header class="section__header text-center py-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                    <h2 class="primary-header">
                                        FAQ
                                    </h2>
                                    
                                </header>
                            </section>
                        </div>
                    </div>

                    <section>
                    <div class="row pb-5">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <section class="section__career">
                                                <article>
                                                    <div class="section__body">
                                                        <div  data-aos="fade-up"
                                                            data-aos-offset="100"
                                                            data-aos-delay="50"
                                                            data-aos-duration="1000"
                                                            data-aos-easing="ease-in-out">

                                                            <div class="accordion pb-5" id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne">
                                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            Question one
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <p class="mb-2">
                                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse incidunt, quaerat temporibus culpa mollitia ab quia nisi nobis necessitatibus totam.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Question two
                                                                    </button>
                                                                    </h2>
                                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <p class="mb-2">
                                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse incidunt, quaerat temporibus culpa mollitia ab quia nisi nobis necessitatibus totam.
                                                                            </p>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Question Three
                                                                    </button>
                                                                    </h2>
                                                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                            <p class="mb-0">
                                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi at molestias ad soluta culpa aliquam numquam modi sequi possimus voluptatibus. Quo, rerum.
                                                                            </p>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           
                                                        </div>
                                                    </div>
                                                </article>
                                            </section>
                                        </div>
                                        
                                        <div class="col-12 col-md-3">
                                            <?php
                                                    include("../aside/aside_one.php");
                                            ?>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                    </section>
                </div>
            </section>
            <!-- end career section -->
        </main>
    </div>
    <!-- end body container -->

<?php
    include('../../private/required/footer.inc.php');
?>