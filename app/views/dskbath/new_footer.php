<style>
  .footer-cat {}

  .footer-cat li a {
    color: black;
    padding-top: 2%;
  }

  .footer-cat li a:hover {

    box-shadow: 0px 15px 20px rgba(36, 188, 189, 0.4);
    color: rgb(36, 188, 189);
    ;
    ;
    transform: translateY(-7px);
  }

  .social body {
    background: rgba(238, 238, 238, 255);
  }

  .social h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: normal;
    font-size: 25px;
    letter-spacing: 4px;
    padding: 20px 0 10px;
    color: rgb(36, 188, 189);
    text-align: center;

  }

  .social .Social-media {
    display: flex;
    justify-content: center;
  }

  .social a {
    display: flex;
    background-color: transparent;
    height: 45px;
    width: 45px;
    margin: 0 15px;
    border-radius: 8px;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 6px 6px 10px -1px rgba(0, 124, 196, 0.15),
      -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(0, 124, 196, 0);
    transition: transform 0.5s
  }

  .social a i {
    font-size: 50px color:#7A7;
    transition: transform 0.5s;
  }

  .social a:hover {
    box-shadow: inset 4px 4px 6px -2px rgba(0, 0, 0, 0.2),
      inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
      -0.5px -0.5px 0px -1px rgba(255, 255, 255, 1),
      0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
      0px 12px 10px -10px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 124, 196, 0.1);
    transform: translateY(2px);
  }

  .social a:hover i {
    transform: scale(0.90);
  }

  .social a:hover .fa-facebook {
    color: #3b5998;
  }

  .social a:hover .fa-twitter {
    color: #00acee;
  }

  .social a:hover .fa-whatsapp {
    color: #4fce5d;
  }

  .social a:hover .fa-instagram {
    color: #f14843;
  }

  .social a:hover .fa-youtube {
    color: #f00;
  }


  @media only screen and (max-width: 1200px) {
    .footer-cat {
      padding-left: 0;
    }
  }
</style>
<!-- Footer -->
<footer class="text-center text-white" style="width: 100vw;">
  <!-- Grid container -->
  <section id="">
    <div class="container-fluid mt-5">
      <!-- Section: Links -->
      <!--Grid row-->
      <div class="row justify-content-start">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 col-sm-12 pb-5" style="background-color:rgba(238,238,238,255)">
          <div class="footerlogo pb-3">
            <img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png" alt="DSK_LOGO" class="img-fluid"
              style=" height: 15vh; padding-top: 3vh; ">
          </div>
          <p style="" class="text-muted">DSK has wide range of bathroom products which are of High Standards, each of
            which has
            been designed and evolved through keen market study and 26 Years of Experience.</p>
          <a href="<?= ROOT ?>about"><button class="button" style="float: none;">Know More</button> <br></button></a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 col-sm-12 footerrow pb-3" style="background-color: #E5E5E5;">
          <h5 class="text-uppercase footer-cat-head pb-3 pt-3">Product Categories</h5>
          <ul class="list-unstyled mb-0 footer-cat" style="color:black;">
            <?php if (isset($categories) && is_array($categories)): ?>
              <?php foreach ($categories as $category):
                if ($category->parent > 0) {
                  continue;
                } ?>
                <li class="pb-1">
                  <a href="<?= ROOT . 'product/category/' . $category->category ?>" class=" text-decoration-none text-muted"
                    style="font-size:18px;"><?php
                    $replaced_str = str_replace("_", " ", $category->category);
                    echo ucwords($replaced_str) ?></a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 col-sm-12 pb-3" style="background-color:rgba(238,238,238,255);">
          <h5 class="text-uppercase pt-3 pb-3">Contact Us</h5>
          <p class="text-muted" style="color:black;">Factory:</p>
          <p class="text-muted" style="color:black;">DSK Bath Solutions, GIDC Phase 3, Dared, Jamnagar, Gujrat-361004.
          </p>
          <p class="text-muted" style="color:black;">Phone: 07021632636</p>
          <div class="social">
            <h1>Follow us</h1>
            <div class="Social-media">
              <a href="https://www.facebook.com/dskbathsolutions/">
                <font color="#0dcaf0"><i class="fab fa-facebook"></i></font>
              </a>
              <a href="new_index.php">
                <font color="#0dcaf0"><i class="fab fa-linkedin"></i></font>
              </a>
              <a href="https://www.instagram.com/dsk_bath/?hl=en">
                <font color="#0dcaf0"><i class="fab fa-instagram"></i></font>
              </a>
              <a href="new_index.php">
                <font color="#0dcaf0"><i class="fab fa-youtube"></i>
              </a></font>
            </div>
          </div>
        </div>

        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!-- Section: Links -->
    </div>
  </section>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-black" style="background-color: rgb(36, 188, 189);">
    © 2023 Copyright:
    <a class="text-black" href="<?= ROOT ?>"><b>DSKBath.com</b></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script>
  AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>