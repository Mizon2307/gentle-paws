<?php
// The template for displaying all single posts
?>

<?php get_header(); ?>

<section class="relative w-full pt-40 pb-24 text-white bg-navy">
		<div class="container flex flex-col lg:flex-row lg:justify-between">
			<div class="lg:order-2">
				<svg class="mb-12 w-28 sm:w-32 md:w-36 xl:w-44" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 119">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M86.119 12.989C86.596 6.168 82.978.361 78.038.015c-4.94-.345-9.331 4.902-9.808 11.722-.477 6.818 3.141 12.625 8.081 12.97 4.94.347 9.33-4.901 9.808-11.72Zm-.871 54.649 4.058 1.342c.422.017.798.047 1.142.075h.003c.612.05 1.124.092 1.617.033a18.75 18.75 0 0 0 2.47-.185 9.258 9.258 0 0 0 8.178-8.596 12.742 12.742 0 0 0-2.299-8.642 51.681 51.681 0 0 1-5.694-9.784c-1.08-2.47-2.083-4.939-3.086-7.423a14.979 14.979 0 0 0-3.195-4.845 7.263 7.263 0 0 0-8.21-1.142 18.098 18.098 0 0 0-4.63 3.519 29.425 29.425 0 0 1-13.225 7.87 11.066 11.066 0 0 0-8.133 10.694 10.623 10.623 0 0 0 5.062 9.522 15.809 15.809 0 0 0 6.358 2.547 118.773 118.773 0 0 1 19.584 5.015Zm-19.09-41.229c.195 6.278-3.336 11.482-7.885 11.623-4.55.14-8.395-4.835-8.588-11.114-.194-6.278 3.336-11.482 7.885-11.623 4.549-.14 8.394 4.836 8.588 11.114Zm42.573-4.476c3-6.142 1.824-12.882-2.626-15.056-4.449-2.173-10.488 1.044-13.488 7.187-2.999 6.142-1.823 12.883 2.626 15.055 4.45 2.174 10.487-1.044 13.488-7.186Zm8.055 8.748c3.869 2.411 4.306 8.696.978 14.035-3.33 5.34-9.164 7.712-13.033 5.3-3.869-2.413-4.306-8.697-.976-14.036 3.328-5.339 9.164-7.711 13.031-5.299ZM49.12 107.128l3.21-1.543v-.001c.216-.197.415-.374.599-.537l.004-.004c.433-.384.782-.693 1.063-1.017.49-.483.942-.998 1.359-1.544a7.806 7.806 0 0 0-.201-10 10.8 10.8 0 0 0-6.512-3.796 43.717 43.717 0 0 1-9.26-2.392 469.833 469.833 0 0 1-4.16-1.764l-.003-.001-.002-.001h-.002l-.006-.004-.009-.003-.009-.004-.03-.013-.052-.022c-.633-.27-1.266-.542-1.9-.811a12.91 12.91 0 0 0-4.8-1.003 6.18 6.18 0 0 0-5.586 4.197 15.239 15.239 0 0 0-.678 4.846 24.686 24.686 0 0 1-3.241 12.561 9.263 9.263 0 0 0 1.543 11.204 8.918 8.918 0 0 0 8.672 2.532 13.41 13.41 0 0 0 5.31-2.238c4.644-3.29 9.56-6.181 14.69-8.642Zm-31.94-33.11c3.76 4.356 4.248 10.094 1.092 12.816-3.155 2.723-8.76 1.4-12.518-2.956-3.758-4.356-4.247-10.094-1.092-12.817 3.155-2.723 8.76-1.399 12.518 2.957Zm-1.78 31.486c2.637-2.786 1.659-7.993-2.185-11.631-3.844-3.639-9.097-4.33-11.734-1.546-2.637 2.786-1.658 7.993 2.186 11.632 3.844 3.638 9.097 4.329 11.733 1.545Zm20.607-39.572c1.852 5.447.153 10.95-3.792 12.291-3.946 1.342-8.646-1.987-10.498-7.434-1.85-5.448-.153-10.95 3.794-12.291 3.946-1.341 8.646 1.987 10.496 7.434ZM49.81 85.175c3.737-.868 5.793-5.751 4.595-10.906-1.2-5.156-5.2-8.63-8.935-7.762-3.736.869-5.792 5.752-4.594 10.907 1.2 5.155 5.2 8.63 8.934 7.761Z" fill="#FA8C5C"/>
				</svg>
			</div>
			<div>
				<h1 class="max-w-2xl pr-12 mb-12 font-bold leading-tight text-36 sm:text-46 md:text-60 lg:text-70 lg:pr-0"><?php the_title(); ?></h1>
				<span class="inline-block max-w-xl leading-tight text-26 md:text-28 lg:text-32"><?php the_excerpt(); ?></span>
			</div>
		</div>
	</section>

	<section class="relative w-full py-24 single-post">
		<div class="container flex flex-col items-center mb-10 sm:flex-row">
			<div class="w-full sm:w-1/2">
				<a href="/blog/" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer px-7 font-med bg-orange text-14 hover:bg-navy">All Blog Posts</a>
			</div>
			<div class="w-full mt-6 sm:w-1/2 sm:text-right sm:mt-0">
				<p class="font-med md:text-18 date"><?php the_time( 'd/m/Y' ); ?></p>
			</div>
		</div>
		<div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="w-full mb-12 bg-top bg-no-repeat bg-cover md:mb-16 lg:mb-20" style="padding-bottom: 56.25%; background-image:url('<?php the_field('featured_image'); ?>');"></div>

				<div class="max-w-xl mx-auto">
					<?php the_content(); ?>
				</div>

			<?php endwhile;
				wp_reset_postdata();
			?>

		</div>
	</section>

	<section class="relative w-full pb-16 md:pb-20 lg:pb-24 single-post">
		<div class="container flex flex-col items-center mb-10 sm:flex-row">

			<div class="grid w-full grid-cols-1 sm:grid-cols-2 sm:gap-6 md:gap-8 lg:gap-10">

				<?php
					$previous = get_previous_post();
					$next = get_next_post();
				?>

				<?php
					$feature_image = get_field('featured_image', $next);
				?>

				<?php
					$feature_image_previous = get_field('featured_image', $previous);
				?>

				<?php if ( get_next_post() ) { ?>
					<div class="relative w-full p-8 mb-10 bg-center bg-no-repeat bg-cover md:p-12 sm:mb-0" style="background-image:url('<?php echo $feature_image; ?>');">

						<div class="relative z-20 flex flex-col justify-between h-full">
							<div>
								<p class="pb-6 text-orange text-18">Previous Post:</p>
								<p class="font-bold text-white text-26 md:text-30 lg:text-32"><?php echo get_the_title($next) ?></p>
							</div>
							<div>
								<a href="<?php the_permalink($next) ?>" class="inline-block px-5 py-3 mt-6 text-white uppercase rounded-md cursor-pointer md:px-6 md:py-3 font-med bg-blue text-14 hover:bg-navy">View Post</a>
							</div>
						</div>

						<div class="absolute top-0 bottom-0 left-0 right-0 z-10 w-full h-full bg-navy bg-opacity-60"></div>

					</div>

				<?php } if ( get_previous_post() ) { ?>
					<div class="w-full">

					<div class="relative w-full p-8 mb-10 bg-center bg-no-repeat bg-cover md:p-12 sm:mb-0" style="background-image:url('<?php echo $feature_image; ?>');">

						<div class="relative z-20 flex flex-col justify-between h-full">
							<div>
								<p class="pb-6 text-orange text-18">Next Post:</p>
								<p class="font-bold text-white text-26 md:text-30 lg:text-32"><?php echo get_the_title($previous) ?></p>
							</div>
							<div>
								<a href="<?php the_permalink($previous) ?>" class="inline-block px-5 py-3 mt-6 text-white uppercase rounded-md cursor-pointer md:px-6 md:py-3 font-med bg-blue text-14 hover:bg-navy">View Post</a>
							</div>
						</div>

						<div class="absolute top-0 bottom-0 left-0 right-0 z-10 w-full h-full bg-navy bg-opacity-60"></div>

					</div>
				<?php } ?>

			</div>

		</div>
	</section>

	<section class="w-full py-20 text-white bg-blue md:py-24 lg:py-28">
			<div class="container overflow-hidden">
				<div class="relative w-full">

					<div class="flex items-center justify-between w-full mb-12">
						<h2 class="font-bold text-26 md:text-32 lg:text-40 xl:text-46"><?php the_field('title'); ?></h2>

						<div class="flex">
							<div class="slider-prev">
								<svg class="w-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 32">
									<path d="M16.578 31.724a3.116 3.116 0 0 1-2.214-.905L1.89 18.345a3.12 3.12 0 0 1 0-4.397L14.364 1.474a3.118 3.118 0 0 1 4.397 4.397l-10.26 10.26 10.26 10.26a3.12 3.12 0 0 1-2.183 5.333Z" fill="#FA8C5C"/>
								</svg>
							</div>
							<div class="slider-next">
								<svg class="w-4 ml-3" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 32">
									<path d="M4.088.724a3.117 3.117 0 0 1 2.214.905l12.474 12.474a3.12 3.12 0 0 1 0 4.397L6.303 30.974a3.119 3.119 0 0 1-4.397-4.397l10.26-10.26-10.26-10.26A3.12 3.12 0 0 1 4.088.724Z" fill="#FA8C5C"/>
								</svg>
							</div>
						</div>
					</div>

			<div class="swiper mySwiper1">
        <div class="swiper-wrapper">

          <?php
            if( have_rows ('testimonials') ):
            while ( have_rows ('testimonials') ) : the_row();
            $text = get_sub_field('text');
						$author = get_sub_field('author');
						$image = get_sub_field('image');
          ?>

            <div class="flex flex-col text-white md:flex-row swiper-slide">

							<span class="block md:w-2/3 mb-7 md:mb-0 md:mr-6 lg:mr-7">
								<span class="leading-tight text-20 md:text-22 xl:text-50"><?php echo $text; ?></span>
								<svg class="w-24 md:w-28 mt-7" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 20">
									<path d="m15.266 12.507 1.106 7.136L10 16.3l-6.372 3.342 1.106-7.135L0 7.122l6.747-.68L10 0l3.253 6.442 6.747.68-4.734 5.385ZM40.266 12.507l1.106 7.136L35 16.3l-6.372 3.342 1.106-7.135L25 7.122l6.747-.68L35 0l3.253 6.442 6.747.68-4.734 5.385ZM65.266 12.507l1.106 7.136L60 16.3l-6.372 3.342 1.106-7.135L50 7.122l6.748-.68L60 0l3.253 6.442 6.747.68-4.734 5.385ZM90.266 12.507l1.106 7.136L85 16.3l-6.372 3.342 1.106-7.135L75 7.122l6.748-.68L85 0l3.253 6.442 6.747.68-4.734 5.385ZM115.266 12.507l1.106 7.136L110 16.3l-6.372 3.342 1.106-7.135L100 7.122l6.747-.68L110 0l3.253 6.442 6.747.68-4.734 5.385Z" fill="#FA8C5C"/>
								</svg>
								<p class="font-bold mt-7 text-20 md:text-22 lg:text-26">-- <?php echo $author; ?></p>
							</span>
							
							<span class="block md:ml-6 lg:ml-7">
								<span class="inline-block w-64 h-64 bg-right bg-no-repeat bg-cover rounded-full md:w-72 md:h-72 lg:w-80 lg:h-80" style="background-image:url('<?php echo $image; ?>');"></span>
							</span>
							
						</div>

						<?php endwhile; endif; ?>

					</div>
				</div>
					
			</div>
		</div>
	</section>

<?php get_footer();
