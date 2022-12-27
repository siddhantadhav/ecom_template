<?php $this->view("new_header", $data); ?>

    <section style="max-height: 80vh;">
        <div id="carouselExampleControls"
             class="carousel slide"
             data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= ASSETS . THEME ?>images/home/slider/slider1.jpg"
                         class="d-block w-100 img-fluid"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= ASSETS . THEME ?>images/home/slider/slider1.jpg"
                         class="d-block w-100 img-fluid"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= ASSETS . THEME ?>images/home/slider/slider1.jpg"
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

    <section style="background-color: #ebe9eb">
        <div class="container" style="">
            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <h2>Unfold Luxurious Experience</h2>
                    <p>
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
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="<?= ASSETS . THEME ?>images/home/unfold/home2.jpg"
                                 alt=""
                                 srcset=""
                                 class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="<?= ASSETS . THEME ?>images/home/unfold/home3.jpg"
                                 alt=""
                                 srcset=""
                                 class="img-fluid" style="height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-sm-2">
                    <img src="<?= ASSETS . THEME ?>images/home/approach/approach.jpg"
                         alt=""
                         class="img-fluid">
                </div>
                <div class="col">
                    <h2>An Innovative Approach</h2>
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
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2>Customer Centricity</h2>
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
                    <div id="carouselExampleSlidesOnly"
                         class="carousel slide"
                         data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= ASSETS . THEME?>images/home/centricity/home4.jpg"
                                     class="d-block w-100"
                                     alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= ASSETS . THEME?>images/home/centricity/home5.jpg"
                                     class="d-block w-100"
                                     alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= ASSETS . THEME?>images/home/centricity/home4.jpg"
                                     class="d-block w-100"
                                     alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
</body>

</html>