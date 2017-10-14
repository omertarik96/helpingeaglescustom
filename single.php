<?php get_header(); ?>


<div class="post-section">
    <div class="container">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
                <div class="col-sm-12 col-md-8">

                    <div class="card details">

                        <ul class="meta-tags">
                            <li><span class="badge">Category: <?php the_category( ',' ); ?></span></li>
                            <li><span class="badge"><?php echo get_the_term_list( $post->ID, 'urgency', 'Urgency: ', ', ', '' ); ?></span></li>
                            <li><span class="badge"><?php echo get_the_term_list( $post->ID, 'role', 'Role: ', ', ', '' ); ?></span></li>
                            <!-- Hiding for now... 
			    	<li><span class="badge"><?php printf( _nx( 'Currently one volunteer', 'Currently %1$s volunteer', get_comments_number(), 'comments title', 'helpingeaglescustom' ), number_format_i18n( get_comments_number() ) ); ?> </span></li>
			     -->
                        </ul>

                           <!--TITLE AND CONTENT-->
                           <h2><?php the_title(); ?></h2>
			   <p class="byline">Posted by <?php echo $curauth->display_name; ?> on <?php the_date('M-d-y'); ?></p>
                           <?php the_content(); ?>

                        <!--RESPOND SECTION-->
                        <div class="respond">
                            <h3 class="box-h3"><i class="fa fa-lg fa-reply icon "></i>Respond</h3>
                            <div class="listing-details-sidebar listing-sidebar-list">
							    <?php comment_form( array(
								    'label_submit'  => 'Submit',
								    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true"  cols="45" rows="8" maxlength="65525"  required="required"></textarea></p>',
							    ) ); ?>
                            </div>
                        </div>

                    </div>

                    <div class="details"  id="response">
                        
                         <!--COMMENT SECTION-->
                        <h4 class="comments-title">
							<?php
							printf( _nx( 'One response(s) on "%2$s"', '%1$s response(s) on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
								number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
							?>
                        </h4>
						<?php comments_template(); ?>
						
                    </div>


                </div>

				<?php
			}
		}
		?>
    </div>

</div>


<?php get_footer(); ?>
