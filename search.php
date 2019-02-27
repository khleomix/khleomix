<?php get_header(); ?>

	<section class="content--layout">

		<div class="post-content">

			<h1><?php echo sprintf( __( '%s Search Results for ', 'khleomix' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>

	</section>

<?php get_footer(); ?>

