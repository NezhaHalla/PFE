<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'Home']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home']); ?>
<html>
	<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-NbZR02M42VbyR1ApWgUJ/LIF7z4O2rpS1fQHElYxLZpGuOrVbR8CxLjnswlft+HSHcARqMKU8hsIAUGNwdhmHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/flexslider.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/pricing.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
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
									<h2>Brought to you by <a href="<?php echo e(route('home')); ?>" target="_blank">ScolarNet</a></h2>
									<?php if(auth()->guard()->guest()): ?>
                                        <p><a class="btn btn-primary btn-lg" href="<?php echo e(route('login')); ?>">Start Learning Now!</a></p>
                                    <?php endif; ?>
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
									<h2>Brought to you by <a href="<?php echo e(route('home')); ?>" target="_blank">ScolarNet</a></h2>
									<?php if(auth()->guard()->guest()): ?>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="<?php echo e(route('login')); ?>">Start Learning Now!</a></p>
                                    <?php endif; ?>
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
									<h2>Brought to you by <a href="<?php echo e(route('home')); ?>" target="_blank">ScolarNet.co</a></h2>
									<?php if(auth()->guard()->guest()): ?>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="<?php echo e(route('login')); ?>">Start Learning Now!</a></p>
                                    <?php endif; ?>
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
							<i class="fas fa-shield-alt"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Cybersecurity</a></h3>
							<p>Team of <b>8 instructors</b>, class size <b>capped at 35</b>, <b>2-year</b> structure with <b>2 semesters</b> per year, each with <b>4 modules</b>.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-robot"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Artificial Intelligence</a></h3>
							<p>Faculty of <b>8 teachers</b>, <b>40 students</b> per class, <b>2 years</b> with <b>2 semesters</b> per year and <b>4 modules</b> per semester.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-laptop"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Computer Science</a></h3>
							<p> <b>6 instructors</b>, class size limited to <b>40 students</b>, <b>2-year</b> program with <b>2 semesters</b> annually and <b> 4 modules</b> per semester.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="fas fa-code"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Web &amp; Programming</a></h3>
							<p><b>7 professors</b>, maximum of <b>50 students</b> per session, <b>2-year</b> curriculum with <b>2 semesters </b>each year and <b>4 modules</b> per semester</p>
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
                <?php if (isset($component)) { $__componentOriginal21634ebb4766ddd60db880d577d0c94f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21634ebb4766ddd60db880d577d0c94f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.announcement','data' => ['announcement' => $announcement]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('announcement'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['announcement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21634ebb4766ddd60db880d577d0c94f)): ?>
<?php $attributes = $__attributesOriginal21634ebb4766ddd60db880d577d0c94f; ?>
<?php unset($__attributesOriginal21634ebb4766ddd60db880d577d0c94f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21634ebb4766ddd60db880d577d0c94f)): ?>
<?php $component = $__componentOriginal21634ebb4766ddd60db880d577d0c94f; ?>
<?php unset($__componentOriginal21634ebb4766ddd60db880d577d0c94f); ?>
<?php endif; ?>
                
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
                <?php $__currentLoopData = $publication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(<?php echo e(asset('storage/'.$pub->imagepub)); ?>);"></a>
						<div class="blog-text">
							<h3><a href="#"><?php echo e($pub->titre); ?></a></h3>
							<span class="posted_on"><?php echo e($pub->created_at->format('d/m/Y')); ?></span>
							<p><?php echo e(Str::limit($pub->description ,200)); ?></p>
                            <p><a href="<?php echo e(route('pub.details',$pub->id)); ?>">Read More</a></p>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo e(asset('js/jquery.easing.1.3.js')); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo e(asset('js/jquery.waypoints.min.js')); ?>"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo e(asset('js/jquery.stellar.min.js')); ?>"></script>
	<!-- Carousel -->
	<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo e(asset('js/jquery.flexslider-min.js')); ?>"></script>
	<!-- countTo -->
	<script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/magnific-popup-options.js')); ?>"></script>
	<!-- Count Down -->
	<script src="<?php echo e(asset('js/simplyCountdown.js')); ?>"></script>
	<!-- Main -->
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	</body>
</html>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/homepage/home.blade.php ENDPATH**/ ?>