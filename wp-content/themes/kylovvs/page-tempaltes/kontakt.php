<?php
/*
Template name: kontakt
*/
get_header();
?>
<section class="banner">
	<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2003.4146643649083!2d17.690205516093744!3d59.858860581847225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x691af148fefd86d8!2sMediahelp+Sverige+AB!5e0!3m2!1sen!2sse!4v1471525224245" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</section>
<section class="section-white single">
	<div class="container">
	<div class="kontakt-info">
		<div class="row">
			<h1 class="page-title">Kontakt - Gävle VVS</h1>
			<p class="page-title">Hör av er till os på gävle vvs så återkommer vi inom kort</p>
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
<?php $query8 = new WP_Query(array( 'post_type' => 'arbetare', 'post_per_page' => -1) );
//print_r($query8);
					  while ( $query8->have_posts() ) : $query8->the_post(); ?>

					  <div class="coworker col-md-4 col-sm-4 col-xs-6">
							<div class="coworker-img" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
							</div>
							<div class="coworker-content">


		<?php the_title('<h4 class="coworker-title">', '</h4>');  ?>

		<h5 class="role"><?php the_field('titel'); ?></h5>
		<p id="number">Tel: <?php the_field('nummer'); ?></p>
		<a href="mailto:<?php the_field('mail'); ?>"><span class="glyphicon glyphicon-envelope
"></span></a>
		</div>
	</div>
	    <?php endwhile; wp_reset_postdata();?>
</div>

<div class="row" id="kontaktinformation">
	<div class="col-md-4">
		<h2>Kontaktinformation</h2>
		<ul>
			<li>Tel: <?php the_field('tel');?></li>
			<li>Mail: <a href="<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></li>
			<li></li>
		</ul>
			<br>
			<h2>Post- och besöksadress</h2>
			<?php the_field('post-_och_besoksadress'); ?>
	</div>
	<div class="col-md-4">
		<h2>Fakturaadress</h2>
		<?php the_field('fakturaadress'); ?>
	</div>
	<div class="col-md-4">
		<h2><h2>Kontaktformulär</h2></h2>
		<?php echo do_shortcode('[contact-form-7 id="51" title="Kontaktformulär 1"]');?>
	</div>
</div>
</div>
	</div>
</section>


<?php get_footer(); ?>
