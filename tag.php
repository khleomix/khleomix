<?php get_header(); ?>

	<section class="content--layout">

		<div class="post-content">

			<h2 class="word word--swing page-title small"><?php _e( 'Tag&nbsp;Archive: ', 'khleomix' ); echo single_tag_title('', false); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>

	</section>

<?php get_footer(); ?>
