<?php get_header(); ?>


<div class="post-section">
	<div class="container">
		<?php
		if( have_posts() ) {
			while( have_posts() ) {
				the_post();
				?>
				<div class="col-sm-12 col-md-8">
					<div class="card details">
						<div class="card-image">
							<?php the_post_thumbnail( 'full', array( 'class'   => 'img-responsive')); ?>
						</div>



							<ul class="meta-tags">
                                <span class="badge"><?php echo get_the_term_list( $post->ID, 'urgency', 'Urgency: ', ', ', '' ); ?></span>
                                </li>
                                <li>
									<span class="badge"><?php
										printf( _nx( 'Currently one volunteer', 'Currently %1$s volunteer', get_comments_number(), 'comments title', 'helpingeaglescustom' ),
											number_format_i18n( get_comments_number() ));
										?> </span>
                                </li>
                                <li>
                                    <span class="badge"><?php echo get_the_term_list( $post->ID, 'role', 'Role: ', ', ', '' ); ?></span>
                                </li>

								<li>
									<span class="badge"><?php the_category(','); ?></span>
								</li>


							</ul>

                        <h3><?php the_title(); ?></h3>





						<p><?php the_content(); ?>.</p>

					</div>

                    <div class="details">
                        <h4 class="comments-title">
		                    <?php
		                    printf( _nx( 'One volunteer on "%2$s"', '%1$s volunteer on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
			                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
		                    ?>
                        </h4>
	                    <?php comments_template(); ?>
                    </div>



				</div>
				<div class="col-sm-12 col-md-4">
					<div class="details" id="response">
						<h3 class="box-h3" ><i class="fa fa-lg fa-reply icon "></i>Respond:</h3>
						<div class="listing-details-sidebar listing-sidebar-list">

							<?php comment_form(array(
								'label_submit' => 'Provide Help',
								'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Response', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" cols="45" rows="8" maxlength="65525"  required="required"></textarea></p>',
							)); ?>
						</div>

					</div>

					<div class="details">
						<h3 class="box-h3"><i class="fa fa-lg fa-thumb-tack icon"></i>Contact Details:</h3>
						<ul class="listing-details-sidebar listing-sidebar-list">
							<li>
								<i class="fa fa-phone icon"></i> <?php echo get_post_meta($post->ID, "contact_name", true); ?>
							</li>
							<li>
								<i class="fa fa-user icon"></i> <?php echo get_post_meta($post->ID, "contact_phone", true); ?>
							</li>
							<li>
								<i class="fa fa-envelope-o icon"></i>
								<a href="mailto:<?php echo get_post_meta($post->ID, "contact_email", true); ?>"><?php echo get_post_meta($post->ID, "contact_email", true); ?></a>
							</li>
						</ul>

					</div>
					<div class="details">
						<h3 class="box-h3"><i class="fa fa-lg fa-compass icon"></i>Location:</h3>
						<ul class="listing-details-sidebar listing-sidebar-list">
							<p>
								<?php echo get_post_meta($post->ID, "location_street", true); ?>, <?php echo get_post_meta($post->ID, "location_street_2", true); ?>, <?php echo get_post_meta($post->ID, "location_city", true); ?> <?php echo get_post_meta($post->ID, "location_state", true); ?>, <?php echo get_post_meta($post->ID, "location_zip_code", true); ?></p>
						</ul>
					</div>

				</div>


				<?php
			}
		}
		?>
	</div>

</div>


<?php get_footer(); ?>
