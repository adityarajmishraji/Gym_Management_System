<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mishra - Gym</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--- custom css link -->
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
  <!-- 
    - google font link
  -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
    rel="stylesheet"> -->
  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
  <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
  <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
  <link rel="preload" as="image" href="./assets/images/calories.svg">
  <style>
    html {
      font-size: 54%;
    }
  </style>
</head>

<body id="top">
  <?php include('./shortcuts/header.php');  ?>
  <main>
    <article>
      <section class="section hero bg-dark has-after has-bg-image main-sections" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <strong class="strong">The Best</strong>Fitness Club
            </p>

            <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

            <p class="section-text">
              Duis mollis felis quis libero dictum vehicula. Duis dictum lorem mi, a faucibus nisi eleifend eu.
            </p>

            <a href="#" class="btn btn-primary">Get Started</a>

          </div>

          <div class="hero-banner">

            <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-1">
            <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
              class="circle circle-2">

            <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
              class="abs-img abs-img-1">
            <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner has-after">
            <img src="./assets/images/about-banner.png" width="660" height="648" loading="lazy" alt="about banner"
              class="w-100">

            <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-1">
            <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true"
              alt="" class="circle circle-2">

            <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness"
              class="abs-img w-100">
          </div>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Welcome To Our Fitness Gym</h2>

            <p class="section-text">
              Nam ut hendrerit leo. Aenean vel ipsum nunc. Curabitur in tellus vitae nisi aliquet dapibus non et erat.
              Pellentesque
              porta sapien non accumsan dignissim curabitur sagittis nulla sit amet dolor feugiat.
            </p>

            <p class="section-text">
              Integer placerat vitae metus posuere tincidunt. Nullam suscipit ante ac aliquet viverra vestibulum ante
              ipsum primis.
            </p>

            <div class="wrapper">

              <div class="about-coach">

                <figure class="coach-avatar">
                  <img src="./assets/images/about-coach.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                </figure>

                <div>
                  <h3 class="h3 coach-name">Denis Robinson</h3>

                  <p class="coach-title">Our Coach</p>
                </div>

              </div>

              <a href="#" class="btn btn-primary">Explore More</a>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="section video" aria-label="video">
        <div class="container">

          <div class="video-card has-before has-bg-image"
            style="background-image: url('./assets/images/video-banner.jpg')">

            <h2 class="h2 card-title">Explore Fitness Life</h2>

            <button class="play-btn" aria-label="play video">
              <a href="./assets/images/gym-video.mp4"> <i class="fas fa-play"></i></a>
            </button>

            <a href="./assets/images/gym-video.mp4" class="btn-link has-before">Watch More</a>

          </div>

        </div>
      </section>





      <!-- 
        - #CLASS
      -->

      <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container">

          <p class="section-subtitle">Our Classes</p>

          <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="classes.php" class="card-title">Weight Lifting</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">85%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 85%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="classes.php" class="card-title">Cardio & Strenght</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">70%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="classes.php" class="card-title">Power Yoga</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">90%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 90%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                  <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="#" class="card-title">The Fitness Pack</a>
                    </h3>
                  </div>

                  <p class="card-text">
                    Suspendisse nisi libero, cursus ac magna sit amet, fermentum imperdiet nisi.
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">60%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 60%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle">Our News</p>

          <h2 class="h2 section-title text-center">Latest Blog Feed</h2>
          <?php
          include_once "./config/dbconnect.php";

          $query = "SELECT * FROM blogs";
          $query_run = mysqli_query($conn, $query);
          ?>
          <ul class="blog-list has-scrollbar">
            <?php while ($blog = mysqli_fetch_assoc($query_run)) { ?>

              <li class="scrollbar-item">
                <div class="blog-card">

                  <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                    <img src="admin/upload/<?php echo $blog['image']; ?>" width="440" height="270" loading="lazy"
                      alt="Going to the gym for the first time" class="img-cover">

                    <time class="card-meta" datetime="2022-07-07"><?php echo $blog['meta']; ?></time>
                  </div>

                  <div class="card-content">

                    <h3 class="h3">
                      <a href="blog.php?id=<?php echo $blog['id']; ?>" class="card-title"><?php echo $blog['title']; ?></a>
                    </h3>

                    <p class="card-text"><?php echo $blog['card_text']; ?></p>


                    <a href="blog.php?id=<?php echo $blog['id']; ?>" class="btn-link has-before">Read More</a>

                  </div>

                </div>
              <?php } ?>

              </li>
          </ul>
        </div>
      </section>

    </article>
  </main>
  <?php include('./shortcuts/footer.php');  ?>

  <!--- #BACK TO TOP-->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->

</body>

</html>