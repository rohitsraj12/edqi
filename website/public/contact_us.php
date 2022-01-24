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
        
        <div class="bread__crumb bg-light py-2 border-bottom" data-aos="fade-in"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
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
            <section class="section__contact py-5">
                <div class="container">
                    <header class="section__header text-center pt-5 pb-4" data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                        <h2 class="primary-header">
                            Contact Us
                        </h2>
                        <p class="section__sub-header">
                            Cum doctus civibus efficiantur in imperdiet deterruisset.
                        </p>
                    </header>
                    <!-- <div class="row text-center contact-us__info">
                        <div class="col-12 col-sm-4">
                            <section>
                                <article>
                                    <figure>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <a href="" class="contact-us__info-text">
                                            999 999 9999
                                        </a>
                                    </header>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-4">
                            <section>
                                <article>
                                    <figure>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <a href="" class="contact-us__info-text">
                                            email@mail.com
                                        </a>
                                    </header>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-4">
                            <section>
                                <article>
                                    <figure>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <address>
                                            <ul>
                                                <li  class="contact-us__info-text">22, Lorem, ipsum,</li>
                                                <li  class="contact-us__info-text">Lorem, ipsum,</li>
                                                <li  class="contact-us__info-text">Bangalore 998998</li>
                                            </ul>
                                        </address>
                                    </header>
                                </article>
                            </section>
                        </div>
                    </div> -->
                    
                    <div class="row text-center contact-us__two">
                        <div class="col-12 col-sm-4">
                            <section>
                                <article data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                    <figure>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <ul>
                                            <li class="contact-us__info-two-text-header">
                                                Call Us                    
                                            </li>
                                            <li>
                                                <a href="" class="contact-us__info-two-text">
                                                    999 999 9999
                                                </a>
                                            </li>
                                        </ul>
                                    </header>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-4">
                            <section>
                                <article data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                    <figure>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <ul>
                                            <li class="contact-us__info-two-text-header">
                                                Email Us                    
                                            </li>
                                            <li>
                                                <a href="" class="contact-us__info-two-text">
                                                    email@mail.com
                                                </a>
                                            </li>
                                        </ul>
                                        
                                    </header>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-4">
                            <section>
                                <article data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                    <figure>
                                        <i class="fa fa-map" aria-hidden="true"></i>
                                    </figure>
                                    <header>
                                        <address>
                                            <ul>
                                                <li  class="contact-us__info-two-text-header">Visit Our Office</li>
                                                <li  class="contact-us__info-two-text">Lorem, ipsum, Bangalore 998998</li>
                                            </ul>
                                        </address>
                                    </header>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__contact-form mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="wrap__contact-us-form border p-5 bg-light" data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                <header class="secondary__header text-center">
                                    Enquiry Form
                                </header>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="name">
                                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone" aria-describedby="phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" aria-describedby="email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-0 form-chec">
                                        <div id="" class="form-text pb-2">We'll never share your contact detail with anyone else.</div>
                                        <button type="submit" class="btn btn__primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-md-5">
                            <section>
                                <article class="article__map" data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                    <header class="secondary__header">
                                        Find Us on Map
                                    </header>
                                    <div class="google__map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.5203611748527!2d77.55828669360659!3d13.07828375515259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae235c26ea6687%3A0x4e371d1efdf3c0cd!2sEDQI!5e0!3m2!1sen!2sin!4v1643012937174!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php
    include('../private/required/footer.inc.php');
?>
