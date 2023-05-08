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

    #contact_message{
        font-size: large;
    }
</style>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Enquires </h4>
                <hr>
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th> City</th>
                        <th> Phone</th>
                        <th> Email</th>
                        <th> Subject</th>
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
    function show_contact_message(msg) {
        var show_message_box = document.querySelector(".show_message");
        var para = document.querySelector("#contact_message");
        if (show_message_box.classList.contains("hide")) {
            show_message_box.classList.remove("hide");
            para.innerHTML += msg;
        }
        else {
            show_message_box.classList.add("hide");
            para.innerHTML = "Message : "
        }
    }

    function complete_contact(contact_id){
        var data = new FormData();

        data.append('id', contact_id);
        data.append('data_type', 'complete_contact');

        send_data(data);

    }
    
    function delete_contact(contact_id){
        var data = new FormData();

        data.append('id', contact_id);
        data.append('data_type', 'remove_contact');

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
                    if (obj.data_type == "remove_contact") {
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