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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
          rel="stylesheet">

    <link rel="stylesheet" 
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
         
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap');
    /* @import url('https://fonts.googleapis.com/css2?family=Ysabeau:wght@200;300;400;500;600;700&display=swap'); */
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        
    }

    body{
        padding: 0;
        overflow-x: hidden;
        font-family: 'Lora', serif;
    }
    
    p {
        font-size: 18px;
        font-family: 'Lora', serif;
    }

    a{
        text-decoration: none;
        color: inherit;
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
    nav.shift ul li a {
    }
    nav.shift ul li a:hover:after {
       opacity: 1;
     visibility: visible;
     height: 100%;
    }

    /* .navbtn{
    cursor:pointer;
	position:relative;
	padding:5px 0px;
	background:white;
	font-size:17px;
	border-top-right-radius:5px;
	border-bottom-left-radius:5px;
	transition:all 1s;
	&:after,&:before{
		content:" ";
		width:10px;
		height:10px;
		position:absolute;
		border :0px solid #fff;
		transition:all 1s;
		}
	&:after{
		top:-1px;
		left:-1px;
		border-top:1px solid black;
		border-left:1px solid black;
	}
	&:before{
		bottom:-1px;
		right:-1px;
		border-bottom:1px solid black;
		border-right:1px solid black;
	}
	&:hover{
		border-top-right-radius:0px;
	    border-bottom-left-radius:0px;
		// background:rgba(0,0,0,.2);
		// color:;
		&:before,&:after{
			
			width:100%;
			height:100%;
			// border-color:white;
		}
	}
} */

.nav-link{
	/* color: #212121 !important; */
	font-weight: 500;
    transition: all 200ms linear;
}
.nav-item:hover .nav-link{
	color: black !important;
}
.nav-link {
	position: relative;
	padding: 5px 0 !important;
	display: inline-block;
}
.nav-item:after{
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 100%;
	height: 2px;
	content: '';
	background-color: black;
	opacity: 0;
    transition: all 200ms linear;
}
.nav-item:hover:after{
	bottom: 0;
	opacity: 1;
}
.nav-item{
	position: relative;
    transition: all 200ms linear;
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

    .display-1{
        font-weight: 700;
        font-size: 3.1rem;
    }
    .display-2{
        font-weight: 600;
        font-size: 2.9rem;
    }
    .display-3{
        font-weight: 500;
        font-size: 2.7rem;
    }
    .display-4{
        font-weight: 400;
        font-size: 2.5rem;
    }
    .display-5{
        
        font-size: 2.3rem;
    }
    .display-6{
        
        font-size: 2.1rem;
    }
</style>
</style>

<body>
    <header>
          <!-- Copyright -->
  <div class="p-3 text-black"
       style="background-color: rgb(36, 188, 189,0.5);">
      <i class="bi bi-geo-alt-fill"></i> <span>DSK Bath Solutions, GIDC Phase 3, Dared, Jamnagar, Gujrat-361004</span>
      <a href="tel: +917021632636" style="text-decoration: none; color:black; float:right;"> <i class="bi bi-telephone-plus-fill"></i> <span> 07021632636 </span></a>
  </div>
  <!-- Copyright -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shift p-3">
            <a class="navbar-brand"
               href="<?=ROOT?>"><img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png"
                         alt=""
                         srcset=""
                         class="img-fluid"
                         style="max-height:10vh;"></a>
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
                 id="navbarSupportedContent" style="padding-right: 5%;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-end active">
                        <a class="nav-link navbtn"
                           href="<?= ROOT ?>"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item text-end">
                        <a class="nav-link navbtn"
                           href="<?= ROOT . "about" ?>"> About</a>
                    </li>
                    <li class="nav-item text-end">
                        <a class="nav-link navbtn"
                           href="<?= ROOT . "product" ?>"> Product</a>
                    </li>
                    <li class="nav-item text-end">
                        <a class="nav-link navbtn"
                           href="<?= ROOT . "enquiry_cart" ?>"> Enquiry Cart</a>
                    </li>
                    <li class="nav-item text-end">
                        <a class="nav-link navbtn"
                           href="<?= ROOT . "contact" ?>"> Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>