<?php get_header(); ?>
	<?php if (is_front_page()) { ?>
		<div class="tooltip tooltip-west">
			<span class="tooltip-item"></span>
			<div class="tooltip-content">
				<h4>Latest Post:</h4>
				<?php
					$args = array( 'numberposts' => '1', 'cat' => '-253' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a>';
					}
					wp_reset_query();
				?>
			</div>
		</div>
	<?php } ?>
	<section class="content--layout" <?php if (is_front_page()) { echo 'id="home-content"'; } ?>>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">

					<?php if ( !is_front_page() ) : ?>
						<h2 class="word word--swing page-title"><?php the_title(); ?></h2>
					<?php endif; ?>

					<?php the_content(); ?>
					<?php edit_post_link(); ?>

				</div>
			</article>

			<?php get_template_part('share'); ?>

		<?php endwhile; ?>

		<?php else: ?>

			<article>
				<div class="page-content">

					<h2><?php _e( 'Sorry, nothing to display.', 'khleomix' ); ?></h2>

				</div>
			</article>

		<?php endif; ?>

	</section>

<?php get_footer(); ?>
