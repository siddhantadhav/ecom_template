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
    .dot {
        height: 25px;
        width: 25px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }
    
</style>

<div class="">
    <img style="height: 80vh; width: 100%;"
         src="<?= ASSETS . THEME ?>images/home/slider/ambience.jpg"
         alt=""
         class="img-fluid">
</div>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <span class="fs-5 d-sm-inline text-black " ><h2 class="display-5">Categories</h2> </span>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <?php if (isset($categories) && is_array($categories)): ?>
                                <?php foreach ($categories as $category):
                                    if ($category->parent > 0) {
                                        continue;
                                    }
                                    $parents = array_column($categories, "parent");?>
                                
                                <!-- Category with child  -->
                                <li>
                                    <a href="<?=in_array($category->id, $parents) ? '#' . $category->category : ROOT .'product/category/'. $category->category?>" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-black" 
                                    <?php if(!in_array($category->id, $parents)): ?> 
                                        onclick = "window.open(this.href,'_self')"
                                    <?php endif; ?>> 
                                    <?php $replaced_str = str_replace('_', ' ', $category->category);
                                        echo $replaced_str;
                                    ?>
                                    <?php if(in_array($category->id, $parents)): ?>
                                        <span class="ms-1 d-none d-sm-inline">  </span><i class="fa fa-plus"></i>
                                    <?php endif; ?>
                                    </a>

                                    <?php if(in_array($category->id, $parents)): ?>
                                    <ul class="collapse show nav flex-column ms-1" id="<?=$category->category?>" data-bs-parent="#menu">  
                                        <li class="w-100">
                                            <a href="<?=ROOT .'product/category/'. $category->category?>" class="nav-link px-0 "> <span class="d-sm-inline text-black">All Products</span></a>
                                            <?php foreach ($categories as $sub_cat): ?>
                                                <?php if ($sub_cat->parent == $category->id): ?>
                                                    <a href="<?=ROOT .'product/category/'. $category->category.'/'.$sub_cat->category?>" class="nav-link px-0 text-black"> <span class="d-sm-inline"><?php $sub_cat->category = str_replace('_', ' ', $sub_cat->category); echo $sub_cat->category?></span></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                <hr>
            </div>
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/"
                   class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none text-black ">
                    <span class="fs-5 d-sm-inline sidebar_heading"><h2 class="display-5">Colors</h2></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <?php if (isset($colors) && is_array($colors)): ?>
                        <?php foreach ($colors as $color): ?>
                            <li>
                                <a href="<?= ROOT .'product/color/'. $color->color ?>"
                                   data-bs-toggle="collapse"
                                   onclick = "window.open(this.href,'_self')"
                                   class="nav-link px-0 align-middle text-black">
                                   
                                   <span class="dot " style="background-color: rgb(<?=$color->red?>, <?=$color->green?>, <?=$color->blue?>);"></span>
                                    <span class="ms-1 d-sm-inline align-self-start">
                                        <?php $replaced_stri = str_replace("_", " ", $color->color); echo ucwords($replaced_stri) ?>
                                    </span>
                                </a>
                                </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <hr>

            </div>
        </div>

        <div class="col py-3">
            <section class="section-products" style="margin-top: 0; padding-top: 0;">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                            <h2 class="display-1 bold" style="text-decoration: underline;">All Products</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Single Product -->
                        <?php if (isset($ROWS) && is_array($ROWS)): ?>
                            <?php foreach ($ROWS as $row): ?>
                                <div class="col-md-6 col-lg-4 col-xl-3" style="border: 5px solid rgb(60, 183, 186); margin: 2vh;">
                                    <a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>">
                                        <div id="product-1" class="single-product">
                                            <div class="part-1">
                                                <img class="img-fluid" src="<?= ROOT . $row->image ?>" alt="">
                                    </a>
                                    <hr style="border: 2px solid rgb(60, 183, 186);">
                                    <ul>
                                        <li><a href="<?= ROOT ?>add_to_cart/<?= $row->id ?>" onclick="send_alert(event)" id="cart_btn"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>

                                <div class="part-2">
                                    <h3 class="product-title text-muted" style="font-size: 1.2rem;"><?= $row->name ?></h3>
                                    <h4 class="text-muted" style="font-size: 1.2rem;"><?= $row->description ?></h4>
                                    <h6 class="text-muted">SKU: <?= $row->sku ?></h6>
                                    <?php if($row->variations >= 1): ?>
                                        <?php // foreach ($parent_child as $pc): ?> 
                                             <!-- find all variations from array -->
                                            <?php // foreach($pc as $pc1): ?>
                                                <?php // if($pc1->id == $row->id): {
                                                    // $count_col = (count($pc));
                                                    // break;
                                                    // }
                                                ?> 
                                                
                                            <?php //endforeach; ?>    
                                        <?php //endforeach; ?>
                                        
                                        <?php foreach($parent_child as $pc): ?>
                                            <?php foreach($pc as $mini_pc): ?>
                                                <?php if($mini_pc->id == $row->id) {
                                                    $count_col = (count($pc));
                                                    break;
                                                } ?>  
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                        <div>
                                            <?php for($i=0; $i<$count_col; $i++): ?>
                                                <span class="dot " style="background-color: black;"></span>
                                            <?php endfor ?>
                                        <?php show($pc) ?>
                                        </div>                
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Single Product -->
                    </div>
                </div>
            </section>
        </div>


<script>
    function send_alert(e) {
        var cart_btn = document.querySelector("#cart_btn");
        alert("Successfully Added to Cart");
    }
</script>

<?php $this->view("new_footer", $data); ?>