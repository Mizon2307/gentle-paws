<?php
	$bg_img = get_sub_field('background_image');
	$title = get_sub_field('title');
	$button = get_sub_field('button');
	$availability = get_sub_field('availability_text');
	$monday = get_sub_field('monday');
	$tuesday = get_sub_field('tuesday');
	$wednesday = get_sub_field('wednesday');
	$thursday = get_sub_field('thursday');
	$friday = get_sub_field('friday');
	$saturday = get_sub_field('saturday');
	$sunday = get_sub_field('sunday');
?>

<section class="relative w-full h-screen bg-center bg-no-repeat bg-cover hero" style="background-image:url('<?php echo $bg_img; ?>');">
	<div class="container absolute left-0 right-0 top-1/2" style="transform: translateY(-50%);">
		<svg class="w-24 mb-8 md:mb-10 md:w-24 lg:w-32" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 119">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M86.119 12.989C86.596 6.168 82.978.361 78.038.015c-4.94-.345-9.331 4.902-9.808 11.722-.477 6.818 3.141 12.625 8.081 12.97 4.94.347 9.33-4.901 9.808-11.72Zm-.871 54.649 4.058 1.342c.422.017.798.047 1.142.075h.003c.612.05 1.124.092 1.617.033a18.75 18.75 0 0 0 2.47-.185 9.258 9.258 0 0 0 8.178-8.596 12.742 12.742 0 0 0-2.299-8.642 51.681 51.681 0 0 1-5.694-9.784c-1.08-2.47-2.083-4.939-3.086-7.423a14.979 14.979 0 0 0-3.195-4.845 7.263 7.263 0 0 0-8.21-1.142 18.098 18.098 0 0 0-4.63 3.519 29.425 29.425 0 0 1-13.225 7.87 11.066 11.066 0 0 0-8.133 10.694 10.623 10.623 0 0 0 5.062 9.522 15.809 15.809 0 0 0 6.358 2.547 118.773 118.773 0 0 1 19.584 5.015Zm-19.09-41.229c.195 6.278-3.336 11.482-7.885 11.623-4.55.14-8.395-4.835-8.588-11.114-.194-6.278 3.336-11.482 7.885-11.623 4.549-.14 8.394 4.836 8.588 11.114Zm42.573-4.476c3-6.142 1.824-12.882-2.626-15.056-4.449-2.173-10.488 1.044-13.488 7.187-2.999 6.142-1.823 12.883 2.626 15.055 4.45 2.174 10.487-1.044 13.488-7.186Zm8.055 8.748c3.869 2.411 4.306 8.696.978 14.035-3.33 5.34-9.164 7.712-13.033 5.3-3.869-2.413-4.306-8.697-.976-14.036 3.328-5.339 9.164-7.711 13.031-5.299ZM49.12 107.128l3.21-1.543v-.001c.216-.197.415-.374.599-.537l.004-.004c.433-.384.782-.693 1.063-1.017.49-.483.942-.998 1.359-1.544a7.806 7.806 0 0 0-.201-10 10.8 10.8 0 0 0-6.512-3.796 43.717 43.717 0 0 1-9.26-2.392 469.833 469.833 0 0 1-4.16-1.764l-.003-.001-.002-.001h-.002l-.006-.004-.009-.003-.009-.004-.03-.013-.052-.022c-.633-.27-1.266-.542-1.9-.811a12.91 12.91 0 0 0-4.8-1.003 6.18 6.18 0 0 0-5.586 4.197 15.239 15.239 0 0 0-.678 4.846 24.686 24.686 0 0 1-3.241 12.561 9.263 9.263 0 0 0 1.543 11.204 8.918 8.918 0 0 0 8.672 2.532 13.41 13.41 0 0 0 5.31-2.238c4.644-3.29 9.56-6.181 14.69-8.642Zm-31.94-33.11c3.76 4.356 4.248 10.094 1.092 12.816-3.155 2.723-8.76 1.4-12.518-2.956-3.758-4.356-4.247-10.094-1.092-12.817 3.155-2.723 8.76-1.399 12.518 2.957Zm-1.78 31.486c2.637-2.786 1.659-7.993-2.185-11.631-3.844-3.639-9.097-4.33-11.734-1.546-2.637 2.786-1.658 7.993 2.186 11.632 3.844 3.638 9.097 4.329 11.733 1.545Zm20.607-39.572c1.852 5.447.153 10.95-3.792 12.291-3.946 1.342-8.646-1.987-10.498-7.434-1.85-5.448-.153-10.95 3.794-12.291 3.946-1.341 8.646 1.987 10.496 7.434ZM49.81 85.175c3.737-.868 5.793-5.751 4.595-10.906-1.2-5.156-5.2-8.63-8.935-7.762-3.736.869-5.792 5.752-4.594 10.907 1.2 5.155 5.2 8.63 8.934 7.761Z" fill="#4A73F3"/>
	</svg>
	<h1 class="max-w-2xl pr-8 mb-8 font-bold leading-tight md:mb-12 text-navy text-36 sm:text-46 md:text-60 lg:text-70 lg:pr-0"><?php echo $title; ?></h1>
		<?php if ( $button ) :
			$button_url = $button['url'];
			$button_title = $button['title'];
			$button_target = $button['target'] ? $button['target'] : '_self';
		?>
			<a href="<?php echo esc_url( $button_url ); ?>" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer px-7 md:px-8 md:py-4 font-med bg-orange text-14 md:text-16 hover:bg-navy" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
		<?php endif; ?>
	</div>
	<div class="w-full h-screen lg:w-11/12 bg-gradient-to-r from-pink overlay"></div>

	<?php if ( $availability ) : ?>
		<div class="absolute bottom-0 w-full px-6 py-4 text-center text-white bg-navy text-16 lg:text-18 font-med">
				<p>
				<?php 

					date('w');

					if(date('w') == 1){
						echo "Open today: ";echo $monday;
					}
					
					if(date('w') == 2){
						echo "Open today: ";echo $tuesday;
					}

					if(date('w') == 3){
						echo "Open today: ";echo $wednesday;
					}

					if(date('w') == 4){
						echo "Open today: ";echo $thursday;
					}

					if(date('w') == 5){
						echo "Open today: ";echo $friday;
					}

					if(date('w') == 6){
						echo "Open today: ";echo $saturday;
					}

					if(date('w') == 7){
						echo "Open today: ";echo $sunday;
					}

				?>
				/ <?php echo $availability; ?></p>
		</div>
	<?php endif; ?>

</section>
