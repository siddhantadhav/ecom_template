<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<style>
    .add_new_user {
        width: 500px;
        height: 500px;
        background-color: #eae8e8;
        box-shadow: 0px 0px 10px #aaa;
        position: absolute;
        padding: 6px;
    }

    .show {
        display: block;
    }

    .hide {
        display: none;
    }

    .form-group {
        margin: 10px;
    }
</style>


<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Users <button class="btn btn-primary btn-xs"
                            onclick="show_add_new_user(event)"><i class="fa fa-plus"></i> Add New User</button></h4>
                <hr>
                <div class="add_new_user hide">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Add New User</h4>
                    <form lass="form-horizontal style-form"
                          method="post">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">User Name: </label>
                            <div class="col-sm-10">
                                <input id="username"
                                       name="username"
                                       type="text"
                                       class="form-control"
                                       autofocus
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Email: </label>
                            <div class="col-sm-10">
                                <input id="useremail"
                                       name="useremail"
                                       type="text"
                                       class="form-control"
                                       autofocus
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Password: </label>
                            <div class="col-sm-10">
                                <input id="password"
                                       name="password"
                                       type="text"
                                       class="form-control"
                                       autofocus
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Confirm Password: </label>
                            <div class="col-sm-10">
                                <input id="password_confirm"
                                       name="password_confirm"
                                       type="text"
                                       class="form-control"
                                       autofocus
                                       required>
                            </div>
                        </div>
                        <button type="button"
                                class="btn btn-danger"
                                onclick="show_add_new_user(event)"
                                style="position: absolute; bottom: 10px; left: 10px;;">Cancel</button>
                        <button type="button"
                                onclick="collect_user_data(event)"
                                class="btn btn-primary"
                                style="position: absolute; bottom: 10px; right: 10px;;">Save</button>
                    </form>
                </div>
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> User Name</th>
                        <th> Email</th>
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
    function show_add_new_user(e) {
        var show_add_box = document.querySelector(".add_new_user");
        var product_input = document.querySelector("#username");
        if (show_add_box.classList.contains("hide")) {
            show_add_box.classList.remove("hide");
            product_input.focus();
        }
        else {
            show_add_box.classList.add("hide");
            product_input.value = "";
        }

    }

    function collect_user_data(e) {
        var username_input = document.querySelector('#username');
        username_input = username_input.value.trim();

        var useremail_input = document.querySelector('#useremail');
        useremail_input = useremail_input.value.trim();

        var password_input = document.querySelector('#password');
        password_input = password_input.value.trim();


        var password_confirm_input = document.querySelector('#password_confirm');
        password_confirm_input = password_confirm_input.value.trim();


        // check for matching passwords

        var data = new FormData();

        data.append('username', username_input);
        data.append('useremail', useremail_input);
        data.append('password', password_input);
        data.append('data_type', 'add_user');

        for (const [key, value] of data) {
            console.log(key, value);
        }

        // send_data_files(data);
    }

    function send_data_files(formdata) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });
        ajax.open("POST", "<?= ROOT ?>ajax_user", true);
        ajax.send(formdata);
    }

    function handle_result(result) {
        console.log(result);
        if (result != "") {
            var obj = JSON.parse(result);
            if (typeof obj.data_type != 'undefined') {
                if (obj.data_type == "add_user") {
                    if (obj.message_type == "info") {
                        alert(obj.message);
                        show_add_new_user(false);

                        var table_body = document.querySelector('#table_body');
                        table_body.innerHTML = obj.data;

                    }
                    else {
                        alert(obj.message);
                    }
                }
                else if (obj.data_type == "delete_row") {
                    var table_body = document.querySelector('#table_body');
                    table_body.innerHTML = obj.data;
                    alert(obj.message);

                    show_add_new_user(false);
                }
            }
        }
    }
</script>

<?php $this->view("admin/footer", $data); ?>