<?php
    $page_title = "Resume Builder";
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
    <section class="pt-5">
        <div class="container pt-5">
            <header class="text-center">
                <h2>
                    Resume Builder
                </h2>
            </header>

            <section class="form border p-5 mb-5 bg-light">
                <form action="templates/temp_1.php" method="POST">
                    <h4>
                        Basic Info
                    </h4>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="name">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Address</label>
                                <input type="email" class="form-control" id="email" name="address" aria-describedby="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Object</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="object" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>
                        Skill set
                    </h4>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Code skill</label>
                                <input type="text" class="form-control" id="name" name="code_skill" aria-describedby="name">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Database</label>
                                <input type="text" class="form-control" id="phone" name="database" aria-describedby="phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Framework</label>
                                <input type="text" class="form-control" id="phone" name="framework" aria-describedby="phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Tools</label>
                                <input type="email" class="form-control" id="email" name="tool" aria-describedby="email">
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 form-chec">
                        <!-- <div id="" class="form-text pb-2">We'll never share your contact detail with anyone else.</div> -->
                        <button type="submit" class="btn btn__primary" name="submit">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </section>
    
<?php
    include('../../private/required/footer.inc.php');
?>