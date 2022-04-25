<?php
    $page_title = "About Us";
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
                    <img src="<?php echo base_url();?>assets/img/banner/contact_us_sm.jpg" alt="">
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
                                <header class="section__header text-center py-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                    <h2 class="primary-header">
                                        Some words about EDQI
                                    </h2>
                                    <!-- <p class="section__sub-header">
                                        Cum doctus civibus efficiantur in imperdiet deterruisset.
                                    </p> -->
                                </header>

                                <div class="row pb-5">
                                    <div class="col-md-8">
                                        <section class="section__about-left">
                                            <article>
                                                <div class="section__body">
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header">
                                                            EDQI Journey
                                                        </h2>
                                                        <p>
                                                            EDQI was created as a result of wanting to provide the required training to the students with the aim to meet their needs. In 2021, the founders had a discussion regarding the lack of communication between the Students and the Industry. The idea was now to bridge the gap between the students and the Industry.    
                                                        </p>
                                                        <p>
                                                            It was founded by Bohith Surthy, Harsha Narayana and Manas Yadav in 2021. The founders incorporated the company in Bangalore, Karnataka with the name “Surthy Edutech Private Limited” with the brand name “Edqi”.
                                                        </p>

                                                        <!-- <ul class="d-sm-flex flex-sm-wrap found__points mb-3">
                                                            <li class="w-50">Lorem, ipsum dolor. </li>
                                                            <li class="w-50">Lorem, ipsum dolor.</li>
                                                            <li class="w-50">Lorem ipsum dolor sit amet.</li>
                                                            <li class="w-50">Lorem, ipsum dolor.</li>
                                                            <li class="w-50">Lorem ipsum dolor sit amet.</li>
                                                            <li class="w-50">Lorem ipsum dolor si.</li>
                                                        </ul> -->
                                                    </div>
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header pt-3">
                                                            EDQI
                                                        </h2>
                                                        <p>
                                                            EDQI is an Indian-based company that focuses on making education a vital force to groom the future leaders of our upcoming generation.
                                                        </p>
                                                        <p>
                                                            We as a company provide full-fledged skill-based training to the students and make them future - ready. We give industrial exposure to students and make them competent to face the competitive world outside. We distinguish ourselves by providing innovative and engaging training that is pragmatic and effective. EDQI aims to extemporize the skillset of the students and provides them with a gateway to the industry.
                                                        </p>
                                                        <p>
                                                        We desire to inspire the future generation to upscale their practical knowledge and become the better versions of themselves. We as a company want to transform the limited classroom knowledge of the students into an Industrial competent skillset.
                                                        </p>
                                                    </div>
                                                    
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header pt-3">
                                                            What to Expect from EDQI?
                                                        </h2>
                                                        <p>
                                                            The main aim of EDQI is to provide the below mentioned support to the students all over.
                                                        </p>
                                                       
                                                        <ul class="d-sm-flex flex-sm-wrap found__points mb-3">
                                                            <li class="w-50">Training with Global Certifications </li>
                                                            <li class="w-50">Internships</li>
                                                            <li class="w-50">Start-up Incubation</li>
                                                            <li class="w-50">Projects</li>
                                                            <li class="w-50">Placements</li>
                                                        </ul>
                                                    </div>
                                                    <!--<div data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header pt-3">
                                                            Founders and Director
                                                        </h2>
                                                         <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ratione expedita explicabo, veritatis alias ducimus molestias temporibus voluptas reiciendis dignissimos.
                                                        </p> 
                                                    </div>-->
                                                    

                                                    
                                                </div>
                                            </article>
                                        </section>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="section__about-right p-3 border mb-2 bg-light"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <section>
                                                <article>
                                                    <header class="secondary__header-sub ">
                                                       Our Mission
                                                    </header>
                                                    <div class="section__about-right-body">
                                                        <p>
                                                        To Inspire, Ignite and Instill the future generation towards their intellectual, emotional, and ethical well-being.    
                                                        </p>

                                                        <!-- <ul>
                                                            <li><span class="num__circle">1</span> Lorem ipsum dolor sit amet.</li>
                                                            <li><span class="num__circle">2</span> Lorem ipsum dolor sit amet consectetur.</li>
                                                            <li><span class="num__circle">3</span> Lorem, ipsum dolor.</li>
                                                            <li><span class="num__circle">4</span> Lorem ipsum dolor sit amet.</li>
                                                            <li><span class="num__circle">5</span> Lorem ipsum dolor sit amet consectetur.</li>
                                                        </ul> -->
                                                    </div>
                                                </article>
                                            </section>
                                        </div>

                                        <div class="section__about-right p-3 border bg-light"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <section>
                                                <article>
                                                    <header class="secondary__header-sub ">
                                                       Our Vision
                                                    </header>
                                                    <div class="section__about-right-body">
                                                        <p>
                                                            To aspire the young and bold minds to invest and thrive knowledge. Which engirdle Advancement, Ample Learning, Wishful Thinking, Cardinal Virtue and Solidarity.    
                                                        </p>

                                                        <!-- <ul>
                                                            <li><span class="num__circle">1</span> Lorem ipsum dolor sit amet.</li>
                                                            <li><span class="num__circle">2</span> Lorem ipsum dolor sit amet consectetur.</li>
                                                            <li><span class="num__circle">3</span> Lorem, ipsum dolor.</li>
                                                            <li><span class="num__circle">4</span> Lorem ipsum dolor sit amet.</li>
                                                            <li><span class="num__circle">5</span> Lorem ipsum dolor sit amet consectetur.</li>
                                                        </ul> -->
                                                    </div>
                                                </article>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us section -->

            <!-- <section class="section__about-service"  data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="50"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="container border-bottom pb-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <section>
                                <article>
                                    <figure class="border p-1">
                                        <img class="w-100" src="<?php echo base_url();?>assets/img/service/01.jpg" alt="">
                                    </figure>
                                    <header>
                                        <h1 class="secondary__header mb-0">
                                            Service one
                                        </h1> 
                                    </header>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, nemo eveniet. Aspernatur placeat nihil non ab fuga, corrupti magni rerum.
                                    </p>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <section>
                                <article>
                                    <figure class="border p-1">
                                        <img class="w-100" src="<?php echo base_url();?>assets/img/service/01.jpg" alt="">
                                    </figure>
                                    <header>
                                        <h1 class="secondary__header mb-0">
                                            Service two
                                        </h1> 
                                    </header>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, nemo eveniet. Aspernatur placeat nihil non ab fuga, corrupti magni rerum.
                                    </p>
                                </article>
                            </section>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <section>
                                <article>
                                    <figure class="border p-1">
                                        <img class="w-100" src="<?php echo base_url();?>assets/img/service/01.jpg" alt="">
                                    </figure>
                                    <header>
                                        <h1 class="secondary__header mb-0">
                                            Service three
                                        </h1> 
                                    </header>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, nemo eveniet. Aspernatur placeat nihil non ab fuga, corrupti magni rerum.
                                    </p>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- end section about service -->

            <!-- <section class="section__about-gallery">

                <div class="wrap__gallery">    
                    <div class="gallery__block">
                        <article>
                            <header>
                                Gallery
                            </header>
                        </article>
                    </div>
                    <div class="gallery__block">
                        <figure>
                            <img src="assets/img/gallery/001.jpg" alt="">
                        </figure>
                    </div>
                    <div class="gallery__block">
                        <figure>
                            <img src="assets/img/gallery/001.jpg" alt="">
                        </figure>
                    </div>
                    <div class="gallery__block">
                        <figure>
                            <img src="assets/img/gallery/001.jpg" alt="">
                        </figure>
                    </div>

                </div>
            </section> -->
            <!-- end section about gallery -->

            
            <section class="section__testimonials py-5 border-top">
                <section class="container py-4">
                    <header class="section__header mb-2" data-aos="fade-up"
                                    data-aos-offset="100"
                                    data-aos-delay="50"
                                    data-aos-duration="1000"
                                    data-aos-easing="ease-in-out">
                        <h4 class="primary-header text-center">
                            Team Details 
                        </h4>
                        <!-- <h6 class="text-center section__sub-header">
                            Cum doctus civibus efficiantur in imperdiet deterruisset.
                        </h6> -->
                    </header>
                    <!-- end section header -->
                </section>
                <section class="section__body pb-5" data-aos="fade-up"
                    data-aos-offset="100"
                    data-aos-delay="50"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="container w-75">
                        <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="faculty__wrap" data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                            <div class="">
                                                                <article class="row">
                                                                    <div class="col-sm-2 pb-3">
                                                                        <figure>
                                                                            <img class="w-100" src="<?php echo base_url();?>assets/img/faculty/bohit.jpg" alt="">
                                                                        </figure>
                                                                    </div>
                                                                    <div class="col-sm-10">
                                                                        <h2 class="pb-0">
                                                                            BOHITH SURTHY K
                                                                        </h2>
                                                                        <p class="mb-3">
                                                                            CEO
                                                                        </p>
                                                                        <p>
                                                                            A passionate GIS engineer and a dynamic entrepreneur who brings a relentless drive for innovation and a passion for personalized services for startups and social commitments is ready to race, DNA of our company.
                                                                        </p>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="faculty__wrap"  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="100"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <figure>
                                                                        <img class="w-100" src="<?php echo base_url();?>assets/img/faculty/harsha.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <h2>
                                                                        Sri Harsha Naryana
                                                                    </h2>
                                                                    <p class="mb-3">
                                                                        COO
                                                                    </p>
                                                                    <p>
                                                                        A Vibrant entrepreneur and an entrepreneur with expertise in the domain of IT and EDtech is in the realm of our core operations.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="faculty__wrap"  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="150"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <div class="row">
                                                                <div class="col-sm-4">
                                                                    <figure>
                                                                        <img class="w-100" src="<?php echo base_url();?>assets/img/faculty/manas.jpg" alt="">
                                                                    </figure>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <h2>
                                                                        Manas N Yadav
                                                                    </h2>
                                                                    <p class="mb-3">
                                                                        CTO
                                                                    </p>
                                                                    <p>
                                                                    Our Group Technical Officer since 2019. He is an experienced technologist with a track record of designing, managing, and implementing innovative technical solutions.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                    </div>
                </section>
            </section>
            <!-- end section testimonials -->
        </main>
    </div>
    <!-- end body container -->

<?php
    include('../../private/required/footer.inc.php');
?>