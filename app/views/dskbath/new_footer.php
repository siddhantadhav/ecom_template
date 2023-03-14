<style>
  .footer-cat{
    padding-left: 11vh;
  }

  .footer-cat li a{
    color: white
  }

  .footer-cat li a:hover{
    
      box-shadow: 0px 15px 20px rgba(36, 188, 189, 0.4);
      color: rgb(36, 188, 189);;;
      transform: translateY(-7px);
  }
  
  @media only screen and (max-width: 1200px) {
    .footer-cat{
      padding-left: 0;
    }
    .footer-cat-head{
      text-align: start;
    }
  
}
</style>
<!-- Footer -->

<footer class="bg-dark text-center text-white"
        style="width: 100vw;">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Links -->
    <section style="margin-top: 0;"
             class="">
      <!--Grid row-->
      <div class="row justify-content-start">
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-5">
          <div style="background-color: white; width: 15vh;">
            <img src="<?= ASSETS . THEME ?>images/DSK_LOGO.png"
                 alt=""
                 class="img-fluid"
                 style=" height: 10vh; ">
          </div>
          <p class="text-start"
             style="color: #eee;">DSK has wide range of bathroom products which are of High Standards, each of which has
            been designed and evolved through keen market study and 26 Years of Experience.</p>
          <a href="<?= ROOT ?>about"><button class="button button-footer">Know More</button> <br></button></a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-5">
          <h5 class="text-uppercase footer-cat-head">Product Categories</h5>
          <ul class="list-unstyled mb-0 footer-cat"
              style="">
            <?php if (isset($categories) && is_array($categories)): ?>
              <?php foreach ($categories as $category):
                if ($category->parent > 0) {
                  continue;
                } ?>
                <li class="text-start">
              <a href="<?=ROOT .'product/category/'. $category->category?>"
                 class=" text-decoration-none"><?php
                 $replaced_str = str_replace("_", " ", $category->category);
                 echo ucwords($replaced_str)?></a>
            </li>
              <?php endforeach; ?>
            <?php endif; ?>
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-5">
          <h5 class="text-uppercase text-start">Contact Us</h5>
          <p class="text-start">Factory:</p>
          <p class="text-start">DSK Bath Solutions, GIDC Phase 3, Dared, Jamnagar, Gujrat-361004.</p>
          <p class="text-start">Phone: 07021632636</p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white"
       href="<?= ROOT ?>">DSKBath.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>