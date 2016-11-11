<footer>
	<div class="container">
		<?php dynamic_sidebar('footer-adress'); ?>
		<?php dynamic_sidebar('opening-hours'); ?>
	</div>
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('.site_nav').slideToggle();
			console.log('click');
		})

		$('.dropbtn').click(function(){
			$('.dropdown-content').slideToggle();
		})
	});
</script>
<?php wp_footer(); ?>
</body>
</html>