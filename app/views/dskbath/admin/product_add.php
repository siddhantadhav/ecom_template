<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<style>
    .product_input_style {
        margin-bottom: 2vh;
        height: 5vh;
    }

    .hide {
        display: none;
    }

    .show {
        display: block;
    }
</style>


<div class="">
    <div class="form-group">
        <label for=""
               class="col-sm-1 control-label">Product Name: </label>
        <div class="col-sm-10">
            <input id="name"
                   name="name"
                   type="text"
                   class="form-control product_input_style"
                   autofocus>
        </div>
    </div>
    <br style="clear: both;">
    <div class="form-group">
        <label for="description"
               class="col-sm-1 control-label">Description: </label>
        <div class="col-sm-10">
            <input id="description"
                   name="description"
                   type="text"
                   class="form-control product_input_style"
                   autofocus>
        </div>
    </div>
    <br style="clear: both;">
    <div class="form-group">
        <label for="category"
               class="col-sm-1 control-label">Category: </label>
        <div class="col-sm-10">
            <select id="category"
                    name="category"
                    class="form-control product_input_style"
                    required>
                <option value=""></option>
                <?php if (is_array($categories)): ?>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->id ?>">
                            <?= $category->category ?>
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>
    </div>
    <br style="clear: both;">
    <div class="form-group">
        <label for="sku"
               class="col-sm-1 control-label">SKU: </label>
        <div class="col-sm-10">
            <input id="sku"
                   name="sku"
                   type="text"
                   class="form-control product_input_style"
                   autofocus>
        </div>
    </div>
    <br style="clear: both;">
    <div class="form-group">
        <label for=""
               class="col-sm-1 control-label">Image: </label>
        <div class="col-sm-10">
            <input id="image"
                   name="image"
                   type="file"
                   class="form-control product_input_style"
                   required>
        </div>
    </div>

    <br style="clear: both;">
    <span class="product_input_styler">Does this product have variation?
        <input type="radio"
               name="variation"
               id="has_variations"
               onclick="variation_input(event, this.value)"
               value="1"> Yes </input>
        <input type="radio"
               name="variation"
               onclick="variation_input(event, this.value)"
               value="0"
               checked> No </input>
    </span>

    <!-- Variation container -->
    <div class="product_variation_container hide">
        <!-- Single variation -->
        <div class="variation_container">
            <br style="clear: both;">
            <div class="form-group">
                <label for="color"
                       class="col-sm-1 control-label">Color: </label>
                <div class="col-sm-10">
                    <select id="color"
                            name="color"
                            class="form-control product_input_style"
                            required>
                        <option value=""></option>
                        <?php if (is_array($colors)): ?>
                            <?php foreach ($colors as $color): ?>
                                <option value="<?= $color->id ?>">
                                    <?php 
                                    if($color->color == 'chrome'){
                                        continue;
                                    }
                                    echo $color->color;?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <br style="clear: both;">
            <div class="form-group">
                <label for="sku"
                       class="col-sm-1 control-label">SKU: </label>
                <div class="col-sm-10">
                    <input name="sku"
                           id="sku"
                           type="text"
                           class="form-control product_input_style"
                           autofocus>
                </div>
            </div>
            <br style="clear: both;">
            <div class="form-group">
                <label for="image"
                       class="col-sm-1 control-label">Image : </label>
                <div class="col-sm-10">
                    <input id="image"
                           name="image"
                           type="file"
                           class="form-control product_input_style"
                           autofocus>
                </div>
            </div>
            <br><br style="clear: both;">
            <hr>
        </div>
        <!-- Single variation ends -->
        <br style="clear: both;">

        <button class="btn btn-primary"
                onclick="add_variation(event)">Add variation</button>
        <button class="btn btn-danger"
                onclick="remove_variation(event)">Remove variation</button>
    </div>
    <!-- Variation container ends -->
    <br style="clear: both;">
    <button class="btn btn-primary"
            onclick="add_product_variation(event)">ADD PRODUCT</button>
</div>

