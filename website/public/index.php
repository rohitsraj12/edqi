<?php
    $page_title = "Home";
    $page_meta_key = "";
    $page_meta_description = "";
    
    // config file
    include('private/config/url.config.php');
    include('private/required/header.inc.php');
?>
        <div class="body__banner">
            <div class="wrap__banner">
                <div class="banner__image">
                    <div class="desktop__banner full__banner" data-aos="fade-in"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in">
                        <img src="<?php echo base_url();?>assets/img/banner/slider-02.jpg" alt="edqi bangalore">
                    </div>
                    <!-- end desktop banner -->

                    <div class="mobile__banner full__banner">
                        <img src="<?php echo base_url();?>assets/img/banner/slider-02-sm.jpg" alt="">
                    </div>
                </div>
                <!-- end banner image -->
            </div>
            <!-- end wrap banner -->
        </div>
        <!-- end body banner -->

        <div class="body__container">
            <main>
                <section class="section__services mb-5 d-none">
                    <div class="home__section-services" data-aos="fade-in"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="container">

                            <div class="row">
                                <div class="col-sm-4">
                                    <article data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>
                                            <img class="w-100" src="<?php echo base_url();?>assets/img/home/service_1.jpg" alt="">
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>
                                            <img class="w-100" src="<?php echo base_url();?>assets/img/home/service_2.jpg" alt="">
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>
                                            <img class="w-100" src="<?php echo base_url();?>assets/img/home/service_3.jpg" alt="">
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- end home section services -->
                    </div>
                </section>
                <!-- end section services -->

                <section class="section__features py-5 mt-5">
                    <div class="container">
                        <header class="section__header mb-5" data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                            <h4 class="primary-header text-center">
                                EDQI core features 
                            </h4>
                            <h6 class="text-center section__sub-header">
                                Transforming education for a better future
                            </h6>
                        </header>
                    </div>
                    <!-- end section header -->

                    <div class="section__body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img width="70px" src="<?php echo base_url();?>assets/img/icons/smart_learning.svg" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Smart Learning</h2> 
                                                </header>
                                                <p>
                                                A technology-enhanced, hands-on-learning experience on campuses and in organizations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img src="<?php echo base_url();?>assets/img/icons/teachers.svg" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Qualified Trainers</h2> 
                                                </header>
                                                <p>
                                                    Exceptional learning solutions provided by highly qualified trainers.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img src="<?php echo base_url();?>assets/img/icons/advanced_practices.svg" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Advanced Practices</h2> 
                                                </header>
                                                <p>
                                                Improved teaching methods for better and easier learning.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img src="<?php echo base_url();?>assets/img/icons/certificate.svg" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Certification</h2> 
                                                </header>
                                                <p>
                                                Globally certified by recognized institutions and industries.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Advanced Practice</h2> 
                                                </header>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem est nulla dolorem nam, necessitatibus saepe. Omnis voluptas eos nihil dolorum quia commodi cum, eaque culpa a quam et est quod?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section__block" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <div class="d-flex">
                                            <div class="icon__left">
                                                <figure>
                                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                                </figure>
                                            </div>

                                            <div class="content__right">
                                                <header>
                                                    <h2 class="secondary__header">Research</h2> 
                                                </header>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem est nulla dolorem nam, necessitatibus saepe. Omnis voluptas eos nihil dolorum quia commodi cum, eaque culpa a quam et est quod?
                                                </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end section body -->
                </section>
                <!-- end section features -->

                <section class="section__focused py-5">
                    <section class="container">
                        <header class="section__header mb-5" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                            <h4 class="primary-header text-center">
                                EDQI focuses On 
                            </h4>
                            <!-- <h6 class="text-center section__sub-header">
                                Cum doctus civibus efficiantur in imperdiet deterruisset.
                            </h6> -->
                        </header>
                    </section>
                    <!-- end section header -->
                    <div class="section__body">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="section__block" data-aos="fade-right"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <img class="w-100" src="<?php echo base_url();?>assets/img/home/features.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <section class="section__focus-left">
                                        <article data-aos="fade-right"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <header>
                                                <h3 class="secondary__header">
                                                    1. Students growth
                                                </h3>
                                            </header>
                                            <p>
                                            It is our goal to provide all the students with the best opportunities for future growth. As a part of the process of planning for instruction and assessment, students set their goals and reflect on their progress. Student growth is a substantial factor in evaluating teachers, allowing teachers to help students with their needs. Student growth refers to a change in student achievement.
                                            </p>
                                        </article>
                                        
                                        <article data-aos="fade-left"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <header>
                                                <h3 class="secondary__header">
                                                    2. The Best Way to Learn
                                                </h3>
                                            </header>
                                            <p>
                                            In order to maintain the quality of our learning and make it simple for individuals to understand, we ensure to provide the most updated methods and technologies. Innovation is the key to learning, so we include new technologies, innovative ideas and strategic thinking. We also use practices that have demonstrated a high level of effectiveness and are used throughout the entire learning process.
                                            </p>
                                        </article>
                                        <article data-aos="fade-right"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <header>
                                                <h3 class="secondary__header">
                                                    3. Learn from the Best 
                                                </h3>
                                            </header>
                                            <p>
                                            We believe in lifelong learning and hence provide learning solutions across the spectrum from K-12 Education, Vocational Education, Higher Education, and Corporate Learning.    
                                            </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="col-md-4 d-none">
                                    <section class="section__focus-left">
                                        <article data-aos="fade-left"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <header>
                                                <h3 class="secondary__header">
                                                    3. Best learning solutions
                                                </h3>
                                            </header>
                                            <p>
                                            Since we believe that lifelong learning is essential, we provide solutions across a wide range of learning options. We also prepare our students for corporate life, familiarising them with corporate culture to take them forward.
                                            </p>
                                        </article>
                                        
                                        <article data-aos="fade-left"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <header>
                                                <h3 class="secondary__header">
                                                    4. Interdisciplanary model
                                                </h3>
                                            </header>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sapiente dolorum dicta veritatis rem voluptate, sed dignissimos in molestiae fuga tempore nesciunt laborum doloremque, rerum modi enim ducimus maiores aliquam?
                                            </p>
                                        </article>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end section focus -->

                <!-- <section class="section__academic-connect py-5">
                    <div class="container">
                        <header class="section__header mb-5" data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                            <h4 class="primary-header text-center">
                                Academic Connect
                            </h4>
                            <h6 class="text-center section__sub-header">
                                Cum doctus civibus efficiantur in imperdiet deterruisset.
                            </h6>
                        </header>

                        <div class="section__body">
                            <div class="row">
                                <div class="col-md-4">
                                    <section>
                                        <article class="article__academic-connect">
                                            <figure>
                                                <img class="w-100" src="<?php echo base_url();?>assets/img/home/service_1.jpg" alt="">
                                            </figure>
                                            <header>
                                                <h1>
                                                    Training And GLobal Certification
                                                </h1>
                                                <a href="<?php echo base_url();?>academic_connect/training_and_global_certification.php">Read More</a>
                                            </header>
                                        </article>
                                    </section>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <section class="section__hightlights mt-5" data-aos="fade-in"
                    data-aos-offset="100"
                    data-aos-delay="50"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="wrap__hightlights">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-3">
                                    <article data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>

                                        </figure>
                                        <div class="highlight__body">
                                            <p class="highlight__number">
                                                123
                                            </p>
                                            <h2 class="highlight__name">
                                                Certified Courses
                                            </h2>
                                        </div>
                                    </article>
                                </div>  
                                <div class="col-3">
                                    <article data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>

                                        </figure>
                                        <div class="highlight__body">
                                            <p class="highlight__number">
                                                12121
                                            </p>
                                            <h2 class="highlight__name">
                                                Students Enrolled
                                            </h2>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-3">
                                    <article data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>

                                        </figure>
                                        <div class="highlight__body">
                                            <p class="highlight__number">
                                                27
                                            </p>
                                            <h2 class="highlight__name">
                                                Certified Courses
                                            </h2>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-3">
                                    <article data-aos="zoom-in"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        <figure>

                                        </figure>
                                        <div class="highlight__body">
                                            <p class="highlight__number">
                                                25
                                            </p>
                                            <h2 class="highlight__name">
                                                Specialized teachers
                                            </h2>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- end section hightlights -->

                <!-- <section class="section__testimonials py-5">
                    <section class="container py-4">
                        <header class="section__header mb-2" data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                            <h4 class="primary-header text-center">
                                Testimonials 
                            </h4>
                            <h6 class="text-center section__sub-header">
                                Cum doctus civibus efficiantur in imperdiet deterruisset.
                            </h6>
                        </header>
                    </section>
                    <section class="section__body pb-5" data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="50"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="container">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <blockquote>
                                            <article>
                                                <div class="testimonial__msg pb-4 text-center">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolorem omnis nostrum architecto repellendus distinctio, voluptas sint vero ratione rerum iste quaerat non delectus corrupti inventore consequatur in, nesciunt dignissimos?
                                                    </p>
                                                </div>
                                                <footer class="text-center">
                                                    <cite>
                                                        <h6 class="m-0 pb-2">
                                                            name
                                                        </h6>
                                                        <p>
                                                            Web Development student
                                                        </p>
                                                    </cite>
                                                </footer>

                                            </article>

                                        </blockquote>
                                    </div>
                                    <div class="carousel-item">
                                        <blockquote>
                                            <article>
                                                <div class="testimonial__msg pb-4 text-center">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolorem omnis nostrum architecto repellendus distinctio, voluptas sint vero ratione rerum iste quaerat non delectus corrupti inventore consequatur in, nesciunt dignissimos?
                                                    </p>
                                                </div>
                                                <footer class="text-center">
                                                    <cite>
                                                        <h6 class="m-0 pb-2">
                                                            name
                                                        </h6>
                                                        <p>
                                                            Web Development student
                                                        </p>
                                                    </cite>
                                                </footer>
                                            </article>
                                        </blockquote>
                                    </div>
                                    <div class="carousel-item">
                                        
                                        <blockquote>
                                            <article>
                                                <div class="testimonial__msg pb-4 text-center">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolorem omnis nostrum architecto repellendus distinctio, voluptas sint vero ratione rerum iste quaerat non delectus corrupti inventore consequatur in, nesciunt dignissimos?
                                                    </p>
                                                </div>
                                                <footer class="text-center">
                                                    <cite>
                                                        <h6 class="m-0 pb-2">
                                                            name
                                                        </h6>
                                                        <p>
                                                            Web Development student
                                                        </p>
                                                    </cite>
                                                </footer>

                                            </article>

                                        </blockquote>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </section>
                </section> -->
                <!-- end section testimonials -->

                <!-- <section class="section__partners py-5">
                    <section class="container">
                        <header class="section__header mb-4" data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <h4 class="primary-header text-center">
                                Partners 
                            </h4>
                        </header>
                    </section>
                    <div class="section__body">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                                <div class="col-6 col-sm-3 col-md-2"  data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="50"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                                    <img src="<?php echo base_url();?>assets/img/icons/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- end section partners -->
            </main>
        </div>
        <!-- end body container -->
<?php
    include('private/required/footer.inc.php');
?>
