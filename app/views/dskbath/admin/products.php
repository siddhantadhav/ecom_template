<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<style type="text/css">
    .add_new {
        width: 500px;
        height: 650px;
        background-color: #eae8e8;
        box-shadow: 0px 0px 10px #aaa;
        position: absolute;
        padding: 6px;
    }

    .edit_product {
        width: 500px;
        height: 650px;
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

    .edit_product_images {
        display: flex;
        width: 100%;

    }

    .edit_product_images img {
        flex: 1;
        width: 50px;
        height: 80px;
        margin: 2px;

    }
</style>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Product  <button class="btn btn-primary btn-xs"
                            onclick="show_add_new(event)"><i class="fa fa-plus"></i> Quick Add New</button></h4>
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
                                            <option value="<?= $category->id ?>">
                                                <?php
                                                    $replaced_str = str_replace("_", " ", $category->category);
                                                    echo $replaced_str 
                                                ?>
                                            </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">SKU: </label>
                            <div class="col-sm-10">
                                <input id="sku"
                                       name="sku"
                                       type="text"
                                       class="form-control"
                                       required>
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
                                       onchange="display_images(this.files, this.name, 'js-product-images-add')"
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
                                       onchange="display_images(this.files, this.name, 'js-product-images-add')"
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
                                       onchange="display_images(this.files, this.name, 'js-product-images-add')"
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
                                       onchange="display_images(this.files, this.name, 'js-product-images-add')"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image5 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image5"
                                       name="image5"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images-add')"
                                       autofocus>
                            </div>
                        </div>
                        <div class="js-product-images-add edit_product_images">
                            <img src="" alt="product_image">
                            <img src="" alt="product_image">
                            <img src="" alt="product_image">
                            <img src="" alt="product_image">
                            <img src="" alt="product_image">
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
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Description: </label>
                            <div class="col-sm-10">
                                <input id="description_edit"
                                       name="description_edit"
                                       type="text"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Category: </label>
                            <div class="col-sm-10">
                                <select id="category_edit"
                                        name="category_edit"
                                        class="form-control"
                                        required>
                                    <option value=""></option>
                                    <?php if (is_array($categories)): ?>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= $category->id ?>">
                                                <?php
                                                    $replaced_str = str_replace("_", " ", $category->category);
                                                    echo $replaced_str 
                                                ?>
                                            </option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">SKU: </label>
                            <div class="col-sm-10">
                                <input id="sku_edit"
                                       name="sku_edit"
                                       type="text"
                                       class="form-control"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image: </label>
                            <div class="col-sm-10">
                                <input id="image_edit"
                                       name="image"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images')"
                                       required>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image2 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image2_edit"
                                       name="image2"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images')"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image3 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image3_edit"
                                       name="image3"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images')"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image4 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image4_edit"
                                       name="image4"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images')"
                                       autofocus>
                            </div>
                        </div>
                        <br style="clear: both;">
                        <div class="form-group">
                            <label for=""
                                   class="col-sm-2 col-sm-2 control-label">Image5 (optional): </label>
                            <div class="col-sm-10">
                                <input id="image5_edit"
                                       name="image5"
                                       type="file"
                                       class="form-control"
                                       onchange="display_images(this.files, this.name, 'js-product-images')"
                                       autofocus>
                            </div>
                        </div>
                        <br>
                        <div class="js-product-images edit_product_images"></div>

                        <button type="button"
                                class="btn btn-danger"
                                onclick="show_edit_product(0, '', false)"
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
                        <th> Product SKU</th>
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
        var show_add_box = document.querySelector(".edit_product");
        // show_add_box.style.left = (e.clientX - 600)+"px";
        show_add_box.style.top = (e.clientY - 200) + "px";
        if (e) {
            var a = (e.currentTarget.getAttribute("info"));
            var info = JSON.parse(a.replaceAll("'", '"'));
            EDIT_ID = info.id;


            var product_input = document.querySelector("#product_edit");
            product_input.value = info.name;

            var description_input = document.querySelector("#description_edit");
            description_input.value = info.description;
            
            var category_input = document.querySelector("#category_edit");
            category_input.value = info.category;
            
            var sku_input = document.querySelector("#sku_edit");
            sku_input.value = info.sku;

            var product_image_input = document.querySelector(".js-product-images");
            product_image_input.innerHTML = `<img src ="<?= ROOT ?>${info.image}" />`;
            product_image_input.innerHTML += `<img src ="<?= ROOT ?>${info.image2}" />`;
            product_image_input.innerHTML += `<img src ="<?= ROOT ?>${info.image3}" />`;
            product_image_input.innerHTML += `<img src ="<?= ROOT ?>${info.image4}" />`;
            product_image_input.innerHTML += `<img src ="<?= ROOT ?>${info.image5}" />`;
        }

        if (show_add_box.classList.contains("hide")) {
            show_add_box.classList.remove("hide");
            product_input.focus();
        }
        else {

            show_add_box.classList.add("hide");

            // product_input.value = "";
        }
    }

    function display_images(file, name, element) {
        var index = 0;

        if (name == "image2") {
            index = 1;
        }
        else if (name == "image3") {
            index = 2;
        }
        else if (name == "image4") {
            index = 3;
        }
        else if (name == "image5") {
            index = 4;
        }
        var image_holder = document.querySelector("." +element);

        var images = image_holder.querySelectorAll("IMG");

        images[index].src = URL.createObjectURL(file[0]);
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

        var sku_input = document.querySelector("#sku");
        if (sku_input.value.trim() == "" || !isNaN(sku_input.value.trim())) {
            alert("Please enter a valid SKU");
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

        var image5_input = document.querySelector("#image5");
        if (image5_input.files.length > 0) {
            data.append('image5', image5_input.files[0]);
        }

        data.append('name', product_input.value.trim());
        data.append('description', description_input.value.trim());
        data.append('category', category_input.value.trim());
        data.append('sku', sku_input.value.trim());
        data.append('color', 1);
        data.append('data_type', 'add_product');
        data.append('image', image_input.files[0]);
        data.append('variations', 0);

        send_data_files(data);
    }

    function collect_edit_data(e) {
        var product_input = document.querySelector("#product_edit");
        if (product_input.value.trim() == "" || !isNaN(product_input.value.trim())) {
            alert("Please enter a valid product name");
            return;
        }

        var description_input = document.querySelector("#description_edit");
        if (description_input.value.trim() == "" || !isNaN(description_input.value.trim())) {
            alert("Please enter a valid description");
            return;
        }
        
        var sku_input = document.querySelector("#sku_edit");
        if (sku_input.value.trim() == "" || !isNaN(sku_input.value.trim())) {
            alert("Please enter a valid SKU");
            return;
        }

        var category_input = document.querySelector("#category_edit");
        if (category_input.value.trim() == "" || isNaN(category_input.value.trim())) {
            alert("Please enter a valid category");
            return;
        }

        var data = new FormData();
        
        var image_input = document.querySelector("#image_edit");
        if (image_input.files.length > 0) {
            data.append('image', image_input.files[0]);
        }


        var image2_input = document.querySelector("#image2_edit");
        if (image2_input.files.length > 0) {
            data.append('image2', image2_input.files[0]);
        }

        var image3_input = document.querySelector("#image3_edit");
        if (image3_input.files.length > 0) {
            data.append('image3', image3_input.files[0]);
        }

        var image4_input = document.querySelector("#image4_edit");
        if (image4_input.files.length > 0) {
            data.append('image4', image4_input.files[0]);
        }
        var image5_input = document.querySelector("#image5_edit");
        if (image5_input.files.length > 0) {
            data.append('image5', image5_input.files[0]);
        }

        data.append('name', product_input.value.trim());
        data.append('description', description_input.value.trim());
        data.append('category', category_input.value.trim());
        data.append('sku', sku_input.value.trim());
        data.append('data_type', 'edit_product');
        data.append('id', EDIT_ID);

        send_data_files(data);
    }

    function send_data(data = {}) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });
        ajax.open("POST", "<?= ROOT ?>ajax_product", true);
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
        console.log(result);
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
        // location.reload();

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