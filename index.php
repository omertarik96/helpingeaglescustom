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
                                <div class="card-categories"><?php the_category(','); ?></div>
                                <div class="card-excerpt"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>"> <button type="button" class="btn btn-default button-main button-red">Provide Help</button> </a>
                            </div>
                        </div>
                    </div>

                        <?php
                    }
                }
                ?>
            </div>

        </div>
       

<?php get_footer(); ?>
        
