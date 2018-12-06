<!doctype html>  

<html <?php language_attributes(); ?>>
<?php
$faviconUrl = sprintf('%s/img/favicon', get_stylesheet_directory_uri());
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $faviconUrl; ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $faviconUrl; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $faviconUrl; ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $faviconUrl; ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $faviconUrl; ?>/safari-pinned-tab.svg" color="#5bbad5">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<?php
if (has_post_thumbnail()) {
    $bgImageUrl = get_the_post_thumbnail_url(null,'full');
    $bgCss =  sprintf('style="background-image: url(%s)"', $bgImageUrl);
}
else {
    $bgCss = '';
}
?>

<body <?php body_class(); ?> >

	<div id="content-wrapper">

		<header id="pm-block">
            <div class="row container pm-header-logo-container">
                <div class="col-lg-12 text-center header-logo-wrapper">
                    <img class="pm-logo align-middle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pm-logo-transparent.png" />
                </div>
            </div>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<?php if (has_nav_menu("main_nav")): ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only"><?php _e('Navigation', 'simple-bootstrap'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php endif ?>
					</div>

					<?php if (has_nav_menu("main_nav")): ?>
					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    simple_bootstrap_display_main_menu();
						?>

					</div>
					<?php endif ?>

				</div>
			</nav>
		</header>

        <?php if (has_header_image()): ?>
        <div class="header-image-container">
            <div class="header-image" style="background-image: url(<?php echo get_header_image(); ?>)">
                <div class="container">
                    <?php if (display_header_text()): ?>
                    <div class="site-title" style="color: #<?php header_textcolor(); ?>;"><?php bloginfo('name') ?></div>
                    <div class="site-description" style="color: #<?php header_textcolor(); ?>;"><?php bloginfo('description') ?></div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <?php endif ?>

		<div id="page-content" <?php echo $bgCss; ?>>
			<div class="container pm-main-content">
