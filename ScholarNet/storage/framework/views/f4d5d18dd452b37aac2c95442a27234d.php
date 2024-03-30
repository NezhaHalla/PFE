<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'About ScholarNet']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About ScholarNet']); ?>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo e(asset('css/icomoon.css')); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo e(asset('css/flexslider.css')); ?>">

	<!-- Pricing -->
	<link rel="stylesheet" href="<?php echo e(asset('css/pricing.css')); ?>">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo e(asset('js/modernizr-2.6.2.min.js')); ?>"></script>
	</head>
	<body>
	<div id="fh5co-about" style="position:absolute;top: 200px;left:15%">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span><a href="<?php echo e(route('home')); ?>"><- Back To Home</a></span>
				<h2>Welcome to ScholarNet</h2>
				<p>Bienvenue sur ScholarNet. Nous sommes une plateforme dédiée à l'éducation, offrant un environnement d'apprentissage interactif et accessible à tous. Notre objectif est de fournir les outils et les ressources nécessaires pour aider les étudiants à réussir dans leurs études et à atteindre leurs objectifs éducatifs.

                    Chez ScholarNet, nous croyons fermement en l'importance de l'éducation dans la vie de chacun. C'est pourquoi nous nous efforçons de créer une communauté d'apprentissage dynamique où les étudiants peuvent découvrir de nouvelles connaissances, interagir avec leurs pairs et développer leurs compétences académiques et professionnelles.

                    Que vous soyez un étudiant à la recherche de ressources pédagogiques, un enseignant désireux de partager votre expertise ou simplement un passionné d'apprentissage, vous êtes au bon endroit. Rejoignez-nous sur ScholarNet et ensemble, poursuivons notre quête du savoir et de l'excellence académique.





                    .</p>
				</div>
			<div class="col-md-6">
				<img class="img-responsive" src="<?php echo e(asset('image/school.jfif')); ?>" alt="Free HTML5 Bootstrap Template">
			</div>
		</div>
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
	<!-- Main -->
	<script src="<?php echo e(asset('js/main.js')); ?>"></script>
	<script>
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
<?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/homepage/about.blade.php ENDPATH**/ ?>