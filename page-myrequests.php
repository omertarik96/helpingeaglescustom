<?php get_header(); ?>

<div class="post-section container">

 <?php if ( is_user_logged_in() ):

	 global $current_user;
	 wp_get_current_user();
	 $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
	 $author_posts = new WP_Query($author_query);
	 while($author_posts->have_posts()) : $author_posts->the_post();
		 ?>
                 <div class="card details">
                     <div class="card-image">
						 <?php the_post_thumbnail( 'full', array( 'class'   => 'img-responsive')); ?>
                     </div>

                     <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3> </a>
                     <p><?php the_excerpt(); ?>.</p>
	                 <?php if ($post->post_author == $current_user->ID) { ?>
                         <p><a onclick="return confirm('Are you SURE you want to delete this post?')" href="<?php echo get_delete_post_link( $post->ID ) ?>">Delete post</a></p>
	                 <?php } ?>
                 </div>
		 <?php
	 endwhile;

 else :

	 echo "not logged in";

 endif; ?>


</div>



<?php get_footer(); ?>
