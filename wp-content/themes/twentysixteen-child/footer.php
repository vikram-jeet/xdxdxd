<footer class="footer-background">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer-section-content">
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#"> TERMS OF SERVICE  </a></li>
						<li><a href="#"> PRIVACY POLICY </a></li>
						<li><a href="#"> CONTACT US </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="footer-social-icon">
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-pinterest" aria-hidden="true"></i>
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- **
* ========================================
* Js
* ========================================
* -->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script> <!-- MAin js -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/demo.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/smoothscroll.min.js"></script>




<!-- pre page-loader -->
<script>
    /* =================================
     LOADER
     =================================== */
    // makes sure the whole site is loaded
    jQuery(window).load(function () {
        "use strict";
        // will first fade out the loading animation
        jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery(".preloader").delay(1000).fadeOut("slow");
    })
</script>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
            $('header').addClass("sticky");
        }
        else{
            $('header').removeClass("sticky");
        }
    });
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {


        //Sort random function
        function random(owlSelector){
            owlSelector.children().sort(function(){
                return Math.round(Math.random()) - 0.5;
            }).each(function(){
                $(this).appendTo(owlSelector);
            });
        }

        $("#owl-demo").owlCarousel({

            items : 2,
            itemsCustom : false,
            itemsDesktop : [1199,2],
            itemsDesktopSmall : [980,2],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : false,
            itemsScaleUp : false,
            navigation: true,
            navigationText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            //Call beforeInit callback, elem parameter point to $("#owl-demo")
            beforeInit : function(elem){
                random(elem);
            }

        });

    });
</script>


</body>
</html>