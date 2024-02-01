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
  <section class="breadcrumb-area" style="background-image: url('assets/images/home-03/projects-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="title">latest blog</h2>
          <ul>
            <li>home</li>
            <li><i class="fa fa-angle-right"></i></li>
            <li class="page-name">latest blog</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Area End -->

  <!-- Blog Area Starts -->
  <div class="blog-area padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <article class="indurance-news-item">
            <div class="news-image">
              <img src="assets/images/blog/blog-image-01.jpg" alt="">
              <div class="news-date">
                <h5 class="title">23</h5>
                <span>sept</span>
              </div>
            </div>
            <div class="news-content">
              <div class="news-meta">
                <ul>
                  <li><a href="#"><i class="fa fa-user-o"></i>michel flark</a></li>
                  <li class="cats"><i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a></li>
                </ul>
              </div>
              <h5 class="title"><a href="#">Manufacturing industry became a key sector of production</a></h5>
              <p>indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out. </p>
            </div>
          </article>

          <article class="indurance-news-item">
            <div class="news-image">
              <img src="assets/images/blog/blog-image-02.jpg" alt="">
              <div class="news-date">
                <h5 class="title">23</h5>
                <span>sept</span>
              </div>
            </div>
            <div class="news-content">
              <div class="news-meta">
                <ul>
                  <li><a href="#"><i class="fa fa-user-o"></i>michel flark</a></li>
                  <li class="cats"><i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a></li>
                </ul>
              </div>
              <h5 class="title"><a href="#">Whole every miles as tiled at seven or he entire esteem mr oh by</a></h5>
              <p>indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out. </p>
            </div>
          </article>

          <article class="indurance-news-item">
            <div class="news-image">
              <img src="assets/images/blog/blog-image-03.jpg" alt="">
              <div class="news-date">
                <h5 class="title">23</h5>
                <span>sept</span>
              </div>
            </div>
            <div class="news-content">
              <div class="news-meta">
                <ul>
                  <li><a href="#"><i class="fa fa-user-o"></i>michel flark</a></li>
                  <li class="cats"><i class="fa fa-bookmark-o"></i> <a href="#">industry</a> , <a href="#">factory</a></li>
                </ul>
              </div>
              <h5 class="title"><a href="#">American countries during the Industrial Revolution</a></h5>
              <p>indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his. Charmed esteems luckily age out. </p>
            </div>
          </article>
        </div>
        <div class="col-lg-4">
          <aside class="widget-area sidebar">
            <div class="widget-search widget-style">
              <div class="widget-title">
                <h6 class="title">search posts</h6>
              </div>
              <form action="#">
                <input type="text" placeholder="Search" class="input-shape">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <div class="widget-recent-post widget-style">
              <div class="widget-title">
                <h6 class="title">recent posts</h6>
              </div>
              <div class="single-post">
                <div class="single-post-image">
                  <img src="assets/images/blog/post-image-01.jpg" alt="">
                </div>
                <div class="single-post-content">
                  <a href="#">Cupidatat non proident sunt culpa</a>
                  <span>05 Oct 2019</span>
                </div>
              </div>
              <div class="single-post">
                <div class="single-post-image">
                  <img src="assets/images/blog/post-image-02.jpg" alt="">
                </div>
                <div class="single-post-content">
                  <a href="#">Possible bed you pleasure civility</a>
                  <span>05 Oct 2019</span>
                </div>
              </div>
              <div class="single-post">
                <div class="single-post-image">
                  <img src="assets/images/blog/post-image-03.jpg" alt="">
                </div>
                <div class="single-post-content">
                  <a href="#">He prevent request by if in pleased</a>
                  <span>05 Oct 2019</span>
                </div>
              </div>
            </div>

            <div class="widget-social-links widget-style">
              <div class="widget-title">
                <h6 class="title">Follow us</h6>
              </div>
              <ul>
                <li><a href="#"><span class="facebook-icon"><i class="fa fa-facebook-square"></i></span></a></li>
                <li><a href="#"><span class="twitter-icon"><i class="fa fa-twitter-square"></i></span></a></li>
                <li><a href="#"><span class="google-plus-icon"><i class="fa fa-google-plus-square"></i></span></a></li>
                <li><a href="#"><span class="instagram-icon"><i class="fa fa-instagram"></i></span></a></li>
              </ul>
            </div>

            <div class="widget-categories widget-style">
              <div class="widget-title">
                <h6 class="title">categories</h6>
              </div>
              <ul>
                <li><i class="fa fa-angle-right"></i><a href="#">industry <span>(11)</span></a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">business <span>(02)</span></a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">construction <span>(0)</span></a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">factory <span>(231)</span></a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">estate <span>(45)</span></a></li>
              </ul>
            </div>

            <div class="widget-form">
              <div class="indurance-form-01">
                <h5 class="title">request a free quote</h5>
                <form action="#">
                  <input type="text" placeholder="Name">
                  <input type="email" placeholder="Email">
                  <input type="text" placeholder="Phone">
                  <textarea name="message" placeholder="Message"></textarea>
                  <button type="submit">submit request</button>
                </form>
              </div>
            </div>
          </aside>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="indurance-blog-pagination">
            <ul>
              <li><i class="fa fa-angle-left"></i></li>
              <li class="active"><span>1</span></li>
              <li><span>2</span></li>
              <li><i class="fa fa-angle-right"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Area End -->

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