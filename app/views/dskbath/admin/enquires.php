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
        if (show_message_box.classList.contains("hide")) {
            show_message_box.classList.remove("hide");
            var para = document.querySelector("#contact_message");
            para.innerHTML = msg;
        }
        else {
            show_message_box.classList.add("hide");
        }

    }
</script>

<?php $this->view("admin/footer", $data); ?>