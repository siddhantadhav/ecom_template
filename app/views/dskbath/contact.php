<?php $this->view("new_header", $data); ?>

<style>
    input {
        margin: 1vh 0;
    }
    .contact-info{
        display: grid;
        place-items: center;
    }

    @media only screen and (max-width: 900px) {
        .contact-section {
            margin-top: 0;
            ;
        }
    }

    @media only screen and (max-width: 992px) {
        .contact {
            border-bottom: none;
        }
    }

    @media only screen and (max-width: 576px) {
        .contact-form {
            margin-top: 30px;
        }
    }
</style>

<body>
    <div>
        <img style="width: 100%;" src="<?= ASSETS . THEME ?>\images\contact\contact.jpeg" alt="contact.jpeg" class="img-fluid">
    </div>
    <div class="container-fluid" style="height: 10vh; <!-- Add background image -->">
        <h1 class="text-center display-2" style="color: rgb(60, 183, 186)">Contact Us</h1>
    </div>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 contact-info" style="margin-right: 45px;">                    
                    <div class="contact-info-list">
                    <span class="display-4 px-2"
                        style="color:#ffffff; background-color:#24bcbd;">Get in Tocuh with us</span>
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            <li class=""
                                style="position: relative; display: block; margin-bottom: 20px; border-bottom:solid rgb(36, 188, 189);">
                                <div class="icon d-flex mt-4">
                                    <span style="color:rgb(36, 188, 189);"><img
                                            src="<?= ASSETS . THEME ?>images/icons/location-icon.png"
                                            style="height: 30px; " class="img-fluid"></span>
                                    <p class="" style="">Visit our location</p>
                                </div>
                                <div class="text">
                                    <p class="text-muted">DSK Bath Solutions, GIDC Phase 3,
                                        Dared, Jamnagar, Gujrat-361004.</p>
                                </div>
                            </li>
                            <li class="contact" style="border-bottom: solid rgb(36, 188, 189)">
                                <div class="icon d-flex" styele=" ">
                                    <span><img src="<?= ASSETS . THEME ?>images/icons/Icon_Page-03.png"
                                            style="height: 30px;" class="img-fluid"></span>
                                    <p>Have any questions?</p>
                                </div>
                                <div>
                                    <p>Phone: <a href="tel: +917021632636" class="text-muted">07021632636</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col p-5 contact-form"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;background-color: rgba(238,238,238,255);;border-top: 15px solid rgb(36, 188, 189);">
                    <span class="display-4 px-2 py-2" style="color:#ffffff; background-color:#24bcbd;">Send a
                        Message</span>
                    <div class="row pt-4">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" id="fname" class="form-control" placeholder="First name"
                                aria-label="First name" required autofocus>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" id="lname" class="form-control" placeholder="Last name"
                                aria-label="Last name" required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="phone" id="phone" class="form-control" placeholder="Contact Number"
                                aria-label="Contact Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" id="city" class="form-control" placeholder="City" aria-label="City">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="email" id="email" class="form-control" placeholder="Email" aria-label="Email"
                                required>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" id="subject" class="form-control" placeholder="Subject"
                                aria-label="Subject">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" rows="8" placeholder="Message" required></textarea>
                    </div>
                    <button onclick="collect_data(event)" type="submit" class="btn"
                        style="background-color: rgb(60, 183, 186); color: white;">Send</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120653.12294597657!2d72.77142934589511!3d19.08965714574513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cec461fdb821%3A0xd3ac8fcfdf4dfef7!2sSAVLA%20CERAMICS%20-%20Kohler%20Grohe%20Jaquar!5e0!3m2!1sen!2sin!4v1671449814980!5m2!1sen!2sin"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    </div>

    <script>
        function collect_data(e) {
            var fname_input = document.querySelector("#fname");
            if (fname_input.value.trim() == "" || !isNaN(fname_input.value.trim())) {
                alert("Please Enter a Valid First Name");
            }

            var lname_input = document.querySelector("#lname");
            if (lname_input.value.trim() == "" || !isNaN(lname_input.value.trim())) {
                alert("Please Enter a Valid Last Name");
            }

            var phone_input = document.querySelector("#phone");
            if (phone_input.value.trim() == "" || isNaN(phone_input.value.trim())) {
                alert("Please Enter a Valid Contact Number");
            }

            var city_input = document.querySelector("#city");

            var email_input = document.querySelector("#email");
            if (email_input.value.trim() == "") {
                alert("Please Enter a Email");
            }

            var subject_input = document.querySelector("#subject");

            var message_input = document.querySelector("#message");
            if (message_input.value.trim() == "" || !isNaN(message_input.value.trim())) {
                alert("Please Enter a Valid Message");
            }

            var data = new FormData();
            data.append('fname', fname_input.value.trim());
            data.append('lname', lname_input.value.trim());
            data.append('phone', phone_input.value.trim());
            data.append('city', city_input.value.trim());
            data.append('email', email_input.value.trim());
            data.append('subject', subject_input.value.trim());
            data.append('message', message_input.value.trim());
            data.append('ordered', 0);
            data.append('data_type', 'send_contact');

            send_data(data);
        }

        function send_data(formdata) {
            var ajax = new XMLHttpRequest();

            ajax.addEventListener('readystatechange', function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    handle_result(ajax.responseText);
                }

            });
            ajax.open("POST", "<?= ROOT ?>ajax_contact", true);
            ajax.send(formdata);
        }

        function handle_result(result) {
            console.log(result);
            if (result != "") {
                var obj = JSON.parse(result);
                if (typeof obj.data_type != 'undefined') {
                    if (obj.data_type == "send_contact") {
                        if (obj.message_type == "info") {
                            alert(obj.message);
                            var fname_input = document.querySelector("#fname");
                            var lname_input = document.querySelector("#lname");
                            var phone_input = document.querySelector("#phone");
                            var city_input = document.querySelector("#city");
                            var email_input = document.querySelector("#email");
                            var subject_input = document.querySelector("#subject");
                            var message_input = document.querySelector("#message");

                            fname_input.value = "";
                            lname_input.value = "";
                            phone_input.value = "";
                            city_input.value = "";
                            email_input.value = "";
                            subject_input.value = "";
                            message_input.value = "";
                        }
                        else {
                            obj.alert(obj.message);
                        }
                    }
                }

            }
        }
    </script>

    <?php $this->view("new_footer", $data); ?>