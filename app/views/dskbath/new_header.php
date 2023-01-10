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

<style>#sidebar {
        width: 20%;
        padding: 10px;
        margin: 0;
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
        color: rgb(110, 110, 110);
    }

    li a {
        color: inherit;
        text-decoration: none;
    }

    li:hover {
        background-color: rgb(60, 183, 186);
        color: white;
    }

    li a:hover {
        text-decoration: none;
        color: inherit;
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
    
    
    .nav-item a {
        font-size: 1.2em;
    }
    section{
        margin-top: 10vh;
    }
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