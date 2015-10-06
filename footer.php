  <?php get_template_part('modal'); ?>











        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
          
          $(document).ready(function() {
            /*
            "Hovernav" navbar dropdown on hover
            Uses jQuery Media Query - see http://www.sitepoint.com/javascript-media-queries/
            */
            var mq = window.matchMedia('(min-width: 768px)');
            if (mq.matches) {
              $('ul.navbar-nav > li').addClass('hovernav');
            } else {
              $('ul.navbar-nav > li').removeClass('hovernav');
            };
            /*
            The addClass/removeClass also needs to be triggered
            on page resize <=> 768px
            */
            if (matchMedia) {
              var mq = window.matchMedia('(min-width: 768px)');
              mq.addListener(WidthChange);
              WidthChange(mq);
            }
            function WidthChange(mq) {
              if (mq.matches) {
                $('ul.navbar-nav > li').addClass('hovernav');
                // Restore "clickable parent links" in navbar
                $('.hovernav a').click(function () {
                  window.location = this.href;
                });
              } else {
                $('ul.navbar-nav > li').removeClass('hovernav');
              }
            };
            // Restore "clickable parent links" in navbar
            $('.hovernav a').click(function () {
              window.location = this.href;
            });
          });
          
          $.stellar.positionProperty.apple = {
              setTop: function($el, newTop, originalTop) {
                  $el.css({
                      'top': newTop,
                      'left': $el.hasClass('apple') ? originalTop - newTop : 0
                  });
              },
              setLeft: function($el, newLeft, originalLeft) {
                  $el.css('left', newLeft);
              }
          };

          $.stellar({
              horizontalScrolling: false,
              positionProperty: 'apple'
          });
          
          

        </script>



    </body>
</html>