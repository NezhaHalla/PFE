<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'Contact']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Contact']); ?>
    <!DOCTYPE HTML>
    <html>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="freehtml5.co" />
    
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
    
        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-push-1 animate-box">
                        <div class="fh5co-contact-info" style="position:absolute;left:-150px;top:150px">
                            <h3>Contact Information</h3>
                            <ul>
                                <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                                <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li class="url"><a href="http://freehtml5.co">freeHTML5.co</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 animate-box">
                        <h3>Get In Touch</h3>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <!-- <label for="fname">First Name</label> -->
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                </div>
                                <div class="col-md-6">
                                    <!-- <label for="lname">Last Name</label> -->
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>
    
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="email">Email</label> -->
                                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>
    
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="subject">Subject</label> -->
                                    <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                </div>
                            </div>
    
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <!-- <label for="message">Message</label> -->
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
    
                        </form>
                </div>
                
            </div>
        </div>
        </div>
    
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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
<?php endif; ?><?php /**PATH C:\Users\user\Documents\PFE\ScholarNet\resources\views/homepage/contact.blade.php ENDPATH**/ ?>