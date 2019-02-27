<?php get_header(); ?>

				<div class="glitch">
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
				</div>

				<h3 class="content-text">If you don't know where you want to go,<br /> then it doesn't matter which path you take.<br /><span class="alignright"><i class="far fa-hand-point-right"></i> <?php echo do_shortcode( '[kd-random-post]' ); ?></span><br /><span class="aligncenter"><a href="javascript:history.back()">Go Back</a> <i class="far fa-hand-point-left"></i></span><span class="aligright"><i class="far fa-hand-point-down"></i><br /><a href="<?php echo home_url(); ?>">Or Go Home</a></span></h3>

				<h2 class="content-title">Are you lost?</h2>

			</div><!-- content -->

			<?php wp_footer(); ?>
		</main>

	</body>
</html>
