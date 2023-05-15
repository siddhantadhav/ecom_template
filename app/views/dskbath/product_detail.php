<?php $this->view("new_header", $data); ?>

<style>
    /*panel*/
    .panel {
        border: none;
        box-shadow: none;
    }

    .panel-heading {
        border-color: #eff2f7;
        font-size: 16px;
        font-weight: 300;
    }

    .panel-title {
        color: #2A3542;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 0;
        margin-top: 0;
        font-family: 'Poppins', sans-serif;
    }

    /*product list*/

    .prod-cat li a {
        border-bottom: 1px dashed #d9d9d9;
    }

    .prod-cat li a {
        color: #3b3b3b;
    }

    .prod-cat li ul {
        margin-left: 30px;
    }

    .prod-cat li ul li a {
        border-bottom: none;
    }

    .prod-cat li ul li a:hover,
    .prod-cat li ul li a:focus,
    .prod-cat li ul li.active a,
    .prod-cat li a:hover,
    .prod-cat li a:focus,
    .prod-cat li a.active {
        background: none;
        color: #ff7261;
    }

    .pro-lab {
        margin-right: 20px;
        font-weight: normal;
    }

    .pro-sort {
        padding-right: 20px;
        float: left;
    }

    .pro-page-list {
        margin: 5px 0 0 0;
    }

    .product-list img {
        width: 100%;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
    }

    .product-list .pro-img-box {
        position: relative;
    }

    .adtocart {
        background: #fc5959;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        color: #fff;
        display: inline-block;
        text-align: center;
        border: 3px solid #fff;
        left: 45%;
        bottom: -25px;
        position: absolute;
    }

    .adtocart i {
        color: #fff;
        font-size: 25px;
        line-height: 42px;
    }

    .pro-title {
        color: #5A5A5A;
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
    }

    .product-list .price {
        color: #fc5959;
        font-size: 15px;
    }

    .pro-img-details {
        
    }

    .pro-img-details img {
        margin-top: 5vh;
        border: 10px solid rgb(60, 183, 186);
    }

    .pro-d-title {
        font-size: 16px;
        margin-top: 0;
    }

    .product_meta {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 10px 0;
        margin: 15px 0;
    }

    .product_meta span {
        display: block;
        margin-bottom: 10px;
    }

    .product_meta a,
    .pro-price {
        color: #fc5959;
    }

    .pro-price,
    .amount-old {
        font-size: 18px;
        padding: 0 10px;
    }

    .amount-old {
        text-decoration: line-through;
    }

    .quantity {
        width: 120px;
    }

    .pro-img-list {
        margin: 10px 0 0 -15px;
        margin-bottom: 3vh;
        /* display: inline-block; */
    }

    .pro-img-list a {
        /* float: left; */
        margin-right: 10px;
        margin-bottom: ;
    }

    .pro-d-head {
        /* font-size: 18px;
        font-weight: 300; */
    }
    .bottom{
        border: 10px solid rgb(60, 183, 186);
        width: 50vw;
    }

    /* related */

    .dot {
        height: 25px;
        width: 25px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }
    
</style>
<?php if ($ROW):?>
    <div class="container bootdey mb-5">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <h1 class="text-center display-2" style="color: rgb(60, 183, 186);">Product Details | <?=$ROW->name?></h1>
                    <div class="row">
                        <div class="col-lg-10 col-md-12 text-center">
                            <div class="pro-img-details">
                                <img src="<?= ROOT . $ROW->image ?>"
                                     alt="dsk bath product" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mt-5">
                            <h2 class="display-5"><?= $ROW->name;?></h2>
                            <p class="text-muted"><?= $ROW->description ?></p>
                            <p class="text-muted">SKU: <?= $ROW->sku ?></p>
                            <div class="product_meta">
                                <span class="posted_in"> <strong>Category:</strong> <a rel="tag"
                                       href="<?=ROOT .'product/category/'. $category->category?>"><?= $category->category ?></a>
                                </span>
                                <span class="posted_in"> <strong>Color:</strong> 
                                    <a rel="tag" href="<?= ROOT .'product/color/'. $color->color ?>">
                                        <?php $replaced_str = str_replace("_", " ", $color->color); echo ucwords($replaced_str)  ?>
                                    </a>
                                </span>
                            </div>
                            <div>
                                <p>Available Colors: </p>
                                <?php if($ROW->variations > 0): ?>
                                    <?php $variations = $this->get_color_variations($ROW);?>
                                    <?php foreach($variations as $variation): ?>
                                        <?php $var_product = $this->get_slug_variations($ROW->name, $variation[0]->id); ?>
                                        <a href = "<?= ROOT . 'product_detail/'?><?=$var_product[0]->slug?>">
                                            <span class = 'dot' style="background-color : rgb(<?=$variation[0]->red?>, <?=$variation[0]->green?>, <?=$variation[0]->blue?>)"></span>
                                        </a>
                                    <?php endforeach;?>    
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                                <label class="display-5" style="color: rgb(60, 183, 186);">Quantity</label>
                                <input type="number"
                                       placeholder=""
                                       name="cart_qty_product_detail"
                                       id="cart_qty_product_detail"
                                       value="1"
                                       class="form-control quantity mt-3" style="border-radius: 10vh; width: 100%;">
                            </div>
                                <button class="btn btn-round btn-danger button mt-3" type="button" onclick="add_to_cart_product_detail(<?=$ROW->id?>,event)">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row mt-5">
                <h2 class="display-4 text-decoration-underline">Related Products</h2>
                <div class="row justify-content-start">
                    <?php foreach($related_products as $related_product): ?>
                        <!-- Single Product -->
                        <div class="col-lg-3 col-md-6 col-sm-12" style="border: 5px solid rgb(60, 183, 186); margin: 1vh;">
                            <a href="<?= ROOT . "product_detail/" ?><?= $related_product->slug ?>" class="text-decoration-none">
                                <div id="product-1" class="single-product">
                                    <div class="part-1">
                                        <img class="img-fluid" src="<?= ROOT . $related_product->image ?>" alt="Related product image">
                                        <hr style="border: 2px solid rgb(60, 183, 186);">
                                        <div class="part-2">
                                            <h3 class="product-title text-muted"
                                                style="font-size: 1.2rem;">
                                                <?= $related_product->name ?>
                                            </h3>
                                            <h4 class="text-muted"
                                                style="font-size: 1.2rem;"><?= $related_product->description ?></h4>
                                            <h6 class="text-muted">SKU: <?= $related_product->sku ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>      
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<?php else: ?>
    <div>Product Not Found</div>    
<?php endif; ?>

<script>
    function add_to_cart_product_detail(id,e) {
        var cart_qty_product_detail_input = document.querySelector("#cart_qty_product_detail");
        cart_qty_product_detail_input = cart_qty_product_detail_input.value.trim();
        var data = new FormData();
        data.append('id', id);
        data.append('quantity', cart_qty_product_detail_input);
        send_data(data);
    }

    function send_data(formdata) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
                        }

        });
        ajax.open("POST", "<?= ROOT ?>add_to_cart/add_to_cart_product_detail", true);
        ajax.send(formdata);
    }

    function handle_result(result){
        console.log(result);
        alert('Successfully added to cart');
    }

</script>

<?php $this->view("new_footer", $data); ?>