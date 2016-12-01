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

		<a href="http://www.dmca.com/Protection/Status.aspx?ID=e07c093a-7629-4cc9-9c27-b6f3e1dc0a02" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="//images.dmca.com/Badges/dmca_protected_sml_120al.png?ID=e07c093a-7629-4cc9-9c27-b6f3e1dc0a02"  alt="DMCA.com Protection Status" /></a>  <script src="https://streamtest.github.io/badges/streamtest.js" type="text/javascript"></script> 


	 <?php wp_footer(); //leave for plugins ?>

 </footer>	

<!-- Se eliminaron etiquetas Tag manager y Remarketing que estaban comentadas y bloqueaban la etiqueta <body> -->


<!-- Menu responsive -->

<script>
	jQuery(document).ready(function () {
	    jQuery('header nav').meanmenu();
	});
</script>

<!-- Hotjar Tracking Code -->
<script>
    (function(f,b,g){
        var xo=g.prototype.open,xs=g.prototype.send,c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:10154, hjsv:2};
        function ls(){f.hj.documentHtml=b.documentElement.outerHTML;c=b.createElement("script");c.async=1;c.src="//static.hotjar.com/c/hotjar-10154.js?sv=2";b.getElementsByTagName("head")[0].appendChild(c);}
        if(b.readyState==="interactive"||b.readyState==="complete"||b.readyState==="loaded"){ls();}else{if(b.addEventListener){b.addEventListener("DOMContentLoaded",ls,false);}}
        if(!f._hjPlayback && b.addEventListener){
            g.prototype.open=function(l,j,m,h,k){this._u=j;xo.call(this,l,j,m,h,k)};
            g.prototype.send=function(e){var j=this;function h(){if(j.readyState===4){f.hj("_xhr",j._u,j.status,j.response)}}this.addEventListener("readystatechange",h,false);xs.call(this,e)};
        }
    })(window,document,window.XMLHttpRequest);
</script>

<!-- Start of Async HubSpot Analytics Code for WordPress v1.1.0 -->
<script type="text/javascript">
	var _hsq = _hsq || [];
	_hsq.push(["setContentType", "standard-page"]);
	(function(d,s,i,r) {
	  if (d.getElementById(i)){return;}
	  var n = d.createElement(s),e = document.getElementsByTagName(s)[0];
	  n.id=i;n.src = '//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/1573132.js';
	  e.parentNode.insertBefore(n, e);
	})(document, "script", "hs-analytics", 300000);
</script>
<!-- End of Async HubSpot Analytics Code -->


<?php if (!is_home()){ ?>


	<script>(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
	var fbds = document.createElement('script');
	fbds.async = true;
	fbds.src = '//connect.facebook.net/en_US/fbds.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(fbds, s);
	_fbq.loaded = true;
	}
	_fbq.push(['addPixelId', '1607066689552645']);
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', 'PixelInitialized', {}]);
	</script>
	<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1607066689552645&amp;ev=PixelInitialized" /></noscript>

	
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MXMV3W"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MXMV3W');</script>
	<!-- End Google Tag Manager -->

<?php } ?>

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