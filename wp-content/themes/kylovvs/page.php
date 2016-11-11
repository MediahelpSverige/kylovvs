<?php

get_header();
?>
<section class="banner" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
<div class="overlay"></div>
<div class="container">
	<div class="header-logo">


</div>
</div>
</section>
<section class="section-white single">
<div class="container-wrap">
	<div class="container">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					the_title('<h1>','</h1>');
					the_content();
					//
				} // end while
			} // end if
?>
	</div>
	</div>
</section>
<?php get_footer(); ?>
