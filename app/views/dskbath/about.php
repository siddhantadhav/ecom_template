<?php $this->view("new_header", $data); ?>
<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
        max-height: 100%;
    }

    #counter {
        color: rgb(36, 188, 189);
        font-size: 3rem;
    }

    #counter_cleint {
        color: rgb(36, 188, 189);
        font-size: 3rem;
    }
    .btn:hover{
        background-color: white;
        border-color:white;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;   
    }
    @media only screen and (max-width: 768px) {
        .query-txt, .query-btn{
            display: grid;
            justify-content: center;
        }
    }
</style>
<div>
    <img src="<?= ASSETS . THEME ?>images/about/about_us_banner.jpg"
         alt="about_us_banner"
         class="img-fluid">
</div>

<section style="margin-top: 0;">
    <div class="container-fluid">
        <div class="row align-items-center">
        <h1 class="display-2 text-center pt-2"
                    style="color: rgb(36, 188, 189);" data-aos="fade-up"
     data-aos-duration="1000">About Us</h1>
            <div class="col-lg-6 col-md-12">                
                <h2 class="display-3"
                    style="color: rgb(110, 110, 110);" data-aos="fade-up"
     data-aos-duration="1000">Introduction To Our Core Purpose</h2>
                <p class="display-4"
                   style="color: rgb(36, 188, 189);" data-aos="fade-up"
     data-aos-duration="1000">Enthusiastically endeavor and enhance customer's quality of life.
                </p>
                <p class="text-muted medium" data-aos="fade-up"
     data-aos-duration="1000">We have constantly invigorated and realigned our business technique
                    tuned in to the changing desires of clients to reveal technology-driven Innovative products,
                    born out of meticulous research and market bits of knowledge.</p>
            </div>
            <div class="col" data-aos="fade-left"
     data-aos-duration="1000">

                <div class="row mt-3">
                    <div class="col-1 gx-0 d-none d-md-block d-lg-block d-xl-block"
                         style="background-color: #eee; margin-bottom: 10vh;"></div>
                    <div class="col gx-0"
                         style="">
                        <div style="background-color: #eee; height: 10vh; "></div>
                        <div>
                            <img src="<?= ASSETS . THEME ?>images/about/about_us_section_1.jpg"
                                 alt="about_us_intro_image"
                                 class="img-fluid"
                                 style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12" data-aos="fade-right"
     data-aos-duration="1000">

                <div class="row">
                    <div class="col gx-0"
                         style="">
                        <div style="background-color: #eee; height: 10vh; "></div>
                        <div>
                            <img src="<?= ASSETS . THEME ?>images/about/about_us_section_2.jpeg"
                                 alt="about_us_section_2.jpeg"
                                 class="img-fluid"
                                 style="box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px; width: 100%;">
                        </div>
                    </div>
                    <div class="col-1 gx-0 d-none d-xl-block d-lg-block d-md-block"
                         style="background-color: #eee; z-index: -1; margin-bottom:10vh;"></div>
                </div>



            </div>

            <div class="col mt-5">
                <span class="display-4 px-1"
                      style="background-color: rgb(36, 188, 189); color: white;" data-aos="fade-up"
     data-aos-duration="1000">True facts </span>
                <h2 class="display-3 mt-2" data-aos="fade-up"
     data-aos-duration="1000">Whats makes us different?</h2>
                <p class="text-muted" data-aos="fade-up"
     data-aos-duration="1000">DSK has created a niche for itself in the segment of bathroom fittings, making it
                    today the
                    undisputed brand in the Indian Bathroom Fittings Market.</p>
                <p class="text-muted" data-aos="fade-up"
     data-aos-duration="1000">DSK has a wide range of bathroom products which are of High Standards, each of
                    which has been
                    designed and evolved through keen market study and 26 Years of Experience. All items are
                    designed
                    with meticulous importance to offer optimum convenience during bathroom planning. Our types
                    of
                    equipment have been gifting a world of elegant bathroom accessories with its high-quality
                    range of
                    sleek, innovative and attractive products. Helping you make your bathroom experience the
                    best.</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-in"
     data-aos-duration="1000">
                        <p id="counter" >0</p>
                        <span style="font-size: 2.1rem; color: rgb(36, 188, 189);"> + Products</span>
                    </div>
                    <div class="col" data-aos="zoom-in"
     data-aos-duration="1000">
                        <p id="counter_cleint">0</p>
                        <span style="font-size: 2.1rem; color: rgb(36, 188, 189)"> + Client Works</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: rgb(36, 188, 189)">
    <div class="row"
         style="padding: 2vh">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <h4 class="text-end query-txt"
                style="color: white">For any further details or inquiries, Please contact Here!</h4>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <a href="<?= ROOT ?>contact" class="query-btn">
                <button type="button"
                        class="btn btn-light"
                        style="color: rgb(36, 188, 189)">Contact Us</button></a>
        </div>
    </div>
    </div>
</section>

<script>
    let counts = setInterval(updated);
    let upto = 0;
    function updated() {
        var count = document.getElementById("counter");
        count.innerHTML = ++upto;
        if (upto === 999) {
            clearInterval(counts);
        }
    }

    let new_count = setInterval(updated_new);
    let upto_new = 0;
    function updated_new() {
        var count_new = document.getElementById("counter_cleint");
        count_new.innerHTML = ++upto_new;
        if (upto_new === 1300) {
            clearInterval(new_count);
        }
    }

</script>

<script>
  AOS.init();
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php $this->view("new_footer", $data); ?>