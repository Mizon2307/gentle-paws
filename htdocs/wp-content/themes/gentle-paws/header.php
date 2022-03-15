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

	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css"/>

	<?php wp_head(); ?>
</head>

<body>

	<a class="sr-only focus:not-sr-only" href="#content">Skip to content</a>

	<!-- <div class="fixed z-50 flex flex-col items-center justify-center w-full h-screen preloader bg-blue"></div> -->

	<?php
		$menu = wp_get_menu_array('primary');
	?>

	<header class="fixed z-40 w-full px-6 py-5 bg-white sm:py-3 md:px-8 lg:px-10">

		<div class="flex items-center justify-between w-full mx-auto">

			<div class="flex">
				<a href="/" rel="home" class="z-40 mt-1">
					<img src="<?php the_field('logo', 'option'); ?>" alt="Gentle Paws by Eve logo" class="w-40 lg:w-44" />
				</a>
				<nav class="hidden ml-14 lg:ml-16 main-nav-desktop lg:inline-block">
					<?php	foreach ( $menu as $item ) : ?>
						<a href="<?php echo $item['url']; ?>" class="text-med text-16 hover:text-blue mr-6 lg:mr-8 xl:mr-10 relative <?php echo $item['current'] ? 'text-blue active-nav-desktop' : ''; ?>">
							<?php echo $item['title']; ?>
						</a>
					<?php endforeach; ?>
				</nav>
			</div>
			
			<div class="flex items-center">
				<div class="flex mr-5">
					<a class="mr-5" href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'option')); ?>">
						<svg class="h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.683 20.5C9.484 20.5.5 11.605.5 5.314.5 2.829 2.053.5 4.705.5c.557 0 3.069 4.288 3.069 4.817 0 .866-2.574 2.13-2.574 2.896 0 1.863 5.724 7.587 7.587 7.587.766 0 2.03-2.574 2.896-2.574.161 0 4.638 2.368 4.776 2.773.948 2.206-2.59 4.5-4.776 4.5v.001Z" fill="#1B2040"/>
						</svg>
					</a>
					<a href="<?php the_field('google_maps_link', 'option'); ?>" target="_blank">
						<svg class="h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 20">
							<path d="M6.415 0C2.868 0 0 2.868 0 6.44c0 .931.201 1.787.528 2.591l5.535 10.743c.15.302.553.302.704 0L12.302 9.03c.352-.78.528-1.66.528-2.59C12.83 2.867 9.962 0 6.415 0Zm0 9.635A3.253 3.253 0 0 1 3.17 6.39a3.253 3.253 0 0 1 3.245-3.245A3.253 3.253 0 0 1 9.66 6.39a3.253 3.253 0 0 1-3.245 3.245Z" fill="#1B2040"/>
						</svg>
					</a>
				</div>

				<a href="<?php the_field('button_link', 'option'); ?>" class="hidden py-3 text-white uppercase rounded-md cursor-pointer sm:inline-block px-7 font-med bg-blue text-14 hover:bg-navy"><?php the_field('button_text', 'option'); ?></a>

				<div id="hamburger" class="relative z-40 inline-block cursor-pointer sm:ml-4 lg:hidden">
					<span class="absolute block w-full bar"></span>
					<span class="absolute block w-full bar"></span>
					<span class="absolute block w-full bar"></span>
				</div>
			
			</div>

		</div>

	</header>

	<div class="fixed top-0 left-0 z-30 flex flex-col justify-center w-full h-screen p-6 overflow-scroll bg-navy lg:hidden nav-mob-container">		

			<div>

				<nav class="flex flex-col w-full">
					<?php foreach ( $menu as $item ) : ?>
						<li class="my-2 list-none"><a href="<?php echo $item['url']; ?>" class="<?php echo $item['current'] ? 'font-bold' : ''; ?> uppercase text-white text-36">
							<?php echo $item['title']; ?>
						</a></li>
					<?php endforeach; ?>
				</nav>

				<a href="<?php the_field('button_link', 'option'); ?>" class="inline-block py-3 mt-10 text-white uppercase rounded-md cursor-pointer px-7 font-med bg-blue text-14 hover:bg-orange"><?php the_field('button_text', 'option'); ?></a>

			</div>

		</div>
	
	<main id="content">
