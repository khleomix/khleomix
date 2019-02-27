<?php get_header(); ?>

	<section class="content--layout">

		<div class="content-left">

			<div class="post-content">

				<h2 class="word word--swing page-title small"><?php _e( 'Author:&nbsp;&nbsp;', 'khleomix' ); echo get_the_author(); ?></h2>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

		</div>

		<?php get_sidebar(); ?>

	</section>

<?php get_footer(); ?>

