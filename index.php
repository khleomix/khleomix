<?php get_header(); ?>

	<section class="content--layout">

		<div class="content-left">

			<div class="post-content">
				<?php if ( is_front_page() ) : ?>

					<?php the_content(); ?>
					<?php edit_post_link(); ?>

				<?php else : ?>

					<h2 class="word word--swing page-title alignleft"><?php _e( 'Latest&nbsp;Posts', 'khleomix' ); ?></h2>

					<?php get_template_part('loop'); ?>

				<?php endif; ?>
			</div>

		</div>

		<?php get_sidebar(); ?>

	</section>

<?php get_footer(); ?>
