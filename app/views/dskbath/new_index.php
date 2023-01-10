<?php $this->view("new_header", $data); ?>

<style>
    body{
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

<section>
    <div class="container-fluid"
         style="">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">

                <h2 class="display-6">Unfold Luxurious Experience</h2>
                <p class="">
                    Be it for a luxurious bathroom, kitchen or a spic and span toilet, DSK has a Bathroom and Allied
                    Products that are appropriate for each of your requirement.
                </p>
                <p class="text-muted">
                    Our Company offers a wide range of Shower Solutions, Bath Fittings, Kitchen Solutions, Allied
                    Products, Sinks and Bath Accessories.
                </p>
                <button type="button"
                        class="btn btn-dark">Download Brochure</button>
            </div>
            <div class="col">
                <img src="<?= ASSETS . THEME ?>images/home/unfold/home2.jpg"
                    alt=""
                    srcset=""
                    class="img-fluid">    
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row align-items-center ">
            <div class="col">
                <img class="img-fluid"
                     style="height: 70vh;"
                     src="<?= ASSETS . THEME ?>images/home/home_section_3.jpg"
                     alt="">
            </div>
            <div class="col ">
                <h2 class="display-6">An Innovative Approach</h2>
                <p>DSK has a wide range of bathroom products which are of High Standards, each of which has been
                    designed and evolved through keen market study and 26 Years of Experience. All items are
                    designed with meticulous importance to offer optimum convenience during bathroom planning. Our
                    types of equipment have been gifting a world of elegant bathroom accessories with its
                    high-quality range of sleek, innovative and attractive products. Helping you make your bathroom
                    experience the best.</p>
                <button type="button"
                        class="btn btn-dark">Quote Products</button>
                <div class="row">
                    <div class="col">
                        <p class="text-muted">Biggest Market</p>
                        <p class="text-muted">Being The Besy One</p>
                        <p class="text-muted">Happy Customers</p>
                    </div>
                    <div class="col">
                        <p class="text-muted">Professional Outlook</p>
                        <p class="text-muted">innovative Technology</p>
                        <p class="text-muted">Elegant Design</p>
                    </div>
                </div>
            </div>

        </div> <!-- row -->
    </div>
</section>

<section style="margin-top: 0;">
    <div class="container-fluid">
        <img src="<?= ASSETS . THEME ?>images/home/card_bg.jpg"
             alt=""
             class="img-fluid">
    </div>
</section>



<section style="margin-top: -20vh;">
    <div class="row align-items-center justify-content-center">
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle row align-items-center justify-content-center">
                <div class="card"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: 15px 10px 12px rgba(0,0,0,.2); background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_07.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="background-color :; height: 1.4em;"
                        class="display-6">Unique Elements</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle d-flex align-items-center justify-content-center">
                <div class="card"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: 15px 10px 12px rgba(0,0,0,.2); background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_07.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="background-color :; height: 1.4em;"
                        class="display-6">Beautiful Design</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's
                        content.</p>
                </div>
            </div>

        </div>
        <div class="col row justify-content-center">
            <div class="rounded-circle outer-circle d-flex align-items-center justify-content-center">
                <div class="card"
                     style="height: 25rem; width: 25rem; padding: 0; border-radius: 15em; text-align: center; box-shadow: 15px 10px 12px rgba(0,0,0,.2); background-color: rgb(60, 183, 186);">
                    <img src="<?= ASSETS . THEME ?>images/icons/Icon_Page_07.png"
                         class="card-img-top"
                         alt="..."
                         style="width: 25%; height: 25%; border-radius: 50%; margin: 0 auto; ">

                    <h5 style="background-color :; height: 1.4em; vertical-align: middle; "
                        class="justify-content-center display-6">Trendy Components</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col">
                <h2 class="display-6">Customer Centricity</h2>
                <p>We render most high-grade experience to our customers. Providing the widest variety of elements
                    we attempt to conceive customers great bathing experiences.</p>
                <div class="row">
                    <div class="col">
                        <h5>Our Goals</h5>
                        <p>Global Markets</p>
                        <p>Being The Best One</p>
                        <p>Happy Customers</p>
                    </div>
                    <div class="col">
                        <h5>Field Of Works</h5>
                        <p>Kitchen</p>
                        <p>Bathroom</p>
                        <p>Restroom</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="<?= ASSETS . THEME ?>images/home/home_section_4.jpg"
                     alt=""
                     class="img-fluid">
            </div>
        </div>
    </div>
</section>
<?php $this->view("new_footer", $data); ?>