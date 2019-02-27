<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-box">
			<div class="post-details">
				<span class="date"><?php the_time('F j, Y'); ?></span> |
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'khleomix' ), __( '1 Comment', 'khleomix' ), __( '% Comments', 'khleomix' )); ?></span>
			</div>
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-thumb">
					<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<?php khleomixwp_excerpt('khleomixwp_index'); ?>
			<a class="view-article" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">View Post</a>

		</div>

		<?php edit_post_link(); ?>


	</article>

<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2 class="word word--swing page-title"><?php _e( 'Sorry, nothing to display.', 'khleomix' ); ?></h2>
	</article>

<?php endif; ?>
