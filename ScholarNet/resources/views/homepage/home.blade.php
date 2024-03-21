<x-master title="Home">
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
									<h2>Brought to you by <a href="{{ route('home') }}" target="_blank">ScolarNet</a></h2>
									@guest
                                        <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}">Start Learning Now!</a></p>
                                    @endguest
                            </div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Great Aim of Education is not Knowledge, But Action</h1>
									<h2>Brought to you by <a href="{{ route('home') }}" target="_blank">ScolarNet</a></h2>
									@guest
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="{{ route('login') }}">Start Learning Now!</a></p>
                                    @endguest
                            </div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/img_bg_3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>
									<h2>Brought to you by <a href="{{ route('home') }}" target="_blank">ScolarNet.co</a></h2>
									@guest
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="{{ route('login') }}">Start Learning Now!</a></p>
                                    @endguest
                                </div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Branch categories</h2>
					<p>Our school offers a variety of branches, but the best one stands out with its high-quality study environment and top-notch faculty. Students in this branch receive an exceptional education that prepares them for success in their future endeavors.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-shop"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Business</a></h3>
							<p>The Business Management branch focuses on developing leadership, strategic planning, and decision-making skills essential for success in the corporate world.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Accounting</a></h3>
							<p>The Accounting branch at our school is renowned for its comprehensive curriculum that covers financial accounting, managerial accounting, auditing, and taxation.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Science &amp; Technology</a></h3>
							<p>In the Science & Technology branch, students embark on a journey of discovery, exploring the realms of physics, chemistry, biology, and engineering.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Web &amp; Programming</a></h3>
							<p>Our Web and Programming branch is a hub of innovation, where students delve into the dynamic world of coding, web development, and software engineering.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Stay Updated with Our Announcements</h2>
					<p>Stay informed about our upcoming events and news by checking our announcements regularly.</p>
				</div>
			</div>
			<div class="row">
                <x-announcement :announcement="$announcement"></x-announcement>
                {{-- @foreach ($announcement as $announce)
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image:url('{{ asset('storage/'.$announce->imagepub) }}');">
                            </a>
                            <div class="desc">
                                <h3><a href="#">{{ $announce->titre }}</a></h3>
                                <p>{{ $announce->description }}</p>
                                @auth
                                    @if (auth()->user()->role==='Admin')
                                        <span><a href="{{ route('publication.destroy',$announce->id) }}" class="btn btn-primary btn-sm btn-course">Delete</a></span>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach --}}
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Events</h2>
					<p>Join us for an array of exciting events that cater to diverse interests and passions. </p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>15<br>Mar.</span></div>
						<h3><a href="#">Pathways to Success</a></h3>
						<p>Explore various career opportunities and gain insights into different industries at our annual Career Fair. </p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>05<br>Fev.</span></div>
						<h3><a href="#">Celebrating Unity in Diversity</a></h3>
						<p> Join us for a vibrant celebration of cultures from around the world.the rich diversity within our school community. </p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>23<br>June.</span></div>
						<h3><a href="#"> STEM education and creativity</a></h3>
						<p> Discover the wonders of science, technology, engineering, and mathematics of STEM education and creativity.</p>
					</div>
				</div>
			</div>

            
			<div class="row">
                @foreach ($publication as $pub)
                    
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url({{ asset('storage/'.$pub->imagepub)}});"></a>
						<div class="blog-text">
							<h3><a href="#">{{ $pub->titre}}</a></h3>
							<span class="posted_on">{{ $pub->created_at->format('d/m/Y') }}</span>
							<p>{{ Str::limit($pub->description ,200) }}</p>
                            <p><a href="{{route('pub.details',$pub->id)}}">Read More</a></p>
						</div> 
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{ asset('js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>


</x-master>
