<?php $this->view("new_header", $data); ?>

<style>
    a,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    .section-products {
        padding: 80px 0 54px;
    }

    .section-products .header {
        margin-bottom: 50px;
    }

    .section-products .header h3 {
        font-size: 1rem;
        color: #fe302f;
        font-weight: 500;
    }

    .section-products .header h2 {
        font-size: 2.2rem;
        font-weight: 400;
        color: #444444;
    }

    .section-products .single-product {
        margin-bottom: 26px;
    }

    .section-products .single-product .part-1 {
        position: relative;
        height: 290px;
        max-height: 290px;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .section-products .single-product .part-1::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        transition: all 0.3s;
    }

    .section-products .single-product:hover .part-1::before {
        transform: scale(1.2, 1.2) rotate(5deg);
    }

    .section-products #product-1 .part-1::before {
        transition: all 0.3s;
    }

    .section-products .single-product .part-1 .discount,
    .section-products .single-product .part-1 .new {
        position: absolute;
        top: 15px;
        left: 20px;
        color: #ffffff;
        background-color: #fe302f;
        padding: 2px 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .section-products .single-product .part-1 .new {
        left: 0;
        background-color: #444444;
    }

    .section-products .single-product .part-1 ul {
        position: absolute;
        bottom: -41px;
        left: 20px;
        margin: 0;
        padding: 0;
        list-style: none;
        opacity: 0;
        transition: bottom 0.5s, opacity 0.5s;
    }

    .section-products .single-product:hover .part-1 ul {
        bottom: 30px;
        opacity: 1;
    }

    .section-products .single-product .part-1 ul li {
        display: inline-block;
        margin-right: 4px;
    }

    .section-products .single-product .part-1 ul li a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        background-color: #ffffff;
        color: #444444;
        text-align: center;
        box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
        transition: color 0.2s;
    }

    .section-products .single-product .part-1 ul li a:hover {
        color: #fe302f;
    }

    .section-products .single-product .part-2 .product-title {
        font-size: 1rem;
    }

    .section-products .single-product .part-2 h4 {
        display: inline-block;
        font-size: 1rem;
    }

    .section-products .single-product .part-2 .product-old-price {
        position: relative;
        padding: 0 7px;
        margin-right: 2px;
        opacity: 0.6;
    }

    .section-products .single-product .part-2 .product-old-price::after {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: #444444;
        transform: translateY(-50%);
    }

    /* sidebar */

    
</style>

<div class="">
    <img style="height: 80vh; width: 100%;" src="<?=ASSETS .THEME?>images/home/slider/ambience.jpg" alt="" class="img-fluid">
</div>

<div class="filter">
    <button class="btn btn-default"
            type="button"
            data-toggle="collapse"
            data-target="#mobile-filter"
            aria-expanded="false"
            aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<!-- for mobile -->
<div id="mobile-filter">
    <div>
        <h6 class="p-1 border-bottom">Categories</h6>
        <ul>
            <li><a href="#">Living</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Bedroom</a></li>
            <li><a href="#">Kitchen</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        <p class="mb-2">Color</p>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="red"></span>Red
                </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="teal"></span>Teal
                </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="blue"></span>Blue
                </a></li>
        </ul>
    </div>

</div>

<!-- for bigger screens -->
<section id="sidebar">
    <div>
        <h6 class="p-1 border-bottom">Categories</h6>
        <ul>
            <li class="active"><a href="#">Living</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Bedroom</a></li>
            <li><a href="#">Kitchen</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filter By</h6>
        <p class="mb-2">Color</p>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="red"></span>Red
                </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="teal"></span>Teal
                </a></li>
            <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                    <span class="fa fa-circle pr-1"
                          id="blue"></span>Blue
                </a></li>
        </ul>
    </div>
</section>



<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2>All Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            <?php if (is_array($ROWS)): ?>
                <?php foreach ($ROWS as $row): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>">
                            <div id="product-1"
                                 class="single-product">
                                <div class="part-1">
                                    <img class="img-fluid"
                                         src="<?= ROOT . $row->image ?>"
                                         alt="">
                        </a>
                        <ul>
                            <li><a href="<?= ROOT ?>add_to_cart/<?= $row->id ?>"
                                   onclick="send_alert(event)"
                                   id="cart_btn"><i class="fa fa-shopping-cart"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-plus"></i></a></li> -->
                            <li><a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title"><?= $row->name ?></h3>
                        <h4><?= $row->description ?></h4>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <!-- Single Product -->
    </div>
    </div>
</section>

<script>
    function send_alert(e) {
        var cart_btn = document.querySelector("#cart_btn");
        alert("Successfully Added to Cart");
    }
</script>

<?php $this->view("new_footer", $data); ?>