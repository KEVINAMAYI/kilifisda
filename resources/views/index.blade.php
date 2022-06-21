<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA CHURCH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/churchlogo.png" alt="" class="img-fluid"></a> -->
      </div>

      @include('layouts.navbar')

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Kilifi Central SDA Church</span></h2>
          <p class="animate__animated animate__fadeInUp">Kilifi Central SDA Church is a dynamic and vibrant multi-ethnic church that seeks to bring people to Jesus Christ and membership in God's family, develop them for His service in this world and the world to come. A home away from home! </p>
          <a href="about" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Ongoing Church mission, programmes and projects</h2>
          <p class="animate__animated animate__fadeInUp">These programs are meant to support the development needs of the church, to call all people to become disciples of Jesus Christ and prepare them for Christ's soon return.</p>
          <a href="communication.html" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Grow in Christ: Access all our spiritual materils</h2>
          <p class="animate__animated animate__fadeInUp">God's Word guides you in the right direction in life. It lights the way ahead of you so you can see clearly which way to go. Through every season of your life, you can be confident that God is always leading you through His Word.</p>
          <a href="Literature" class="btn-get-started animate__animated animate__fadeInUp">Learn More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- <div id="right" ><img src="assets/img/logo.jpg" alt="" class="img-fluid"></div> -->
  <div class="bulletin">
    <h2>Download Our Weekly Church Bulletin</h2>
    <h4>(Uploaded every Thursday)</h4>
      <a href="bulletin-files/{{ App\Models\Bulletin::getBulletinURL(); }}" download style="padding:10px; margin-top:20px; margin-bottom:20px;" class="btn btn-primary btn-lg">Download PDF</a>  
  </div>
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="slides">
                <div class="entry-img img-fluid" style="max-width:500px">
                  <a href="gallery"><img class="mySlides" src="assets/img/gal1.jpg" style="width:100%"></a>
                  <a href="gallery"><img class="mySlides" src="assets/img/gal2.jpg" style="width:100%"></a>
                  <a href="gallery"><img class="mySlides" src="assets/img/gal4.jpg" style="width:100%"></a>
                </div>
              </div>
              <p class="w3-center entry-title" style=" text-align: center; color: skyblue;"><a href="gallery" class="get-started-btn">Church Gallery</a></p>
            </article>

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-02.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                  Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
                </p>
                <div class="read-more">
                  <a href="blog-single">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">More to Find</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">On-going Projects</a></li>
                  <li><a href="#">On-going Mission</a></li>
                  <li><a href="#">Get announcements</a></li>
                  <li><a href="#">Literature</a></li>
                  <li><a href="#">Sermons</a></li>
                  <li><a href="#">Music</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->


  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

@include('layouts.javascript')


</body>

</html>