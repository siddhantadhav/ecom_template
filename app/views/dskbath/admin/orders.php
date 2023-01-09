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
                        <th> Product ID</th>
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

            var contact_name = document.getElementById("contact_name");
            contact_name.innerHTML = fname + " " + lname;
            var contact_city = document.getElementById("contact_city");
            contact_name.innerHTML = city;
            var contact_phone = document.getElementById("contact_phone");
            contact_phone.innerHTML = phone;
            var contact_email = document.getElementById("contact_email");
            contact_email.innerHTML = email;
            var contact_subject = document.getElementById("contact_subject");
            contact_subject.innerHTML = subject;
            var contact_message = document.getElementById("contact_message");
            contact_message.innerHTML = message;
        }
        else {
            show_message_box.classList.add("hide");
        }

    }
</script>

<?php $this->view("admin/footer", $data); ?>