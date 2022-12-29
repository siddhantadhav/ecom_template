<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<style type="text/css">
    .add_new {
        width: 500px;
        height: 500px;
        background-color: #eae8e8;
        box-shadow: 0px 0px 10px #aaa;
        position: absolute;
        padding: 6px;
    }

    .edit_product {
        width: 500px;
        height: 300px;
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
                <h4><i class="fa fa-angle-right"></i> Product <button class="btn btn-primary btn-xs"
                            onclick="show_add_new(event)"><i class="fa fa-plus"></i> Add New</button></h4>
                <!-- add new product-->
                <div class="add_new hide">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Add New Product</h4>
                    <form class="form-horizontal style-form"
                          method="post">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input id="name"
                                       name="name"
                                       type="text"
                                       class="form-control"
                                       autofocus
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Description: </label>
                            <div class="col-sm-10">
                                <input id="description"
                                       name="description"
                                       type="text"
                                       class="form-control"
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Category: </label>
                            <div class="col-sm-10">
                                <select id="category"
                                        name="category"
                                        class="form-control"
                                        required>
                                    <option value=""></option>
                                    <?php if (is_array($categories)): ?>
                                    <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category->id ?>"><?= $category->category ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image: </label>
                            <div class="col-sm-10">
                                <input id="image"
                                       name="image"
                                       type="file"
                                       class="form-control"
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image2 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image2"
                                       name="image2"
                                       type="file"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image3 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image3"
                                       name="image3"
                                       type="file"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image4 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image4"
                                       name="image4"
                                       type="file"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <button type="button"
                                class="btn btn-danger"
                                onclick="show_add_new(event)"
                                style="position: absolute; bottom: 10px; left: 10px;">Close</button>
                        <button type="button"
                                onclick="collect_data(event)"
                                class="btn btn-primary"
                                style="position: absolute; bottom: 10px; right: 10px;">Save</button>
                    </form>
                </div>
                <!-- add new product-->

                <hr>
                <!-- Edit product -->
                <div class="edit_product hide">
                    <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Product</h4>
                    <form class="form-horizontal style-form"
                          method="post">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Product Name: </label>
                            <div class="col-sm-10">
                                <input id="product_edit"
                                       name="product_edit"
                                       type="text"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <button type="button"
                                class="btn btn-danger"
                                onclick="show_edit_product(0, '', event)"
                                style="position: absolute; bottom: 10px; left: 10px;;">Cancel</button>
                        <button type="button"
                                onclick="collect_edit_data(event)"
                                class="btn btn-primary"
                                style="position: absolute; bottom: 10px; right: 10px;;">Save</button>
                    </form>
                </div>
                <!-- Edit product end -->
                <thead>
                    <tr>
                        <th> Product id</th>
                        <th> Product Name</th>
                        <th> Description</th>
                        <th> Category</th>
                        <th> Image</th>
                        <th> Date</th>
                        <th><i class=" fa fa-edit"></i> Actions</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <?php
                    echo $tbl_rows;

                    // echo ($tbl_rows);
                    ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->


<script>
    var EDIT_ID = 0;

    function show_add_new() {
        var show_add_box = document.querySelector(".add_new");
        var product_input = document.querySelector("#name");
        if (show_add_box.classList.contains("hide")) {
            show_add_box.classList.remove("hide");
            product_input.focus();
        }
        else {
            show_add_box.classList.add("hide");
            product_input.value = "";
        }

    }

    function show_edit_product(id, product, e) {
        EDIT_ID = id;
        var show_add_box = document.querySelector(".edit_product");
        // show_add_box.style.left = (e.clientX - 600)+"px";
        show_add_box.style.top = (e.clientY - 300) + "px";
        var product_input = document.querySelector("#product_edit");
        product_input.value = product;
        if (show_add_box.classList.contains("hide")) {
            show_add_box.classList.remove("hide");
            product_input.focus();
        }
        else {

            show_add_box.classList.add("hide");

            product_input.value = "";
        }
    }

    function collect_data(e) {
        var product_input = document.querySelector("#name");
        if (product_input.value.trim() == "" || !isNaN(product_input.value.trim())) {
            alert("Please enter a valid product name");
            return;
        }

        var description_input = document.querySelector("#description");
        if (description_input.value.trim() == "" || !isNaN(description_input.value.trim())) {
            alert("Please enter a valid description");
            return;
        }

        var category_input = document.querySelector("#category");
        if (category_input.value.trim() == "" || isNaN(category_input.value.trim())) {
            alert("Please enter a valid category");
            return;
        }

        var image_input = document.querySelector("#image");
        if (image_input.files.length == 0) {
            alert("Please enter a valid image");
            return;
        }

        var data = new FormData();

        var image2_input = document.querySelector("#image2");
        if (image2_input.files.length > 0) {
            data.append('image2', image2_input.files[0]);
        }

        var image3_input = document.querySelector("#image3");
        if (image3_input.files.length > 0) {
            data.append('image3', image3_input.files[0]);
        }

        var image4_input = document.querySelector("#image4");
        if (image4_input.files.length > 0) {
            data.append('image4', image4_input.files[0]);
        }

        data.append('name', product_input.value.trim());
        data.append('description', description_input.value.trim());
        data.append('category', category_input.value.trim());
        data.append('data_type', 'add_product');
        data.append('image', image_input.files[0]);

        send_data_files(data);
    }

    function collect_edit_data(e) {
        var product_input = document.querySelector("#product_edit");
        if (product_input.value.trim() == "" || !isNaN(product_input.value.trim())) {
            alert("Please enter a valid product name");
        }
        var data = product_input.value.trim();
        send_data({
            id: EDIT_ID,
            product: data,
            data_type: 'edit_product'
        });
    }

    function send_data(data = {}) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });
        ajax.open("POST", "<?= ROOT ?>ajax_product_no_file", true);
        ajax.send(JSON.stringify(data));
    }

    function send_data_files(formdata) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });


        ajax.open("POST", "<?= ROOT ?>ajax_product", true);
        ajax.send(formdata);
    }

    function handle_result(result) {
        if (result != "") {
            var obj = JSON.parse(result);
            if (typeof obj.data_type != 'undefined') {
                if (obj.data_type == "add_product") {
                    if (obj.message_type == "info") {
                        alert(obj.message);
                        show_add_new();

                        var table_body = document.querySelector('#table_body');
                        table_body.innerHTML = obj.data;
                    }
                    else {
                        alert(obj.message);
                    }
                }
                else
                    if (obj.data_type == "edit_product") {

                        show_edit_product(0, '', false);
                        var table_body = document.querySelector('#table_body');
                        table_body.innerHTML = obj.data;
                        alert(obj.message);
                    }
                    else
                        if (obj.data_type == "delete_row") {
                            var table_body = document.querySelector('#table_body');
                            table_body.innerHTML = obj.data;
                            alert(obj.message);
                        }
                        else
                            if (obj.data_type == "disable_row") {
                                var table_body = document.querySelector('#table_body');
                                table_body.innerHTML = obj.data;
                            }
            }
        }
    }

    function delete_row(id, name) {
        if (!confirm("Are you sure you want to delete this row")) {
            return;
        }
        send_data({
            data_type: "delete_row",
            id: id
        });
        
    }

    function disable_row(id, state) {
        send_data({
            data_type: "disable_row",
            id: id,
            current_state: state
        });
    }
</script>

<?php $this->view("admin/footer", $data); ?>