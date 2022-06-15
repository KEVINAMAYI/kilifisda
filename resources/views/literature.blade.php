<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>KCCSDA</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      @include('layouts.navbar')

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Literature Materials</h2>

          <ol>
            <li><a href="index">Home</a></li>
            <li>Resources</li>
          </ol>
        </div>

      </div>
    </section>
<!-- 
  <div id="right" ><img src="assets/img/logo.jpg" alt="" class="img-fluid"></div> -->
  <div class="bulletin">
    <h4 class="fst-italic">Download Church Manual</h4>
    <a href="assets/literature/seventh-day-adventist-church-manual_2015_updated.pdf" download="newfilename" target="_blank">Seventh Day Adventist Church Manual PDF</a>  
  </div>

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          <h2>Current Church Read</h2>
          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog-post-03.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single">[Book title]</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single">Author: John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single"><time datetime="2020-01-01">[Spritual year]</time></a></li>
              </div>

              <div class="entry-content">
                <div class="read-more">
                  <a href="#">Read Now</a>
                </div>
              </div>

            </article><!-- End blook entry -->
            <h2>This Quarter's Featured Book</h2>
            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-03.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single">[Book Title]</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single">[Author]</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single"><time datetime="2020-01-01">[Quarter], [year]</time></a></li>
                </div>

                <div class="entry-content">
                  <div class="read-more">
                    <a href="#">Read Now</a>
                  </div>
                </div>

              </article><!-- End blook entry -->

            </div><!-- End blook entries list -->

            <div class="col-lg-4">

              <div class="sidebar">

              <!-- <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div> --><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Conflict of the Ages</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="assets/literature/The Great Controversy.pdf" target="_blank">The Great Controversy</a></li>
                  <li><a href="assets/literature/The Desire of Ages.pdf" target="_blank">The Desire of Ages</a></li>
                  <li><a href="assets/literature/The Acts of the Apostles.pdf" target="_blank">Acts of the Apostles</a></li>
                  <li><a href="assets/literature/Patriachs and Prophets.pdf" target="_blank">Patriachs and Prophets</a></li>
                  <li><a href="assets/literature/Prophets and Kings.pdf" target="_blank">Prophets and Kings</a></li>
                </ul>
              </div><!-- End sidebar categories-->


              <h3 class="sidebar-title">More Articles/Books</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="assets/literature/creeping_compromise_joe-crews.pdf" target="_blank">Creeping Compromise</a></li>
                  <li><a href="assets/literature/overcoming-addictions.pdf" target="_blank">Overcoming Addictions</a></li>
                  <li><a href="assets/literature/The Cross and Its Shadow - S.N. Haskell (1914).pdf" target="_blank">The Cross and Its Shadow</a></li>
                  <li><a href="assets/literature/When Truth Meets Life PDF.pdf" target="_blank">Download the pdf</a></li>
                  <li><a href="assets/literature/When People are Big and God is Small.pdf" target="_blank">When People are Big and God is Small</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer></footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.javascript')


</body>

</html>