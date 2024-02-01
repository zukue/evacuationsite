<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php
require './partials/head.php';
?>
<!-- Head End -->

<body>
  <!-- Preloader Starts -->
  <?php
  require './partials/preloader.php';
  ?>
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
          <h2 class="title">our projects</h2>
          <ul>
            <li>home</li>
            <li><i class="fa fa-angle-right"></i></li>
            <li class="page-name">our projects</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Area End -->

  <section class="project-area padding-top-115 padding-bottom-90">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="indurance-project-tab">
            <ul>
              <li class="active" data-filter="*">All</li>
              <li data-filter=".industry">industry</li>
              <li data-filter=".factory">factory</li>
              <li data-filter=".engineering">engineering</li>
              <li data-filter=".mining">mining</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row grid">
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item factory">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-01.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item engineering">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-02.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item industry">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-03.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item mining">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-04.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item industry">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-05.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item mining">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-06.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item factory">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-07.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item engineering">
          <div class="indurance-project-item">
            <div class="project-image">
              <img src="/assets/images/home-01/project-image-08.jpg" alt="">
            </div>
            <div class="hover-state">
              <div class="hover-state-content">
                <h6 class="title">project name</h6>
                <span>company title</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section Starts -->
  <?php
  require './partials/testimonial.php';
  ?>
  <!-- Testimonial Section End -->

  <!-- Partners Section Starts -->
  <?php
  require './partials/partners.php';
  ?>
  <!-- Partners Section End -->

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