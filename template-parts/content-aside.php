<?php
/**
 * @package ewg
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="index-box">

		<header class="entry-header">

			<?php 
			if (is_sticky()) {
				echo '<i class="fa fa-thumb-tack sticky-post"></i>'; 
				}
			?>

			
		</header><!-- .entry-header -->


			<?php 
			if( $wp_query->current_post == 0 && !is_paged() && is_front_page() ) { 
			    echo '<div class="entry-content">';
			    the_content( __( '', 'evergreenwildernessguides' ) );
			    echo '</div>';
			    echo '<footer class="entry-footer continue-reading">';
			    echo '<a href="' . get_permalink() . '" title="' . __('Read ', 'evergreenwildernessguides') . get_the_title() . '" rel="bookmark">Read the article<i class="fa fa-arrow-circle-o-right"></i></a>'; 
			    echo '</footer><!-- .entry-footer -->';
			} else { ?>
			    <div class="entry-content">
			    <?php the_excerpt(); ?>
			    </div><!-- .entry-content -->
			    <footer class="entry-footer continue-reading">



			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php evergreenwildernessguides_posted_on(); ?>

						<?php 
						    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
						        echo '<span class="comments-link">';
						        comments_popup_link( esc_html__( 'Leave a comment', 'evergreenwildernessguides' ), esc_html__( '1 Comment', 'evergreenwildernessguides' ), esc_html__( '% Comments', 'evergreenwildernessguides' ) );
						        echo '</span>';
						    }
						?>

				</div><!-- .entry-meta -->
			<?php endif; ?>

			    <?php echo '<a href="' . get_permalink() . '" title="' . __('Continue Reading ', 'evergreenwildernessguides') . get_the_title() . '" rel="bookmark">Continue Reading<i class="fa fa-arrow-circle-o-right"></i></a>'; ?>

			    </footer><!-- .entry-footer -->
			<?php } ?>
	</div><!-- .index-box -->
</article><!-- #post-## -->