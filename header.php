<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Londrina+Outline|Londrina+Solid" rel="stylesheet">

		<script>document.documentElement.className = 'js';</script>

		<!--script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-3323312820444929",
				enable_page_level_ads: true
			});
		</script-->

		<?php wp_head(); ?>

	</head>
	<body <?php if (!is_404()) { body_class('menu swing'); } else { body_class('loading'); } ?>>

		<main class="main">

			<div class="content">

				<?php if ( !is_front_page() && !is_404() ) : ?>

							<!-- header -->
							<header class="header clear" role="banner">

									<!-- logo -->
									<div class="logo">
										<a href="<?php echo home_url(); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Khleomix - JC Palmes" class="logo-img">
										</a>
									</div>
									<!-- /logo -->
							</header>
							<!-- /header -->

				<?php endif; ?>


