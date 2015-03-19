
</div> <!--/End Content Container -->

<footer>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="footer">
					
					<div class="col-md-2 footer-menu-wrapper">
						 <?php
						  wp_nav_menu( array(
							'menu'       => 'primary',
							'depth'      => 2,
							'container'  => false,
							'menu_class' => 'footer-menu',
							'walker'     => new wp_bootstrap_navwalker())
						  );
						?>
					</div>
					
					<div class="col-md-2">
					</div>
					
					<div class="col-md-4 footer-facebook-wrapper">
						<div class="fb-like-box" data-href="https://www.facebook.com/DarrohnDesign" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
					</div>
					
					<div class="col-md-4">
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/btn.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>

	<script>
	$(function(){
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			hideDistantElements: false 
			});
	});
	</script>

	<script>

	$(function(){	

        var $window = $(window);
		var scrollTime = 1.2;
		var scrollDistance = 170;

		$window.on("mousewheel DOMMouseScroll", function(event){

			event.preventDefault();	

			var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
					ease: Power1.easeOut,
					overwrite: 5							
				});

		});
	});

	</script>

</body>

</html>