<script>
    var variation_no = 1;
    function variation_input(e, value) {
        var product_variation_container = document.querySelector(".product_variation_container");

        // changing ids
        var product_variation_container_color = product_variation_container.querySelector("#color");
        product_variation_container_color.id = product_variation_container_color.id + variation_no.toString();

        var product_variation_container_sku = product_variation_container.querySelector("#sku");
        product_variation_container_sku.id = product_variation_container_sku.id + variation_no.toString();

        var product_variation_container_image = product_variation_container.querySelector("#image");
        product_variation_container_image.id = product_variation_container_image.id + variation_no.toString();

        if (value == 0) {
            product_variation_container.classList.remove("show");
            product_variation_container.classList.add("hide");
        }
        else {
            product_variation_container.classList.remove("hide");
            product_variation_container.classList.add("show");
        }
    }

    function add_variation(e) {
        var product_variation_container = document.querySelector(".product_variation_container");
        var variation_container = document.querySelector(".variation_container:last-of-type");

        // creating clone node
        var clone_variation_container = variation_container.cloneNode(true);
        variation_container.after(clone_variation_container);

        // slecting inner divs

        clone_variation_container_color = clone_variation_container.querySelector(`#color${variation_no.toString()}`);
        clone_variation_container_color.value = "";

        clone_variation_container_sku = clone_variation_container.querySelector(`#sku${variation_no.toString()}`);
        clone_variation_container_sku.value = "";

        clone_variation_container_image = clone_variation_container.querySelector(`#image${variation_no.toString()}`);
        clone_variation_container_image.value = null;
        variation_no += 1;

        // changing id of color div

        clone_variation_container_color.id = clone_variation_container_color.id.replace(/[0-9]/g, '');
        clone_variation_container_color.id += variation_no.toString();

        // changing id of sku

        clone_variation_container_sku.id = clone_variation_container_sku.id.replace(/[0-9]/g, '');
        clone_variation_container_sku.id += variation_no.toString();

        // changing id of image

        clone_variation_container_image.id = clone_variation_container_image.id.replace(/[0-9]/g, '');
        clone_variation_container_image.id += variation_no.toString();
    }

    function remove_variation(e) {
        if (variation_input == 0) {
            // There is a bug 

        }
        var removed_variation_container = document.querySelector(".variation_container:last-of-type");
        removed_variation_container.remove();
        variation_no -= 1;
        console.log(variation_no);
    }

    function add_product_variation(e) {

        var product_input = document.querySelector("#name");
        product_input = product_input.value.trim();

        var description_input = document.querySelector("#description");
        description_input = description_input.value.trim();

        var category_input = document.querySelector("#category");
        category_input = category_input.value.trim();

        var sku_input = document.querySelector("#sku");
        sku_input = sku_input.value.trim();

        var image_input = document.querySelector("#image");

        var data = new FormData();
        data.append('name', product_input);
        data.append('description', description_input);
        data.append('category', category_input);
        data.append('sku', sku_input);
        data.append('data_type', 'add_product');
        data.append('color', 1);
        data.append('image', image_input.files[0]);
        // send_data_files(data);

        // checking for variations

        var variation_radio = document.querySelector('#has_variations').checked;

        if (document.querySelector('#has_variations').checked) {
            for (let i = 1; i <= variation_no; i++) {
                data.append('variations', 1);

                var var_color = document.querySelector(`#color${i}`);
                var_color = var_color.value.trim();

                var var_sku = document.querySelector(`#sku${i}`);
                var_sku = var_sku.value.trim();

                var var_image = document.querySelector(`#image${i}`);
                var_image = var_image.files[0];

                
                var variation_data = new FormData();

                variation_data.append('name', product_input);
                variation_data.append('description', description_input);
                variation_data.append('category', category_input);
                variation_data.append('sku', var_sku);
                variation_data.append('data_type', 'add_product');
                variation_data.append('image', var_image);
                variation_data.append('variations', 1);
                variation_data.append('color', var_color);

                send_data_files(variation_data);
            }
        }
        send_data_files(data);

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
                    }
                    else {
                        alert(obj.message);
                    }
                }
                else
                    if (obj.data_type == "edit_product") {
                        alert(obj.message);
                    }
                    else
                        if (obj.data_type == "delete_row") {
                            alert(obj.message);
                        }
                        else
                            if (obj.data_type == "disable_row") {
                            }
            }
        }
    }
</script>

<?php $this->view("admin/footer", $data); ?>