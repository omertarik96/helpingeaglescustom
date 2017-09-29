<?php get_header(); ?>

        <div class="post-section">

			<div class="container"><h2>Latest Requests</h2></div>

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

                                <h3><?php the_title(); ?></h3>
                                <p><?php the_category(','); ?></p>
                                <p><?php the_excerpt(); ?>.</p>
                                <a href="<?php the_permalink(); ?>"> <button type="button" class="btn btn-default button-main button-red">Provide Help</button> </a>
                            </div>
                        </div>
                    </div>

                        <?php
                    }
                }
                ?>
            </div>

            <div class="container">
	            <?php echo do_shortcode("[ajax_filter_search filter_by=\"category-slug-1,category-slug2\"]"); ?>
				<?php echo do_shortcode( '[searchandfilter taxonomies="search,category,post_tag,post_format,role,urgency,hcc"]' ); ?>

            </div>

        </div>
       

<?php get_footer(); ?>
        
