<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <!--swiper css link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts -->
    <section class="header">
      <a href="home.php" class="logo">travel.</a>
      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->
    <!-- home section starts -->
    <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide"
            style="background: url(images/home-slide-1.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>travel around the world</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide"
            style="background: url(images/home-slide-2.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>discover the new places</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>

          <div
            class="swiper-slide"
            style="background: url(images/home-slide-3.jpg) no-repeat"
          >
            <div class="content">
              <span>explore, discover, travel</span>
              <h3>make your tour worthwhile</h3>
              <a href="package.php" class="btn">discover more</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
      <h1 class="heading-title">our services</h1>
      <div class="box-container">
        <div class="box">
          <img src="images/icon-1.png" alt="" />
          <h3>adventure</h3>
        </div>

        <div class="box">
          <img src="images/icon-2.png" alt="" />
          <h3>tour guide</h3>
        </div>

        <div class="box">
          <img src="images/icon-3.png" alt="" />
          <h3>trekking</h3>
        </div>

        <div class="box">
          <img src="images/icon-4.png" alt="" />
          <h3>camp fire</h3>
        </div>

        <div class="box">
          <img src="images/icon-5.png" alt="" />
          <h3>off road</h3>
        </div>

        <div class="box">
          <img src="images/icon-6.png" alt="" />
          <h3>camping</h3>
        </div>
      </div>
    </section>

    <!-- services section ends -->
    <!-- home about section starts -->
    <section class="home-about">
      <!-- <div class="image">
          <img src="images/about-img.jpg" alt="">
        </div> -->
      <div class="content">
        <h3>about us</h3>
        <p>
          At Travel., we’re passionate about creating unforgettable travel experiences tailored just for you. Join us as we explore the world’s wonders, one adventure at a time, with expert guidance and personalized service every step of the way! Discover new cultures, breathtaking landscapes, and make memories that will last a lifetime!
        </p>
        <a href="about.php" class="btn">read more</a>
      </div>
    </section>
    <!-- home about section ends -->

    <!-- home packages section starts -->

    <section class="home-packages">
      <h1 class="heading-title">our packages</h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/img-1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>
              Experience thrilling adventures and unforgettable tours that ignite your wanderlust and create lasting memories!
            </p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-2.jpg" alt="" />
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>
              Discover breathtaking landscapes and immerse yourself in new cultures on our expertly guided adventures!
            </p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-3.jpg" alt="" />
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>
              Unleash your inner explorer with our diverse range of tours designed for every adventurer at heart!
            </p>
            <a href="book.php" class="btn">book now</a>
          </div>
        </div>
      </div>
      <div class="load-more">
        <a href="package.php" class="btn">load more</a>
      </div>
    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts -->

    <section class="home-offer">
      <div class="content">
        <h3>upto 50% off</h3>
        <p>
          Save up to 50% on your next adventure! Don’t miss this chance to explore amazing destinations at unbeatable prices—book now and start your journey!
        </p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </section>

    <!-- home offer section ends -->

    <!-- footer section Starts -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
          <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
          <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
          <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
          <a href="#"><i class="fas fa-angle-right"></i> about us</a>
          <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
          <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
          <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
          <a href="#"
            ><i class="fas fa-envelope"></i> ambikavishnoi@gmail.com</a
          >
          <a href="#"><i class="fas fa-map"></i> indore, india - 400104</a>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
          <a href="#"><i class="fab fa-twitter"></i>twitter</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram</a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
      </div>
      <div class="credit">
        created by <span> Ambika Vishnoi </span>| all rights reserved!
      </div>
    </section>
    <!-- footer section Ends -->

    <!--swiper js link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
  </body>
</html>
