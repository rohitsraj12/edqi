<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> | EDQI.com</title>
    <meta name="description" content="">
    <meta name="keywords" content="<?php if(empty($page_meta_key)){echo "edqi";} else {echo $page_meta_key;}; ?>">
    <meta name="author" content="<?php if(empty($page_meta_description)){echo "edqi";} else { echo $page_meta_description;} ?>">
    <meta name="distribution" content="global" />
    <meta http-equiv="content-language" content="en-gb">
    <meta name="city" content="bangalore" />
    <meta name="geo.region" content="IN" />
    <meta name="state" content="Karnataka" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@"/>
    <meta name="twitter:description" content="" />
    <meta name="twitter:keywords" content="">
    <!-- open graph code begins-->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content=" ">
    <meta property="og:url" content="">
    <meta property="business:contact_data:street_address" content="">
    <meta property="business:contact_data:locality" content="Bangalore">
    <meta property="business:contact_data:region" content="Karnataka">
    <meta property="business:contact_data:postal_code" content="">
    <meta property="business:contact_data:country_name" content="India">
    <!-- hide url from search engine -->
    <meta name="robots" content="noindex">
    <!-- google -->
    <meta name="google-site-verification" content="dbrMYSZb_7Ew-Ti8lK9REe6kV3r1nEmLmpbiZL5eM5Q" />
    <link rel="shortcut icon" type="image/png" href="img/fevicon.png" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
</head>
<body>

    <div class="body__wrap">
        <div class="body__header absolute__header" data-aos="fade-down"
            data-aos-offset="100"
            data-aos-delay="50"
            data-aos-duration="2000"
            data-aos-easing="ease-in-out">
                        
            <div class="hamburger">
                <svg viewBox="0 0 100 80" width="40" height="40">
                    <rect width="80" height="5"></rect>
                    <rect y="20" width="80" height="5"></rect>
                    <rect y="40" width="80" height="5"></rect>
                </svg>
            </div>
            <!-- end hamburger -->
            <header class="wrap__container">
                <div class="header__brand">
                    <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/img/logo/logo-black-header.png" alt="">
                    </a>
                </div>
                <!-- end header brand -->

                <nav class="header__nav">
                    <ul class="main__nav">
                        <li class="nav__list"><a href="<?php echo base_url();?>" class="nav__link">Home</a></li>
                        <li class="nav__list">
                            <a class="nav__link">
                                Academic connect  
                                <i class="fa fa-angle-down"></i>
                            </a>    
                            <div class="sub__nav">
                                <ul>
                                    <li class="sub-nav__list">
                                        <a href="<?php echo base_url();?>academic_connect/training_and_global_certifications.php" class="sub-nav__link">
                                            <!-- Training and global certifications -->
                                            Learning and Development Cell
                                        </a>
                                    </li>
                                    <li class="sub-nav__list">
                                        <a href="<?php echo base_url();?>academic_connect/faculty_development_program.php" class="sub-nav__link">
                                            <!-- Training and global certifications -->
                                            Faculty Development Program (FDP)
                                        </a>
                                    </li>
                                    <li class="sub-nav__list">
                                        <a href="<?php echo base_url();?>academic_connect/emerging_technology.php" class="sub-nav__link">
                                            <!-- Collaborations with Institutions -->
                                            Emerging Technology (ET) Club
                                        </a>
                                    </li>
                                    <li class="sub-nav__list">
                                        <a href="<?php echo base_url();?>academic_connect/virtual_internship.php" class="sub-nav__link">
                                            <!-- Collaborations with Institutions -->
                                            Virtual Internship
                                        </a>
                                    </li>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>academic_connect/centre_of_excellence.php" class="sub-nav__link">Centre of Excellence</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__list">
                            <a class="nav__link">
                               Industry Connect
                                <i class="fa fa-angle-down"></i>
                            </a>    
                            <div class="sub__nav">
                                <ul>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>industry_connect/gis_training_and_certification.php" class="sub-nav__link">GIS Training and Certification</a></li>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>industry_connect/consultancy_services.php" class="sub-nav__link">Consultancy Services</a></li>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>industry_connect/startup_and_incubation.php" class="sub-nav__link">Startup and Incubation</a></li>
                                    <!-- <li class="sub-nav__list"><a href="<?php echo base_url();?>industry_connect/" class="sub-nav__link">Internship</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Community Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Startup and Incubation</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Social Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Career Connect</a></li> -->
                        

                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>community_connect.php" class="nav__link">Community Connect</a></li> -->
                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>startup_and_incubation.php" class="nav__link">Startup and Incubation</a></li> -->
                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>social_connect.php" class="nav__link">Social Connect</a></li> -->
                        <li class="nav__list"><a href="<?php echo base_url();?>career_connect.php" class="nav__link">Career Connect</a></li>
                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>services/" class="nav__link">Services</a></li> -->
                        <!-- <li class="nav__list"><a href="<?php echo base_url();?>about_us/" class="nav__link">About Us</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>contact_us.php" class="nav__link">Contact Us</a></li> -->
                    </ul>
                    <!-- end main nav -->
                </nav>
                <!-- end header nav -->

                <!-- <nav class="header__nav">
                    <ul class="main__nav">
                        <li class="nav__list"><a href="<?php echo base_url();?>" class="nav__link">Home</a></li>
                        <li class="nav__list">
                            <a href="#" class="nav__link">
                                Learning and Development cell  
                                <i class="fa fa-angle-down"></i>
                            </a>    
                            <div class="sub__nav">
                                <ul>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>courses/global_certifications/" class="sub-nav__link">Training and global certifications</a></li>
                                    <li class="sub-nav__list"><a href="<?php echo base_url();?>courses/edqi_certifications/" class="sub-nav__link">Collaborations with Institutions</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Industry Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Community Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Startup and Incubation</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Social Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>courses/" class="nav__link">Career Connect</a></li>
                        <li class="nav__list"><a href="<?php echo base_url();?>about_us/" class="nav__link">About Us</a></li>
                    </ul>
                </nav> -->
                <!-- end header nav -->
            </header>
        </div>
        <!-- end body header -->
