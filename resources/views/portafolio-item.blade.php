@extends("theme.portafolio.layout")
@section("titulo")
Jesús Konde
@endsection

@section('contenido')
    <!-- Page Header-->
			<section class="module-header full-height parallax text-left" data-background="assets/images/module-6.jpg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="h1 m-b-10">Popcorn</h1>
							<ul class="post-meta h6">
								<li>August 18, 2016</li>
								<li>In <a href="#">Branding</a>, <a href="#">Design</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
	<!-- Page Header end-->

	<!-- Portfolio Single-->
	<section class="module">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="portfolio-content">
						<div class="image-slider owl-carousel">
						<img src="assets/images/portfolio/s-5.jpg" alt="">
						<img src="assets/images/portfolio/s-6.jpg" alt="">
						
						<img src="assets/images/portfolio/s-7.jpg" alt="">
						</div>
						<p><img src="assets/images/portfolio/s-8.jpg" alt=""></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio end-->

	<!-- Related Work-->
	<section class="module module-divider-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="m-title c-align">
						<h2>Related Work</h2>
						<h6>An eye for detail makes our works excellent</h6>
					</div>
				</div>
			</div>
			<div class="row row-portfolio">
				<div class="grid-sizer"></div>
				<div class="portfolio-item js-tilt web design ">
					<div class="portfolio-wrapper">
						<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-1.jpg"></div>
						<div class="portfolio-overlay"></div>
						<div class="portfolio-caption">
							<h5 class="portfolio-title">Hilltop</h5>
							<h6 class="portfolio-subtitle">Design</h6>
						</div>
					</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
				</div>
				<div class="portfolio-item js-tilt photo web ">
					<div class="portfolio-wrapper">
						<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-4.jpg"></div>
						<div class="portfolio-overlay"></div>
						<div class="portfolio-caption">
							<h5 class="portfolio-title">Popcorn</h5>
							<h6 class="portfolio-subtitle">Design</h6>
						</div>
					</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
				</div>
				<div class="portfolio-item js-tilt design branding ">
					<div class="portfolio-wrapper">
						<div class="portfolio-img-wrap" data-background="assets/images/portfolio/g-3.jpg"></div>
						<div class="portfolio-overlay"></div>
						<div class="portfolio-caption">
							<h5 class="portfolio-title">Color</h5>
							<h6 class="portfolio-subtitle">Design</h6>
						</div>
					</div><a class="portfolio-link" href="portfolio-single-1.html"></a>
				</div>
			</div>
		</div>
	</section>

@endsection