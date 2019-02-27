<!-- pagination -->
<div class="pagination">

	<?php if ( !is_singular() ) {

		posts_nav_link('  ','<div class="nav-previous"><i class="fas fa-hand-point-left"></i> Go forward in time</div>','<div class="nav-next">Go back in time <i class="fas fa-hand-point-right"></i></div>');

	} else {

		the_post_navigation( array(
			'prev_text'                  => __( '<i class="fas fa-hand-point-left"></i> Down the Rabbit Hole' ),
			'next_text'                  => __( 'Back to Reality <i class="fas fa-hand-point-right"></i>' ),
			'screen_reader_text' => __( ' ' ),
		) );

	}
	?>

</div>
<!-- /pagination -->
