@extends('layouts.master')

@section('content')


	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Pricing</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<section class="ftco-section ftco-departments bg-light">
			<div class="container">

				<div class="row justify-content-center my-5 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
						<span class="subheading">Pricing</span>
						<h2 class="mb-4">Our Pricing</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ftco-animate mb-5">
						<div class="pricing-entry pb-5 text-center">
							<div>
								<h3 class="mb-2">Basic</h3>
								<p><span class="price">20000 MMK</span> <span class="per">/ Day</span></p>
							</div>
                            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/20000-room/1.jpg") }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/20000-room/2.jpg") }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/20000-room/3.jpg") }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
						</div>
					</div>
					<div class="col-md-6 ftco-animate mb-5">
						<div class="pricing-entry pb-5 text-center">
							<div>
								<h3 class="mb-2">Standard</h3>
								<p><span class="price">25000 MMK</span> <span class="per">/ day</span></p>
							</div>
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/25000-room/1.1.jpg") }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/25000-room/2.jpg") }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset("assets/images/owner/25000-room/3.jpg") }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
