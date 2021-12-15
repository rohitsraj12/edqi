<?php

    $page_title = "Home";
    $page_meta_key = "";
    $page_meta_description = "";


    // config file
    include('../private/config/url.config.php');
    include('../private/required/header.inc.php');

?>
        <div class="body__banner">
            <div class="wrap__banner">
                <div class="banner__image">
                    <div class="desktop__banner full__banner">
                        <img src="assets/img/banner/slider-02.jpg" alt="edqi bangalore">
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
                <section class="section__services">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <article>
                                    <figure>
                                        <img src="" alt="">
                                    </figure>
                                </article>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- end body container -->


<?php
    include('../private/required/footer.inc.php');
?>
