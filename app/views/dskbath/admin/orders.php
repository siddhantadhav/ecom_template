<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<style>
    .show_message {
        width: 500px;
        background-color: #eae8e8;
        box-shadow: 0px 0px 10px #aaa;
        position: absolute;
        padding: 6px;
    }

    .hide {
        display: none;
    }
</style>

<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Orders </h4>
                <hr>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Client ID</th>
                        <th> Email</th>
                        <th> Product Name</th>
                        <th> Product SKU</th>
                        <th> QTY</th>
                        <th> Message</th>
                        <th> Date</th>
                        <th><i class=" fa fa-edit"></i> Actions</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <?php
                    echo $tbl_rows;
                    ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->

<script>
    function show_contact_message(fname, lname, city, phone, email, subject, message) {
        var show_message_box = document.querySelector(".show_message");
        if (show_message_box.classList.contains("hide")) {
            show_message_box.classList.remove("hide");

            var contact_fname = document.getElementById("contact_fname");
            contact_fname.innerHTML += fname + lname;
            var contact_city = document.getElementById("contact_city");
            contact_city.innerHTML += city;
            var contact_phone = document.getElementById("contact_phone");
            contact_phone.innerHTML += phone;
            var contact_email = document.getElementById("contact_email");
            contact_email.innerHTML += email;
            var contact_subject = document.getElementById("contact_subject");
            contact_subject.innerHTML += subject;
            var contact_message = document.getElementById("contact_message");
            contact_message.innerHTML += message;
        }
        else {
            show_message_box.classList.add("hide");
            var contact_fname = document.getElementById("contact_fname");
            contact_fname.innerHTML = "";
            var contact_city = document.getElementById("contact_city");
            contact_city.innerHTML = "";
            var contact_phone = document.getElementById("contact_phone");
            contact_phone.innerHTML = "";
            var contact_email = document.getElementById("contact_email");
            contact_email.innerHTML = "";
            var contact_subject = document.getElementById("contact_subject");
            contact_subject.innerHTML = "";
            var contact_message = document.getElementById("contact_message");
            contact_message.innerHTML = "";
        }

    }

    function remove_order(id, client_id) {
        var data = new FormData();

        data.append('id', id);
        data.append('client_id', client_id);
        data.append('data_type', 'remove_order');

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
                    if (obj.data_type == "complete_contact") {
                        if (obj.message_type == "info") {
                            alert(obj.message);
                            window.location.reload();
                        }
                        else {
                            obj.alert(obj.message);
                        }
                    }
                    if (obj.data_type == "remove_order") {
                        if (obj.message_type == "info") {
                            alert(obj.message);
                            window.location.reload();
                        }
                        else {
                            obj.alert(obj.message);
                        }
                    }
                }

            }
        }
</script>

<?php $this->view("admin/footer", $data); ?>