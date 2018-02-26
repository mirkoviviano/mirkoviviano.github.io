
	<!-- Footer
	================================================== -->
	<section id="footer">
		<div class="container">
			<div class="desktop-8 columns">
				<p>Copyright &copy; Mirko Viviano. <small>Template forked from <a href="https://github.com/subwaymatch/typefolio">Typefolio - @subwaymatch</a></p>
			</div><!-- // .desktop-3 -->

			<div class="desktop-4 columns">
				<ul id="social">
					<li><a href="http://www.twitter.com" class="hoverMe">Twitter</a></li>
					<li><a href="http://www.twitter.com" class="hoverMe">GitHub</a></li>
					<li><a href="http://www.twitter.com" class="hoverMe">Telegram</a></li>
					<li><a href="http://www.twitter.com" class="hoverMe">Steemit</a></li>
				</ul><!-- // #social -->
			</div><!-- // .desktop-9 -->

			<div class="clear"></div>
		</div><!-- // .container -->
		<div class="container">
			<div class="desktop-12 columns text_center">
				<img src="images/btc_payment.png" width="100">
			</div>
		</div>
	</section><!-- // section#footer -->


	<!-- JS
	================================================== -->
	<!-- 
		Flexslider 2.1 has known issues of manualControls setting with jQuery 1.9~
		Use jQuery 1.8 until Flexslider 2.2 stable version is released
	-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="js/jQuery.BlackAndWhite.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/less-1.4.0.min.js"></script>
	<script src="js/jquery.typeMenu.js"></script>
	<script src="js/jquery.typeSticky.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKS4S_HNSOFEFxUUY9C4qJqGAMuBSXcyI"></script>
    <script src="js/gmaps.js"></script>
	<script src="js/jquery.custom.js"></script>
	<script type="text/javascript">
		function getFormMessage(type){
			switch(type){
				default:
				case type = "success":
					document.getElementById("form-messages").innerHTML = "<div id=\'contact-success\'>Email successfuly sent, thank you.<br /></div>";
					setTimeout(function () {
					  	$('#form-messages').fadeOut('fast');
					}, 3000);
				break;
				case type="failed":
					document.getElementById("form-messages").innerHTML = "<div id=\'contact-warning\'>Email not sent, please try again.<br /></div>";
					setTimeout(function () {	
						$('#form-messages').fadeOut('fast');
					}, 3000);
				break;
			}
			
		}
	</script>


<!-- End Document
================================================== -->
</body>
</html>