<?php $this->view("new_header", $data); ?>

<body>
    <div class="container-fluid"
         style="height: 30vh; <!-- Add background image -->">
        <h1 class="text-center">Contact Us</h1>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-map-marker fa-4x"
                           aria-hidden="true"></i>
                        <h2>Factory</h2>
                        <p>DSK Bath Solutions, GIDC Phase 3,
                            Dared, Jamnagar, Gujrat-361004.</p>
                        <p>Phone: <a href="tel: +917021632636">07021632636</a></p>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <input type="text"
                                       class="form-control"
                                       placeholder="First name"
                                       aria-label="First name"
                                       id="fname">
                            </div>
                            <div class="col">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Last name"
                                       aria-label="Last name">
                            </div>
                            <div class="col">
                                <input type="phone"
                                       class="form-control"
                                       placeholder="Contact Number"
                                       aria-label="Contact Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text"
                                       class="form-control"
                                       placeholder="City"
                                       aria-label="City">
                            </div>
                            <div class="col">
                                <input type="email"
                                       class="form-control"
                                       placeholder="Email"
                                       aria-label="Email">
                            </div>
                            <div class="col">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Subject"
                                       aria-label="Subject">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="8" placeholder="Message"></textarea>
                        </div>
                        <button onclick="send_contact(event)" type="submit" class="btn btn-dark">Send</button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120653.12294597657!2d72.77142934589511!3d19.08965714574513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cec461fdb821%3A0xd3ac8fcfdf4dfef7!2sSAVLA%20CERAMICS%20-%20Kohler%20Grohe%20Jaquar!5e0!3m2!1sen!2sin!4v1671449814980!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </section>
    </div>

    <script>
        
    </script>

    <?php $this->view("new_footer", $data); ?>