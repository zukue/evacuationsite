<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
require './partials/head.php';
?>
<!-- Head End -->

<body>
  <!-- Preloader Starts -->
  <div class="preloader" id="preloader">
    <div class="preloader-inner">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Search PopUp Starts -->
  <?php
  require './partials/search-popup.php';
  ?>
  <!-- Search PopUp End -->

  <!-- Header Area Starts -->
  <header class="header-area">
    <!-- Info Bar -->
    <?php
    require './partials/info-bar.php';
    ?>

    <!-- Navbar Starts -->
    <?php
    require './partials/nav.php';
    ?>
    <!-- Navbar End -->

  </header>
  <!-- Header Area End -->

  <!-- Breadcrumb Area Starts -->
  <section class="breadcrumb-area" style="background-image: url('/assets/images/home-03/projects-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="title">contact us</h2>
          <ul>
            <li>home</li>
            <li><i class="fa fa-angle-right"></i></li>
            <li class="page-name">contact us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Area End -->

  <!-- Contact Area Starts -->
  <section class="contact-area padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-title">
            <h2 class="title">drop us a message</h2>
            <p class="title-paragraph margin-top-20">we're happy to discuss your project and answer any question</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="indurance-form-02">
            <form action="#">
              <input type="text" placeholder="Name">
              <input type="email" placeholder="Email">
              <input type="text" placeholder="Phone">
              <textarea name="message" placeholder="Your Message"></textarea>
              <button type="submit" class="template-btn">send message</button>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-widget-area">
            <div class="widget-nav-menu">
              <ul>
                <li>
                  <div class="address-part">
                    <div class="address-icon">
                      <i class="la la-map-marker"></i>
                    </div>
                    <div class="address-text">
                      <span>address</span> North caroline 1207 , Canda
                    </div>
                  </div>
                </li>
                <li>
                  <div class="call-us-part">
                    <div class="call-us-icon">
                      <i class="la la-phone-volume"></i>
                    </div>
                    <div class="call-us-text">
                      <span>call us</span> +91 458 654 528
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mail-part">
                    <div class="mail-us-icon">
                      <i class="la la-envelope-open"></i>
                    </div>
                    <div class="mail-us-text">
                      <span>send us mail</span> info@example.com
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Area End -->

  <!-- CTA Section Starts -->
  <!-- Footer Area Starts -->
  <!-- Back To Top Starts -->
  <!-- Javascript -->
  <!-- as footer -->
  <?php
  require './partials/footer.php';
  ?>
</body>

</html>