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

    .section-products .product-box {
        border: 2px solid rgb(60, 183, 186);
        transition: all .5s ease-in-out;
    }

    .section-products .product-box:hover {
        box-shadow: rgba(0, 0, 0, 0.4) 0px 3px 8px;
        /* border: none; */
        transform: scale(1.05);
    }

    .section-products .single-product .part-1 {
        position: relative;
        height: 290px;
        max-height: 290px;
        /* margin-bottom: 20px; */
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
        color: #24bcbd;
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
    <img style="width: 100%;"
         src="<?= ASSETS . THEME ?>images/home/slider/ambience.jpg"
         alt="dsk bathroom ambience"
         class="img-fluid">
</div>

<div class="container-fluid">
    <div class="row">
        <a class="d-lg-none d-md-none text-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="color: rgb(24 149 150);"><i class="fa fa-2x fa-sliders"></i></a>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title display-5" id="offcanvasWithBothOptionsLabel" style="">Categories</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start align-items-sm-start" id="menu">
                        <?php if (isset($categories) && is_array($categories)): ?>
                            <?php foreach ($categories as $category):
                                if ($category->parent > 0) {
                                    continue;
                                }
                                $parents = array_column($categories, "parent");?>
                            
                                <!-- Category with child  -->
                                <li>
                                    <a href="<?=in_array($category->id, $parents) ? '#' . $category->category : ROOT .'product/category/'. $category->category?>" data-bs-toggle="collapse"  aria-expanded="false" class="nav-link px-0 align-middle text-black"
                                    <?php if(!in_array($category->id, $parents)): ?> 
                                        onclick = "window.open(this.href,'_self')"
                                    <?php endif; ?> > 
                                    <?php $replaced_str = str_replace('_', ' ', $category->category);
                                        echo ucwords($replaced_str);
                                    ?>
                                    <?php if(in_array($category->id, $parents)): ?>
                                        <span class="ms-1 d-none d-sm-inline">  </span><i class="fa fa-plus"></i>
                                    <?php endif; ?>
                                    </a>

                                    <?php if(in_array($category->id, $parents)): ?>
                                    <ul class="collapse nav flex-column ms-1" id="<?=$category->category?>" data-bs-parent="#menu">  
                                        <li class="w-100">
                                            <a href="<?=ROOT .'product/category/'. $category->category?>" class="nav-link px-0 display-2"> <span class="d-sm-inline text-black">All Products</span></a>
                                            <?php foreach ($categories as $sub_cat): ?>
                                                <?php if ($sub_cat->parent == $category->id): ?>
                                                    <a href="<?=ROOT .'product/category/'. $category->category.'/'.$sub_cat->category?>" class="nav-link px-0 text-black"> <span class="d-sm-inline"><?php $sub_cat->category = str_replace('_', ' ', $sub_cat->category); echo ucwords($sub_cat->category)?></span></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>

                    <a href="/"
                   class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none text-black ">
                    <span class="fs-5 d-sm-inline sidebar_heading"><h2 class="display-5">Colors</h2></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start align-items-sm-start"
                    id="menu">
                    <?php if (isset($colors) && is_array($colors)): ?>
                        <?php foreach ($colors as $color): ?>
                            <li>
                                <a href="<?= ROOT .'product/color/'. $color->color ?>"
                                   data-bs-toggle="collapse"
                                   onclick = "window.open(this.href,'_self')"
                                   class="nav-link px-0 align-middle text-muted">
                                   
                                   <span class="dot " style="background-color: rgb(<?=$color->red?>, <?=$color->green?>, <?=$color->blue?>);"></span>
                                    <span class="ms-1 d-sm-inline align-self-start">
                                        <?php $replaced_stri = str_replace("_", " ", $color->color); echo strtoupper($replaced_stri) ?>
                                    </span>
                                </a>
                                </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
        </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-12 d-none d-lg-block d-md-block" id="sidebar_collapse">
            <!-- category -->
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <span class="fs-5 d-sm-inline text-black " ><h2 class="display-4">Categories</h2> </span>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <?php if (isset($categories) && is_array($categories)): ?>
                            <?php foreach ($categories as $category):
                                if ($category->parent > 0) {
                                    continue;
                                }
                                $parents = array_column($categories, "parent");?>
                            
                                <!-- Category with child  -->
                                <li>
                                    <a href="<?=in_array($category->id, $parents) ? '#' . $category->category : ROOT .'product/category/'. $category->category?>" data-bs-toggle="collapse"  aria-expanded="false" class="nav-link px-0 align-middle text-muted"
                                    <?php if(!in_array($category->id, $parents)): ?> 
                                        onclick = "window.open(this.href,'_self')"
                                    <?php endif; ?> > 
                                    <?php $replaced_str = str_replace('_', ' ', $category->category);
                                        echo ucwords($replaced_str);
                                    ?>
                                    <?php if(in_array($category->id, $parents)): ?>
                                        <span class="ms-1 d-none d-sm-inline">  </span><i class="fa fa-plus"></i>
                                    <?php endif; ?>
                                    </a>

                                    <?php if(in_array($category->id, $parents)): ?>
                                    <ul class="collapse nav flex-column ms-1" id="<?=$category->category?>" data-bs-parent="#menu">  
                                        <li class="w-100">
                                            <a href="<?=ROOT .'product/category/'. $category->category?>" class="nav-link px-0 "> <span class="d-sm-inline text-black">All Products</span></a>
                                            <?php foreach ($categories as $sub_cat): ?>
                                                <?php if ($sub_cat->parent == $category->id): ?>
                                                    <a href="<?=ROOT .'product/category/'. $category->category.'/'.$sub_cat->category?>" class="nav-link px-0 text-black"> <span class="d-sm-inline"><?php $sub_cat->category = str_replace('_', ' ', $sub_cat->category); echo ucwords($sub_cat->category)?></span></a>
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
            <!-- color -->
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/"
                   class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-decoration-none text-black ">
                    <span class="fs-5 d-sm-inline sidebar_heading"><h2 class="display-4">Colors</h2></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">
                    <?php if (isset($colors) && is_array($colors)): ?>
                        <?php foreach ($colors as $color): ?>
                            <li>
                                <a href="<?= ROOT .'product/color/'. $color->color ?>"
                                   data-bs-toggle="collapse"
                                   onclick = "window.open(this.href,'_self')"
                                   class="nav-link px-0 align-middle text-muted">
                                   
                                   <span class="dot " style="background-color: rgb(<?=$color->red?>, <?=$color->green?>, <?=$color->blue?>);"></span>
                                    <span class="ms-1 d-sm-inline align-self-start">
                                        <?php $replaced_stri = str_replace("_", " ", $color->color); echo strtoupper($replaced_stri) ?>
                                    </span>
                                </a>
                                </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <hr>
            </div>
        </div>

        

        <!-- product -->
        <div class="col">
            <section class="section-products" style="margin-top: 0; padding-top: 0;">
                <div class="container pb-4">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                            <h2 class="display-2 pt-2">All Products</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <!-- Single Product -->
                        <?php if (isset($ROWS) && is_array($ROWS)): ?>
                            <?php foreach ($ROWS as $row): ?>
                                <div class="col-md-6 col-lg-4 col-xl-3 product-box" style="margin: 2vh; padding:0px;">
                                    <a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>">
                                        <div id="product-1" class="single-product">
                                            <div class="part-1">
                                                <img class="img-fluid" src="<?= ROOT . $row->image ?>" alt="product image">
                                    </a>
                                    <hr style="border: 2px solid rgb(60, 183, 186);">
                                    <ul>
                                        <li><a href="<?= ROOT ?>add_to_cart/<?= $row->id ?>" onclick="send_alert(event)" id="cart_btn"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="<?= ROOT . "product_detail/" ?><?= $row->slug ?>"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>
                                <div class="part-2" style="padding:12px">
                                    <h3 class="product-title text-muted" style="font-size: 1.2rem;"><?= $row->name ?></h3>
                                    <h4 class="text-muted" style="font-size: 1.2rem;"><?= $row->description ?></h4>
                                    <h6 class="text-muted">SKU: <?= $row->sku ?></h6>
                                </div>
                                <div style="padding:12px">
                                    <?php if($row->variations >0): ?> 
                                        <?php $variations = $this->get_color_variations($row); ?>
                                        <?php foreach ($variations as $varcolor): ?>
                                            <?php $var_product = $this->get_slug_variations($row->name, $varcolor[0]->id);?>
                                                <a href = "<?= ROOT . 'product_detail/'?><?=$var_product[0]->slug?>"> <span class = 'dot' style="background-color : rgb(<?=$varcolor[0]->red?>, <?=$varcolor[0]->green?>, <?=$varcolor[0]->blue?>)"></span> </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Single Product -->
                </div>
                <!-- pagination -->
                <?php Page::show_links()?>

                
                </div>
            </section>
        </div>
        <!-- product end -->
        
    </div>
</div>




<script>
    function send_alert(e) {
        var cart_btn = document.querySelector("#cart_btn");
        alert("Successfully Added to Cart");
    }
</script>

<?php $this->view("new_footer", $data); ?>