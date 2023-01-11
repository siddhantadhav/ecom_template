<?php $this->view("new_header", $data); ?>

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
        <h6 class="p-1 border-bottom display-6">Categories</h6>
        <ul>
            <li class="active"><a href="#">Living</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Bedroom</a></li>
            <li><a href="#">Kitchen</a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom display-6">Filter By</h6>
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



<section class="section-products" style="margin-top: 0; padding-top: 0;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                    <h2 class="display-1 bold" style="text-decoration: underline;">All Products</h2>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            <?php if (is_array($ROWS)): ?>
                <?php foreach ($ROWS as $row): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3" style="border: 5px solid rgb(60, 183, 186); margin: 2vh;">
                        <a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>">
                            <div id="product-1"
                                 class="single-product">
                                <div class="part-1">
                                    <img class="img-fluid"
                                         src="<?= ROOT . $row->image ?>"
                                         alt="">
                        </a>
                        <hr style="border: 2px solid rgb(60, 183, 186);">
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
                        <h3 class="product-title text-muted" style="font-size: 1.2rem;"><?= $row->name ?></h3>
                        <h4 class="text-muted" style="font-size: 1.2rem;"><?= $row->description ?></h4>
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