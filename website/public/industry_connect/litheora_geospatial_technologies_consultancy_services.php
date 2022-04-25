<?php
    $page_title = "Litheora Geospatial Technologies consultancy services | Global certifications";
    $page_meta_key = "";
    $page_meta_description = "";
    $course_name = "Litheora Geospatial Technologies consultancy services";
    // config file
    include('../../private/config/url.config.php');
    include('../../private/required/header.inc.php');
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
                    <img src="<?php echo base_url();?>assets/img/banner/contact_us_sm.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end body banner -->

    <div class="body__container"data-aos="fade-in"
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
                    <!-- <li class="bread__crumb-parent">
                        <a href="<?php echo base_url();?>global_certifications/">
                            Global Certifications
                        </a>
                    </li> -->
                    <li class="bread__crumb-parent">
                        <?php echo $course_name;?>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end bread__crumb -->

        <section class="section__about-us py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <section>
                                <header class="section__header text-center pb-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                    <h2 class="primary-header">
                                        Litheora Geospatial Technologies consultancy services
                                    </h2>
                                    <!-- <p class="section__sub-header">
                                        Cum doctus civibus efficiantur in imperdiet deterruisset.
                                    </p> -->
                                </header>

                                <div class="row pb-5">
                                    <div class="col-md-3">
                                        <!-- <div class="section__about-right sticky-top pt-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <section class="pt-3">
                                                <article>
                                                        <ul class="side__nav">
                                                            <li><a href="#MoU’s">Details of MoU’s</a></li>
                                                            <li><a href="#tie-ups">Details of tie-ups</a></li>
                                                            <li><a href="#partners">Institutional partners</a></li>
                                                            <li><a href="#activities-conducted">Activities conducted in Institutions</a></li>
                                                        </ul>
                                                </article>
                                            </section>
                                        </div> -->

                                        <!-- <div class="section__about-right p-3 border bg-light"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <section>
                                                <article>
                                                    
                                                </article>
                                            </section>
                                        </div> -->
                                    </div>
                                    <div class="col-md-12">
                                        <section class="section__about-left" id="MoU’s">
                                            <article>
                                                <div class="section__body">
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <!-- <h2 class="secondary__header text-center">
                                                            MOU with Dayananda Sagar Academy of Technology and Management.
                                                        </h2> -->
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="section__block pb-3">
                                                                    <!-- <h2>
                                                                        Details of MoU’s:
                                                                    </h2>
                                                                    <p>
                                                                        A Memorandum of Understanding with Dayananda Sagar Academy of Technology and Management was signed for the following:
                                                                    </p> -->
                                                                    <ul class="found__points">
                                                                        <li>
                                                                            Details regarding all the Industrial Works taken up till now under Litheora.
                                                                        </li>
                                                                        <li>Real-time pictures and Brief report.</li>
                                                                        <li>Projects completed.</li>
                                                                        <li>Projects that are in pipeline.</li>
                                                                        <li>Collaborations with Industries details.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </section>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us section -->
        </main>
    </div>
    <!-- end body container -->

<?php
    include('../../private/required/footer.inc.php');
?>