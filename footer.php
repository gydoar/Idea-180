<div style="clear:both; position:relative;"> <span id="contactfooter"></span></div>
</div>

<footer>
	<div class="wrapper">
		<div class="colfooter mlprx" data-effect="animated zoomIn" data-delay="200" id="footer01">
					<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>    						
					<?php endif; /* End of widgetized sidebar */ ?>
		</div>

		<div class="colfooter mlprx" data-effect="animated zoomIn" data-delay="300" id="footer02">
					<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?>    						
					<?php endif; /* End of widgetized sidebar */ ?>
		</div>

		<div class="colfooter mlprx" data-effect="animated zoomIn" data-delay="400" id="footer03">
					<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?>    						
					<?php endif; /* End of widgetized sidebar */ ?>
		</div>

		<div class="colfooter mlprx" data-effect="animated zoomIn" data-delay="500" id="footer04">
					<?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(7) ) : ?>    						
					<?php endif; /* End of widgetized sidebar */ ?>
		</div>

	</div>

	<div style="clear:both"></div>

	<div class="logofooter">

		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>

	</div>
		
		<p class="credito"> Don't plagiarize our web design, it's bad karma! ©<?php echo date("Y"); ?> Idea180</p>

		<a href="http://www.dmca.com/Protection/Status.aspx?ID=e07c093a-7629-4cc9-9c27-b6f3e1dc0a02" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="<?php bloginfo('stylesheet_directory' ); ?>/images/dmca_protected_sml_120al.png?ID=e07c093a-7629-4cc9-9c27-b6f3e1dc0a02"  alt="DMCA.com Protection Status" /></a>


	 <?php wp_footer(); //leave for plugins ?>

 </footer>	

<!-- Se eliminaron etiquetas Tag manager y Remarketing que estaban comentadas y bloqueaban la etiqueta <body> -->


<!-- Menu responsive -->

<script>
	jQuery(document).ready(function () {
	    jQuery('header nav').meanmenu();
	});
</script>


	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MXMV3W"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MXMV3W');</script>
	<!-- End Google Tag Manager -->


<?php if(is_page('services')){ ?>
<!-- Efectos scroll menu -->

	<script type="text/javascript">
		$(document).ready(function(){
		 $(".scroll").click(function(event){
		 event.preventDefault();
		 var offset = $($(this).attr('href')).offset().top;
		 $('html, body').animate({scrollTop:offset}, 500);
		 });
		});
	</script>

<?php } ?>

</body>
</html>