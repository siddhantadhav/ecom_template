<?php $this->view("new_header", $data); ?>

<style>
    input{
        margin: 1vh 0;
    }
    @media only screen and (max-width: 900px) {
        .contact-section{
            margin-top: 0;;
    }
    }
    
</style>

<body>
    <div class="container-fluid"
         style="height: 10vh; <!-- Add background image -->">
        <h1 class="text-center display-1" style="color: rgb(60, 183, 186)">Contact Us</h1></div>
        <section class="contact-section">
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-5 col-md-12" >
                        <img style="width: 100%;" src="<?=ASSETS . THEME?>images/contact/contact.jpeg" alt="" class="img-fluid">
                        <!-- <i class="fa fa-map-marker fa-4x"
                           aria-hidden="true"></i> -->
                        <h2 class="display-6" style="">Factory</h2>
                        <p class="text-muted">DSK Bath Solutions, GIDC Phase 3,
                            Dared, Jamnagar, Gujrat-361004.</p>
                        <p class="text-muted">Phone: <a href="tel: +917021632636">07021632636</a></p>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <input type="text"
                                       id="fname"
                                       class="form-control"
                                       placeholder="First name"
                                       aria-label="First name"
                                       required
                                       autofocus>
                            </div>
                            <div class="col">
                                <input type="text"
                                       id="lname"
                                       class="form-control"
                                       placeholder="Last name"
                                       aria-label="Last name"
                                       required>
                            </div>
                            <div class="col">
                                <input type="phone"
                                       id="phone"
                                       class="form-control"
                                       placeholder="Contact Number"
                                       aria-label="Contact Number"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text"
                                       id="city"
                                       class="form-control"
                                       placeholder="City"
                                       aria-label="City">
                            </div>
                            <div class="col">
                                <input type="email"
                                       id="email"
                                       class="form-control"
                                       placeholder="Email"
                                       aria-label="Email"
                                       required>
                            </div>
                            <div class="col">
                                <input type="text"
                                       id="subject"
                                       class="form-control"
                                       placeholder="Subject"
                                       aria-label="Subject">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control"
                                      id="message"
                                      rows="8"
                                      placeholder="Message"
                                      required></textarea>
                        </div>
                        <button onclick="collect_data(event)"
                                type="submit"
                                class="btn" style="background-color: rgb(60, 183, 186); color: white;">Send</button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120653.12294597657!2d72.77142934589511!3d19.08965714574513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cec461fdb821%3A0xd3ac8fcfdf4dfef7!2sSAVLA%20CERAMICS%20-%20Kohler%20Grohe%20Jaquar!5e0!3m2!1sen!2sin!4v1671449814980!5m2!1sen!2sin"
                        width="100%"
                        height="600"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
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