<?php get_header(); ?>

<?php
if( have_posts() ) {
	while( have_posts() ) {
		the_post();
		?>
		<div class="container">
			<div class="details col-sm-12 col-md-12 col-lg-12">
				<h1><?php the_title(); ?></h1>
				<div><?php the_content(); ?>.</div>
			</div>
		</div>
		<?php
	}
}
?>







<?php get_footer(); ?>





