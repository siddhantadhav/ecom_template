<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title><?= $data['page_title'] ?>| DSK BATH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?=ASSETS . THEME?>css/home.css">
</head>

<style>
    p{
        font-size: large;
        font-family: sans-serif;
    }
    
    section{
        margin-top: 10vh;
    }

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

    #sidebar {
        width: 20%;
        padding: 10px;
        margin: 0;
        margin-top: 10vh;
        float: left;
    }

    #products {
        width: 80%;
        padding: 10px;
        margin: 0;
        float: right;
    }

    ul {
        list-style: none;
        padding: 5px;
    }

    li {
        color: rgb(60, 183, 186);
    }

    li a {
        color: black;
        text-decoration: none;
        
    }

    li:hover {
        background-color: rgb(60, 183, 186);
    }

    li a:hover {
        color: black;
    }
    
    .fa-circle {
        font-size: 20px;
    }

    #red {
        color: #e94545d7;
    }

    #teal {
        color: rgb(69, 129, 129);
    }

    #blue {
        color: #0000ff;
    }

    .card {
        width: 250px;
        display: inline-block;
        height: 300px;
    }

    .card-img-top {
        width: 250px;
        height: 210px;
    }

    .card-body p {
        margin: 2px;
    }

    .card-body {
        padding: 0;
        padding-left: 2px;
    }

    .filter {
        display: none;
        padding: 0;
        margin: 0;
    }

    @media(min-width:991px) {
        .navbar-nav {
            margin-left: 35%;
        }

        .nav-item {
            padding-left: 20px;
        }

        .card {
            width: 190px;
            display: inline-block;
            height: 300px;
        }

        .card-img-top {
            width: 188px;
            height: 210px;
        }

        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:768px) and (max-width:991px) {
        .navbar-nav {
            margin-left: 20%;
        }

        .nav-item {
            padding-left: 10px;
        }

        .card {
            width: 230px;
            display: inline-block;
            height: 300px;
            margin-bottom: 10px;
        }

        .card-img-top {
            width: 230px;
            height: 210px;
        }

        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:568px) and (max-width:767px) {
        .navbar-nav {
            margin-left: 20%;
        }

        .nav-item {
            padding-left: 10px;
        }

        .card {
            width: 205px;
            display: inline-block;
            height: 300px;
            margin-bottom: 10px;
        }

        .card-img-top {
            width: 203px;
            height: 210px;
        }

        .fa-circle {
            font-size: 15px;
        }

        #mobile-filter {
            display: none;
        }
    }

    @media(max-width:567px) {
        .navbar-nav {
            margin-left: 0%;
        }

        .nav-item {
            padding-left: 10px;
        }

        #sidebar {
            width: 100%;
            padding: 10px;
            margin: 0;
            float: left;
        }

        #products {
            width: 100%;
            padding: 5px;
            margin: 0;
            float: right;
        }

        .card {
            width: 230px;
            display: inline-block;
            height: 300px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .card-img-top {
            width: 230px;
            height: 210px;
        }

        .list-group-item {
            padding: 3px;
        }

        .offset-1 {
            margin-left: 8%;
        }

        .filter {
            display: block;
            margin-left: 70%;
            margin-top: 2%;
        }

        #sidebar {
            display: none;
        }

        #mobile-filter {
            padding: 10px;
        }
    }

    .nav-item{
        font-size: 1.4rem;
    }
    .nav-link{
        color: rgb(60, 183, 186);
    }

    /* button */

    .button {
        /* width: 140px; */
        height: 5vh;
        padding: 2vh;
        font-family: sans-serif;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: white;
        background-color: rgb(60, 183, 186);
        border: none;
        border-radius: 45px;
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        float: left;
    }

    .button:hover {
        background-color: rgb(110, 110, 110);
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);
    }

    /* footer button */
    .button-footer {
        background-color: transparent;
    }

    .button-footer : hover {
        box-shadow: 0px 15px 20px rgba(112, 110, 110, 0.19)
    }

    
</style>
    </style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light mx-auto me-auto">
            <div class="container-fluid">
                <a class="navbar-brand"
                   href=""><img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png"
                         alt=""
                         srcset=""
                         class="img-fluid"
                         style="max-height:10vh"></a>
                <div class="collapse navbar-collapse justify-content-end"
                     id="navbarNavDropdown">
                    <ul class="navbar-nav " style="">
                        <li class="nav-item">
                            <a class="nav-link "
                               aria-current="page"
                               href="<?=ROOT?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?=ROOT."about"?>"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?=ROOT."product"?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?=ROOT. "contact"?>"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?=ROOT . "enquiry_cart"?>"><i class="fa fa-commenting" aria-hidden="true"></i> Enquiry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>