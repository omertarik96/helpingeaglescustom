<?php get_header(); ?>

        <div class="post-section">

			<div class="container">
                <h2 class="latest-requests-heading">Latest Requests</h2>
                <span style="display: inline-block"><?php echo do_shortcode( '[searchandfilter taxonomies="search,category,role,urgency"]' ); ?> </span>
            </div>

            <div class="masonry-layout container">

                <?php 
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        ?>
                    <div class="masonry-layout__panel">
                        <div class="masonry-layout__panel-content">
                            <div class="card details">
                                <div class="card-image">
                                    <?php the_post_thumbnail( 'full', array( 'class'   => 'img-responsive')); ?>
                                </div>

                                <h3 class="card-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                       		<div class="card-excerpt"><?php the_excerpt(); ?></div>
				<div class="card-categories"><?php the_category(','); ?></div>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                }
                ?>
            </div>

            <!--Pagination-->
            <div class="container">
	            <?php eagle2eagle_numeric_posts_nav(); ?>
            </div>
        </div>
       

<?php get_footer(); ?>
        
