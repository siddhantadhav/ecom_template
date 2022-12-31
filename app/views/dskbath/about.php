<?php $this->view("new_header", $data); ?>
<style>
    html, body {
    max-width: 100%;
    overflow-x: hidden;
    max-height: 100%;
}
</style>
<div class="container-fluid"
     style="height: 15vh; background-color: rgb(36, 188, 189);<!-- Add backgorund image here -->">
    <h1 class="text-center"
        style="color: white; ">About Us</h1>
</div>

<section>
    <div class="container">
        <h6 class="text-muted">Introduction</h6>
        <div class="row">
            <div class="col">
                <h2>Our Core Purpose</h2>
                <p class="lead">Enthusiastically endeavor and enhance customer's quality of life.</p>
                <p class="text-muted medium">We have constantly invigorated and realigned our business technique
                    tuned in to the changing desires of clients to reveal technology-driven Innovative products,
                    born out of meticulous research and market bits of knowledge.</p>
            </div>
            <div class="col">
                <img src="<?= ASSETS . THEME ?>images/about/about1.jpg"
                     alt=""
                     class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section style="background-color: #ebe9eb;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3"
                     style="max-width: 540px; background-color:#ebe9eb">
                    <div class="row g-0">
                        <div class="col-md-4">
                            
                            <!-- <img src="..."
                                 class="img-fluid rounded-start"
                                 alt="..."> -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card mb-3"
                     style="max-width: 540px; background-color:#ebe9eb">
                    <div class="row g-0">
                        <div class="col-md-4">
                            
                            <!-- <img src="..."
                                 class="img-fluid rounded-start"
                                 alt="..."> -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card mb-3"
                     style="max-width: 540px; background-color:#ebe9eb">
                    <div class="row g-0">
                        <div class="col-md-4">
                            
                            <!-- <img src="..."
                                 class="img-fluid rounded-start"
                                 alt="..."> -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card mb-3"
                     style="max-width: 540px; background-color:#ebe9eb">
                    <div class="row g-0">
                        <div class="col-md-4">
                            
                            <!-- <img src="..."
                                 class="img-fluid rounded-start"
                                 alt="..."> -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?= ASSETS . THEME ?>images/about/about2.jpg"
                     alt=""
                     class="img-fluid">
            </div>
            <div class="col">
                <h6>True Facts</h6>
                <h2>Whats makes us different?</h2>
                <p>DSK has created a niche for itself in the segment of bathroom fittings, making it today the
                    undisputed brand in the Indian Bathroom Fittings Market.</p>
                <p>DSK has a wide range of bathroom products which are of High Standards, each of which has been
                    designed and evolved through keen market study and 26 Years of Experience. All items are designed
                    with meticulous importance to offer optimum convenience during bathroom planning. Our types of
                    equipment have been gifting a world of elegant bathroom accessories with its high-quality range of
                    sleek, innovative and attractive products. Helping you make your bathroom experience the best.</p>
            </div>
        </div>
    </div>
</section>

<section style="background-color: rgb(36, 188, 189)">

    <div class="conatainer-fluid"
         style="height: 10vh; ">
        <div class="row">
            <div class="col-7">
                <h4 class="text-end"
                    style="color: white">For any further details or inquiries, Please contact Here!</h4>
            </div>
            <div class="col">
                <button type="button"
                        class="btn btn-light"
                        style="color: rgb(36, 188, 189)">Contact Us</button>
            </div>
        </div>
    </div>
    </div>
</section>
<?php $this->view("new_footer", $data); ?>