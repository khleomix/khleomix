<?php get_header(); ?>

	<section class="content--layout">

		<div class="content-left">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>

					<h2 class="post-title"><?php the_title(); ?></h2>

					<div class="post-details">
						<span class="date"><?php the_time('F j, Y'); ?></span>
						<span class="categories"><?php _e( '| Found in: ', 'khleomix' ); the_category(', '); // Separated by commas ?></span>
						<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '| Leave your thoughts', 'khleomix' ), __( '1 Comment', 'khleomix' ), __( '% Comments', 'khleomix' )); ?></span>

					</div>

					<div class="post-content">
						<?php get_template_part('share'); ?>

						<?php /** if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<div class="post-image">
								<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
							</div>
						<?php endif; **/ ?>

						<div class="content-container">
							<?php the_content(); // Dynamic Content ?>
						</div>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						<?php my_disclaimer(); ?>


					</div>

						<?php comments_template(); ?>

						<?php get_template_part('pagination'); ?>

				</article>


			<?php endwhile; ?>

			<?php else: ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2 class="word word--swing page-title"><?php _e( 'Sorry, nothing to see here.', 'khleomix' ); ?></h2>

				</article>

			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>


	</section>

<?php get_footer(); ?>
