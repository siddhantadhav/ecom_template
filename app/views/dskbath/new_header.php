<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>
        <?= $data['page_title'] ?>| DSK BATH
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet"
          href="<?= ASSETS . THEME ?>css/home.css">
</head>

<style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
        padding: 0;
        overflow-x: hidden;
    }
    
    p {
        font-size: 20px;
        font-family: sans-serif;
    }

    section {
        margin-top: 10vh;
    }

    .nav-item {
        font-size: 1.2rem;
    }

    .nav-link {
        color: rgb(60, 183, 186);
    }
    
    /*______________________*/
    
    nav {
         width: 100%;
         margin: 0 auto;
         background: #fff;
         padding: 50px 0;
          box-shadow: 0px 5px 0px #dedede;
        }
   nav ul {
          list-style: none;
          text-align: center;
       }
  nav ul li {
          display: inline-block;
        }
 nav ul li a {
          display: block;
          padding: 15px;
          text-decoration: none;
          color: #aaa;
          font-weight: 100;
           text-transform: uppercase;
          margin: 0 10px;
        }
    nav ul li a,
    nav ul li a:after,
    nav ul li a:before {
            transition: all .5s;
         }
    nav ul li a:hover {
          color: #2596be;
         }

    nav.shift ul li a {
      position:relative;
     z-index: 1;
    }
   nav.shift ul li a:hover {
       color: #27bdbe;
   }
    nav.shift ul li a:after {
         display: block;
         position: absolute;
         top: 0;
         left: 0;
         bottom: 0;
          right: 0;
         margin: auto;
         width: 100%;
         height: 1px;
         content: '.';
         color: transparent;
         background: #ffffff;
         visibility: none;
         opacity: 0;
         z-index: -1;
    }
    nav.shift ul li a:hover:after {
       opacity: 1;
     visibility: visible;
     height: 100%;
    }
    

    /* button */

    .button {
        /* width: 140px; */
        /* height: 5vh; */
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light shift">
            <a class="navbar-brand"
               href="<?=ROOT?>"><img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png"
                         alt=""
                         srcset=""
                         class="img-fluid"
                         style="max-height:10vh; margin-left: 20%;"></a>
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end"
                 id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-end pe-3 active">
                        <a class="nav-link"
                           href="<?= ROOT ?>"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item text-end pe-3">
                        <a class="nav-link"
                           href="<?= ROOT . "about" ?>"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a>
                    </li>
                    <li class="nav-item text-end pe-3">
                        <a class="nav-link"
                           href="<?= ROOT . "product" ?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Product</a>
                    </li>
                    <li class="nav-item text-end pe-3">
                        <a class="nav-link"
                           href="<?= ROOT . "enquiry_cart" ?>"><i class="fa fa-commenting" aria-hidden="true"></i> Enquiry Cart</a>
                    </li>
                    <li class="nav-item text-end pe-3">
                        <a class="nav-link"
                           href="<?= ROOT . "contact" ?>"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>