<?php $this->view("new_header", $data); ?>

<style>
    body {
        /* max-width: fit-content;
        overflow-x: hidden; */
    }

    .outer-circle {
        height: 29rem;
        width: 29rem;
        border-radius: 20em;
        background-color: white;
        border: 5px solid rgb(60, 183, 186);
    }

    .wrap {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* animation */

    .pulse {
        animation-duration: 0.5s;
        animation-iteration-count: 1;
    }

    .pulse:hover {
        animation-name: steady;
    }

    @keyframes steady {
        0% {
            transform: scale (1, 1);
        }

        75% {
            transform: scale(0.95, 1.05);
        }
    }
</style>

<section style="margin-top: 0;">
    <div id="carouselExampleControls"
         class="carousel slide"
         data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= ASSETS . THEME ?>images/home/slider/asthetic.jpg"
                     class="d-block w-100 img-fluid"
                     alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= ASSETS . THEME ?>images/home/slider/complete.jpg"
                     class="d-block w-100 img-fluid"
                     alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= ASSETS . THEME ?>images/home/slider/redesign.jpg"
                     class="d-block w-100 img-fluid"
                     alt="...">
            </div>
        </div>
        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"
                  aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section style="margin-top: 0;">
    <div class="container-fluid"
         style="">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12"
                 style="padding: 0 10vh ;">
                <h2 class="display-4">Unfold Luxurious Experience</h2>
                <p class="text-muted">
                    Be it for a luxurious bathroom, kitchen or a spic and span toilet, DSK has a Bathroom and Allied
                    Products that are appropriate for each of your requirement.
                </p>
                <p class="text-muted ">
                    Our Company offers a wide range of Shower Solutions, Bath Fittings, Kitchen Solutions, Allied
                    Products, Sinks and Bath Accessories.
                </p>
                <button class="button">Download Brochure <i class="fa fa-download"></i></button>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-1 gx-0"
                         style="background-color: #eee; height:85vh;"></div>
                    <div class="col gx-0"
                         style="">
                        <div style="background-color: #eee; height: 10vh; "></div>
                        <div style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;">
                            <img src="<?= ASSETS . THEME ?>images/home/home_section_2.jpg"
                                 alt=""
                                 srcset=""
                                 class="img-fluid"
                                 style="max-height: 100vh; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col">
                <div style="height: 10vh; background-color: #eee; width: 30vw; margin: 0 auto"></div>
                <img class="img-fluid""
                src="
                     <?= ASSETS . THEME ?>images/home/home_section_3.jpg"
                     alt=""
                     style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;">
                <div class=""
                     style="height: 10vh; background-color: #eee; width: 30vw; margin: 0 auto"></div>
            </div>
            <div class="col "
                 style="padding: 0 10vh ;">
                <h2 class="display-4">An Innovative Approach</h2>
                <p class="text-muted">DSK has a wide range of bathroom products which are of High Standards, each of
                    which has been
                    designed and evolved through keen market study and 26 Years of Experience. All items are
                    designed with meticulous importance to offer optimum convenience during bathroom planning. Our
                    types of equipment have been gifting a world of elegant bathroom accessories with its
                    high-quality range of sleek, innovative and attractive products. Helping you make your bathroom
                    experience the best.</p>
                <button class="button"><i class="fa fa-chevron-right"></i> Quote Products</button> <br>
                <div class="row mt-5">
                    <div class="col">
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_01.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Biggest Market</p>
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_02.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Being The Best One</p>
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_04.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Happy Customers</p>
                    </div>
                    <div class="col">
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_05.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Professional Outlook</p>
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_05.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Innovative Technology</p>
                        <p class="text-muted"><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_05.png"
                                 style="height: 4vh;"
                                 class="iimg-fluid"> Elegant Design</p>
                    </div>
                </div>
            </div>

        </div> <!-- row -->
    </div>
</section>

<section style="margin-top: 0;">
    <div class="">

        <img src="<?= ASSETS . THEME ?>images/home/card_bg.jpg"
             alt=""
             class="img-fluid">
    </div>
</section>



<section style="margin-top: -20vh;">
    <div class="row align-items-center justify-content-center">
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle row align-items-center justify-content-center"
                 style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
                <div class="card pulse"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_07.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="background-color :; height: 1.4em;"
                        class="my-3 display-6 text-white">Unique Elements</h5>

                    <p class="card-text text-white">Venture into a world of smooth and modernity with magnum products
                        from the worlds finest gathering.</p>
                </div>
            </div>
        </div>
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle d-flex align-items-center justify-content-center"
                 style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
                <div class="card pulse"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_08.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="background-color :; height: 1.4em;"
                        class="my-3 display-6 text-white">Beautiful Design</h5>

                    <p class="card-text text-white">An ideal mix of smooth shapes, clean lines, and agile bends made
                        particularly to glitz up bathing ranges</p>
                </div>
            </div>

        </div>
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle d-flex align-items-center justify-content-center"
                 style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
                <div class="card pulse"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_09.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="height: 1.4em;"
                        class="my-4 justify-content-center display-6 text-white">Trendy Components</h5>

                    <p class="card-text text-white">The designs from this collection endeavor to carry you closer to
                        your desires and love for flawlessness.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col"
                 style="padding: 0 10vh ;">
                <h2 class="display-4">Customer Centricity</h2>
                <p class="text-muted">We render most high-grade experience to our customers. Providing the widest
                    variety of elements
                    we attempt to conceive customers great bathing experiences.</p>
                <div class="row mt-3"
                     style="">
                    <div class="col">
                        <h5 style="color: rgb(60, 183, 186);"
                            class="display-6">Our Goals</h5>
                        <p class="text-muted">Global Markets</p>
                        <p class="text-muted">Being The Best One</p>
                        <p class="text-muted">Happy Customers</p>
                    </div>
                    <div class="col">
                        <h5 style="color: rgb(60, 183, 186);"
                            class="display-6">Field Of Works</h5>
                        <p class="text-muted">Kitchen</p>
                        <p class="text-muted">Bathroom</p>
                        <p class="text-muted">Restroom</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class=""
                     style="height: 10vh; background-color: #eee; width: 30vw; margin: 0 auto"></div>
                <img src="<?= ASSETS . THEME ?>images/home/home_section_4.jpg"
                     alt=""
                     class="img-fluid"
                     style="max-height: 100vh; width: 100%; box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;">
                <div class=""
                     style="height: 10vh; background-color: #eee; width: 30vw; margin: 0 auto"></div>
            </div>
        </div>
    </div>
</section>
<?php $this->view("new_footer", $data); ?>