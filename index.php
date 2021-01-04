<?php 
include "header.php";
?>


<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    

    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
        <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

      </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  </div>
</header><!-- End Header -->
<main id="main">
  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex flex-column justify-content-center align-items-center">
    <div class="home-container" >
        <div class="section-title">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
          <img src="files/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h1>Chuchie Ignacio</h1>
        <p>I am a Software engineer living in Japan and I am also a Front-End Website Designer and Developer. I have a passion for web design and love to create for the web and making the site mobile responsive as well as cross-browser compatibility.  I help designers and businesses bring their website ideas to life using HTML5, CSS, and javascript.</p>
        </div>
        </div>
    </div>
  </section><!-- End Home -->



    <?php 
    include "skills.php";
    include "resume.php";
    include "portfolio.php";
    include "contact.php";
    ?>

    

   

    <!-- ======= Contact Section ======= -->
    

  </main><!-- End #main -->

 <?php 
    include "footer.php";
    ?>

</body>

</html>