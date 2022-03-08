<?php
// The header for our theme
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_directory"); ?>/assets/img/share/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_directory"); ?>/assets/img/share/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_directory"); ?>/assets/img/share/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo("template_directory"); ?>/assets/img/share/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo("template_directory"); ?>/assets/img/share/safari-pinned-tab.svg" color="#fa8c5c">
	<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/img/share/favicon.ico">
	<meta name="msapplication-TileColor" content="#fa8c5c">
	<meta name="msapplication-config" content="<?php bloginfo("template_directory"); ?>/assets/img/share/browserconfig.xml">
	<meta name="theme-color" content="#fa8c5c">

	<?php wp_head(); ?>
</head>

<body>

	<a class="sr-only focus:not-sr-only" href="#content">Skip to content</a>

	<div class="fixed z-50 flex flex-col items-center justify-center hidden w-full h-screen preloader bg-blue"></div>

	<?php
		$menu = wp_get_menu_array('primary');
	?>

	<header class="hidden">

		<nav>
			<?php	foreach ( $menu as $item ) : ?>
				<a href="<?php echo $item['url']; ?>" class="<?php echo $item['current'] ? 'underline' : ''; ?>">
					<?php echo $item['title']; ?>
				</a>
			<?php endforeach; ?>
		</nav>

	</header>
	
	<main id="content">
