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

		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Other Resources</h2>
					<ol>
						<li><a href="index">Home</a></li>
						<li>Videos</li>
					</ol>
				</div>

			</div>
		</section>

		<!-- ======= Video Section ======= -->
		<section class="portfolio">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-sermon">Church Sermons</li>
							<li data-filter=".filter-music">Music</li>
							<li data-filter=".filter-test">Members' Testimonies</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

					<div class="col-lg-4 col-md-6 portfolio-wrap filter-sermon">
						<div class="portfolio-item">
							<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-test">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-sermon">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-music">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-sermon">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-test">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-music">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-music">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 portfolio-wrap filter-sermon">
								<div class="portfolio-item">
									<video width="400" controls>
								<source src="video/sunset-timelapse-video.mp4" type="video/mp4">
									<source src="video/wheat-field.mp4" type="video/mp4">
										Your browser does not support HTML video.
									</video>
									<p class="v_title">[Video Title]</p>
								</div>
							</div>

						</div>

					</div>
				</section><!-- End Video Section -->

			</main>

			<footer></footer>

			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

			@include('layouts.javascript')


		</body>

		</html>