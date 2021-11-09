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
                        <img src="" alt="">
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
                <h4 class="primary-header">
                    about
                </h4>
            </main>
        </div>
        <!-- end body container -->


<?php
    include('../private/required/footer.inc.php');
?>