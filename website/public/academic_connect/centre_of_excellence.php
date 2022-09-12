<?php
    $page_title = "Centre of Excellence | Global certifications";
    $page_meta_key = "";
    $page_meta_description = "";
    $course_name = "Centre of Excellence";
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
                <div class="wrap__container">
                    <div class="row">
                        <div class="col-12">
                            <section>
                                <header class="section__header text-center pt-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                    <h2 class="primary-header">
                                    	Centre of Excellence (COE)
                                    </h2>
                                    <p class="section__sub-header">
                                        Excellence at its best
                                    </p>
                                </header>

                                <div class="row pb-5">
                                    <!-- <div class="col-md-3">
                                        <div class="section__about-right sticky-top pt-5"  data-aos="fade-up"
                                        data-aos-offset="100"
                                        data-aos-delay="50"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                            <section class="pt-3">
                                                <article>
                                                        <ul class="side__nav">
                                                            <li><a href="#Objective-of-COE">Objective of COE</a></li>
                                                            <li><a href="#Activities-conducted">Activities conducted</a></li>
                                                            <li><a href="#Location-details">Location details</a></li>
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
                                        <section class="section__about-left" id="Objective-of-COE">
                                            <article>
                                                <div class="section__body">
                                                    <div data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header">
                                                            What is COE?
                                                        </h2>

                                                        <p>
                                                            Establishment by EDQI of a research centre that will benefit students and institutes. 
                                                        </p>

                                                        <h2 class="secondary__header">
                                                            Working of COE
                                                        </h2>
                                                        <p>
                                                            1.	Student Enrolment
                                                            <br>
                                                            2.	Training
                                                            <br> 
                                                            3.	Mock test
                                                            <br>
                                                            4.	 Internship
                                                            <br>
                                                            5.	Global Certification
                                                            <br>
                                                            6.	Placement Drive
                                                        </p>
                                                        
                                                        <h2 class="secondary__header">
                                                            COE offered by EDQI (To be displayed with titles of COE)
                                                        </h2>
                                                        <p>
                                                            1.	ATAL – Advanced Technologies and learning focuses on Mixed reality, AI and Machine Learning, VR & AR.
                                                            <br>
                                                            2.	RISE – Research and Innovation in Smart and Emerging Technologies, focuses on IOT & AI
                                                            <br> 
                                                            3.	CEAT – Centre of Excellence in Advanced Technologies, focuses on Electronics & Communication and CS. 
                                                            <br>
                                                            4.	CAT – Centre for Advanced Technologies, focuses on Aerospace and Geosciences.
                                                            <br>
                                                            5.	AIGIS – Centre of Excellence in AI & GIS
                                                        </p>
                                                        
                                                        <h2 class="secondary__header">
                                                            Benefits for Students
                                                        </h2>
                                                        <p>
                                                            1.	Providing courses in a timely manner.   
                                                            <br>
                                                            2.	Training will be provided at an affordable price at the centre.
                                                        </p>

                                                        <h2 class="secondary__header">
                                                            Benefits for Institution
                                                        </h2>
                                                        <p>
                                                            1.	State of Art lab will be set-up and managed by EDQI   
                                                            <br>
                                                            2.	The Human resource required for all the main activities will be taken care by EDQI.
                                                        </p>
                                                        

                                                        <!-- <h2 class="secondary__header">
                                                            Working of the Centre – Basic Operational Structure 
                                                        </h2>

                                                        <h2 class="secondary__header">
                                                            Collaboration with Colleges
                                                        </h2>

                                                        <h2 class="secondary__header">
                                                            Real time images clicked by EDI 
                                                        </h2> -->
                                                    </div>
                                                </div>
                                            </article>
                                        </section>
                                        <!-- <section class="section__about-left pt-5" id="Activities-conducted">
                                            <article>
                                                <div class="section__body">
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header pt-3 text-center">
                                                            Activities conducted 
                                                        </h2>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                        Academic support
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                            Specifically for students at risk of diminished academic achievement, a variety of strategies have been developed to provide extra support.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                        Feedback mechanism
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                        They connect your current actions with your future results.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                        Placement and internships
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                            Placement in the right place increases employee morale and efficiency and improve the relationship between employees and their employers.
                                                                        </li>
                                                                        <li>
                                                                            As an intern you will be exposed to new tasks and learn the skills needed to complete them.
                                                                        </li>
                                                                        <li>
                                                                            You will also gain experience with technology, people and projects that may ultimately help you in your career.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                        Dissertation work and publications
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                        To assess the independent research skills students have developed during their time at university, so their grades can be determined based on their assessment.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                        Copyrights and IPR
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                        The concept of Intellectual Property Rights (IPR) encourages and stimulates the creation of talented creators.
                                                                        </li>
                                                                        <li>
                                                                            It is the usage of an original name, symbol, logo or design for commercial purposes.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="section__block pb-3">
                                                                    <h2>
                                                                    Assets and liabilities
                                                                    </h2>
                                                                    <ul class="found__points">
                                                                        <li>
                                                                        Liabilities deplete your company’s equity while assets increase it.
                                                                        </li>
                                                                        <li>
                                                                        Therefore, the greater the difference between your assets and liabilities, the stronger your company’s financial health will be.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                </div>
                                            </article>
                                        </section> -->
                                        <!-- <section class="section__about-left pt-5" id="Location-details">
                                            <article>
                                                <div class="section__body">
                                                    <div  data-aos="fade-up"
                                                        data-aos-offset="100"
                                                        data-aos-delay="50"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        <h2 class="secondary__header pt-3">
                                                            Location details
                                                        </h2>
                                                       
                                                        <ul>
                                                            <li>
                                                                1.	In Progress at Dayananda Sagar Academy of Technology and Management
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </article>
                                        </section> -->
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
    include('../private/required/footer.inc.php');
?>