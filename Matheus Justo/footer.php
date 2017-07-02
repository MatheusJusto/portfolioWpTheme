			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				
				 <div id='to-the-top'></div>
                <div class="container">
                    <h2><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url');?>/img/logo-rodape.png" alt="logo rodapé matheus garcia"></a></h2>
                    <ul class="social-footer">
                        <li><a href="https://github.com/MatheusJusto"><i class="fa fa-github-alt"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/matheus-garcia-29bb65a1/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.behance.net/matheusgar083f"><i class="fa fa-behance"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/100394420020802900333"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <p class="copyright">
						&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
					</p>
                </div>
            </footer>
           

		<?php wp_footer(); ?>

		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/toggle.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/slick-carousel/slick/slick.min.js"></script>
        <script
  src="https://code.jquery.com/ui/1.8.23/jquery-ui.min.js"
  integrity="sha256-sEFM2aY87nr5kcE4F+RtMBkKxBqHEc2ueHGNptOA5XI="
  crossorigin="anonymous"></script>
        

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		 <script>
            $(function() {
                new WOW().init();
            });


            $('.slide').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        </script>

	</body>
</html>
