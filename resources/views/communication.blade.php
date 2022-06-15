<!DOCTYPE html>
<html lang="en">

  @include('layouts.header')


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index"><span>SDA Church</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      @include('layouts.navbar')


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Communication</h2>
          <ol>
            <li><a href="index">Home</a></li>
            <li class="mylink1 hide"><a href="communication">Communication</a></li>
            <li class="other">Communication</li>
            <li class="mylink2 hide">Details</a></li>
          </ol>
        </div>

      </div>

      <div>
      </section><!-- End Our Services Section -->
      <div class="bulletin" style="margin-top:40px;">
        <h2>Download Our Weekly Church Bulletin</h2>
        <h4>(Uploaded every Thursday)</h4>
        <button style="padding:10px; margin-top:20px; margin-bottom:20px;" class="btn btn-primary btn-lg"><span>Download PDF</span></button>  
      </div>
      <!-- ======= Services Section ======= -->
      <section class="services general">
        <div class="container">

          <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch announce" data-aos="fade-up">
              <div class="icon-box icon-box-pink">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">Announcements</a></h4>
                <p class="description">Most recent updates of what is going on in the church, and other important church communication</p>
                <a href="#" class="get-started-btn announce">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch project" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">On-going Projects</a></h4>
                <p class="description">Find out current projects undertaken by various departments and donate to support them</p>
                <a href="#" class="get-started-btn project">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mission" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 class="title"><a href="">On-going Missions</a></h4>
                <p class="description">Kilifi Central SDA church is a mission church. Find out the current on-going and future missions</p>
                <a href="#" class="get-started-btn mission">Learn More</a>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch programme" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box icon-box-blue">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4 class="title"><a href="">Weekly Programmes</a></h4>
                <p class="description">Learn about weekly church programmes organised to nurture and prepare God's children for His work and soon return</p>
                <a href="#" class="get-started-btn programme">Learn More</a>
              </div>
            </div>

          </div>

        </div>
      </section>
    </div>

    <!-- communication details -->
    {{-- <div>
      <div class="hide ann">
        <h2 class="mytitle">Announcements</h2>

        <table style="width:100%">
          <tr>
            <th>Description</th>
            <th>Date</th>
          </tr>
          <tr>
            <td>Women ministries emphasis</td>
            <td>4th June, 2022</td>
          </tr>
          <tr>
            <td>Campmeeting at Kilifi Central SDA church</td>
            <td>17th-25th Sep, 2022</td>
          </tr>
        </table>
      </div>
      <div class="hide mis">
        <h2 class="mytitle">On-going Mission</h2>

        <table style="width:100%">
          <tr>
            <th>Location</th>
            <th>Mission Description</th>
            <th>Date</th>
          </tr>
          <tr>
            <td>Kiwapa</td>
            <td>Mission organised by KCC and PUSDA Youth. 33 were baptized. There is an on-going long term mission.</td>
            <td>Upto date</td>
          </tr>
          <tr>
            <td>To be communicated</td>
            <td>Organised by KCF Youth</td>
            <td>December</td>
          </tr>
        </table>
      </div>
      <div class="hide proj">
        <h2 class="mytitle">On-going Projects</h2>

        <table style="width:100%">
          <tr>
            <th>Name</th>
            <th>Project Description</th>
            <th>Image</th>
            <th>Timeline</th>
          </tr>
          <tr>
            <td>Church Pews</td>
            <td>Adopt a pew for Ksh. 11,000</td>
            <td><img src="assets/img/pews.jpg" alt="" class="img-fluid image_upload"></td>
            <td>Upto 3rd Quarter</td>
          </tr>
          <tr>
            <td>Church Piano</td>
            <td>Contribute towards the church piano</td>
            <td><img src="assets/img/piano.jpg" alt="" class="img-fluid image_upload"></td>
            <td>Upto 3rd Quarter</td>
          </tr>
        </table>
      </div>
      <div class="hide prog">
        <h2 class="mytitle">Weekly Church Programs</h2>

        <table style="width:100%">
          <tr>
            <th>Day & Time</th>
            <th>Program</th>
            <th>Department</th>
            <th>Guest</th>
          </tr>
          <tr>
            <td>Wed- 5:30-6:00pm</td>
            <td>Vespers</td>
            <td>Youth</td>
            <td>Bro. Reagan</td>
          </tr>
          <tr>
            <td>Fri- 5:30-6:00pm</td>
            <td>Vespers</td>
            <td>AMO</td>
            <td>Pr. Nzaka</td>
          </tr>
        </table>
      </div>
      <div class="mydonation hide">
        <div class="donate">
          <img src="assets/img/mpesa.png" alt="" class="img-fluid imagedes">
        </div>
        <p class="fst-italic caption">Donate through the church Treasurer contact: 0722272081, and text sms indicating the specifics of your contribution.<p>
        </div>
      </div>
    </main><!-- End #main --> --}}

    <!-- ======= Footer ======= -->
    <footer></footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    {{-- <script>
      document.querySelector(".announce").addEventListener('click', () => {
        document.querySelector(".mylink1").classList.remove('hide');
        document.querySelector(".mylink2").classList.remove('hide');
        document.querySelector(".other").classList.add('hide');
        document.querySelector(".ann").classList.remove('hide');
        document.querySelector(".general").classList.add('hide');
      });
      document.querySelector(".project").addEventListener('click', () => {
        document.querySelector(".mylink1").classList.remove('hide');
        document.querySelector(".mylink2").classList.remove('hide');
        document.querySelector(".other").classList.add('hide');
        document.querySelector(".mydonation").classList.remove('hide');
        document.querySelector(".proj").classList.remove('hide');
        document.querySelector(".general").classList.add('hide');
      });
      document.querySelector(".mission").addEventListener('click', () => {
        document.querySelector(".mylink1").classList.remove('hide');
        document.querySelector(".mylink2").classList.remove('hide');
        document.querySelector(".other").classList.add('hide');
        document.querySelector(".mydonation").classList.remove('hide');
        document.querySelector(".mis").classList.remove('hide');
        document.querySelector(".general").classList.add('hide');
      });
      document.querySelector(".programme").addEventListener('click', () => {
        document.querySelector(".mylink1").classList.remove('hide');
        document.querySelector(".mylink2").classList.remove('hide');
        document.querySelector(".other").classList.add('hide');
        document.querySelector(".prog").classList.remove('hide');
        document.querySelector(".general").classList.add('hide');
      });
    </script> --}}

      @include('layouts.javascript')


  </body>

  </html>