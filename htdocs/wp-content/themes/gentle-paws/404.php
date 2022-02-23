<?php
// The template for displaying 404 pages (not found)
?>

<?php get_header();?>

<section class="text-white bg-blue">
		<div class="container flex px-8 mx-auto">
			<div class="container flex flex-wrap items-center justify-center h-screen max-w-xl mx-auto text-center">
				<div class="flex flex-col items-center content">
					<h1 class="mb-6 text-white text-35"><strong class="font-bold">Whoops! 404 Error</strong></h1>
					<h2 class="mb-6 leading-normal text-20 md:text-25 font-med">We're sorry, we couldn't find the page that you were looking for.</h2>
					<p class="text-15 md:text-20">Please return to our <a href="/" class="font-bold text-white hover:text-orange">home page</a></p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();
