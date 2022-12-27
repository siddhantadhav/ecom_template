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

<body>

    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand"
                   href=""><img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png"
                         alt=""
                         srcset=""
                         class="img-fluid"
                         style="max-height:10vh"></a>
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end"
                     id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active"
                               aria-current="page"
                               href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               href="#"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false"> <i class="fa fa-list-ul" aria-hidden="true"></i>
                                Catalogue
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="#">Action</a></li>
                                <li><a class="dropdown-item"
                                       href="#">Another action</a></li>
                                <li><a class="dropdown-item"
                                       href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#"><i class="fa fa-commenting" aria-hidden="true"></i> Enquiry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>