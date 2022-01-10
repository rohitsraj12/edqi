<?php
    $page_title = "About Us";
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
                        About us
                    </li>
                </ul>
            </div>
        </div>

        <main>
            <section class="section__about-us py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <section>
                                <header class="section__header text-center">
                                    <h2 class="primary-header">
                                        Some words about Atena
                                    </h2>
                                    <p class="section__sub-header">
                                        Cum doctus civibus efficiantur in imperdiet deterruisset.
                                    </p>
                                </header>

                                <div class="row">
                                    <div class="col-md-8">
                                        <section class="section__about-left">
                                            <article>
                                                <div class="section__body">
                                                    <h2>
                                                        Founded
                                                    </h2>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ratione expedita explicabo, veritatis alias ducimus molestias temporibus voluptas reiciendis dignissimos.
                                                    </p>
                                                    <p>
                                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae accusantium est commodi tenetur ratione nesciunt, expedita voluptates dignissimos. Sed quibusdam nihil beatae eligendi? Laborum aut mollitia magni, minima nobis tempora!
                                                    </p>
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
        </main>
    </div>
    <!-- end body container -->

<?php
    include('../private/required/footer.inc.php');
?>