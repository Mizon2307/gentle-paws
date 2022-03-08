<?php
// The template for displaying the footer
?>

	</main>

	<footer class="w-full py-20 text-white bg-navy md:py-24 lg:py-28">
		<div class="container flex flex-col md:flex-row">
			<div class="w-full mb-12 text-center md:text-left md:w-1/3 md:mb-0">
				<h3 class="mb-4 font-bold text-22 md:text-26 lg:text-30 md:mb-7">Contact</h3>
				<p class="mb-2 text-18 md:text-20"><span class="font-bold">t: </span><?php the_field('phone_number', 'option'); ?></p>
				<p class="mb-2 text-18 lg:text-20"><span class="font-bold">m: </span><?php the_field('mobile_number', 'option'); ?></p>
				<p class="mb-7 md:mb-14 text-18 lg:text-20"><span class="font-bold">e:</span> <a class="hover:text-orange" href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
				<ul class="flex justify-center md:justify-start">
					<li class="mr-4">
						<a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank">
							<svg fill="none" class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39 39">
								<rect width="38.033" height="38.033" rx="8" fill="#4A73F3"/>
								<rect x="9.055" y="5.433" width="19.017" height="28.977" rx="8" fill="#1B2040"/>
								<path d="M19.017 0C8.53 0 0 8.53 0 19.017c0 10.486 8.53 19.017 19.017 19.017 10.485 0 19.016-8.531 19.016-19.017C38.033 8.53 29.502 0 19.016 0Zm5.374 12.005a.34.34 0 0 1-.34.34H21.89c-1.427 0-1.687.556-1.687 1.65v2.27h3.707a.338.338 0 0 1 .337.382l-.528 4.086a.34.34 0 0 1-.337.296h-3.18v10.144a.34.34 0 0 1-.339.34h-4.218a.34.34 0 0 1-.34-.34V21.03h-3.19a.34.34 0 0 1-.339-.34v-4.085a.34.34 0 0 1 .34-.34h3.19v-2.673c0-3.542 2.143-5.741 5.593-5.741 1.483 0 2.794.11 3.197.164a.34.34 0 0 1 .295.336v3.655Z" fill="#4A73F3"/>
							</svg>
						</a>
					</li>
					<li class="mr-4">
						<a href="<?php the_field('whatsapp_link', 'option'); ?>" target="_blank">
							<svg class="w-9" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 39">
								<path d="M38 8.678a23.983 23.983 0 0 0-.19-2.451 8.152 8.152 0 0 0-.703-2.052 6.955 6.955 0 0 0-1.349-1.9 7.43 7.43 0 0 0-1.9-1.35 8.132 8.132 0 0 0-2.052-.683 19.4 19.4 0 0 0-2.432-.21H8.645a23.96 23.96 0 0 0-2.451.19 8.151 8.151 0 0 0-2.052.704 6.954 6.954 0 0 0-1.9 1.349 7.429 7.429 0 0 0-1.349 1.9 8.132 8.132 0 0 0-.684 2.052C.089 7.032.019 7.844 0 8.659V29.388c.021.82.085 1.637.19 2.45a8.15 8.15 0 0 0 .703 2.053c.34.704.796 1.347 1.349 1.9a7.429 7.429 0 0 0 1.9 1.349 8.13 8.13 0 0 0 2.052.684c.805.12 1.618.19 2.432.209h20.729c.82-.022 1.638-.085 2.451-.19a8.151 8.151 0 0 0 2.052-.703 6.955 6.955 0 0 0 1.9-1.35 7.427 7.427 0 0 0 1.349-1.9 8.13 8.13 0 0 0 .684-2.051A19.4 19.4 0 0 0 38 29.407V8.678ZM19.437 32.333a13.527 13.527 0 0 1-6.517-1.71l-7.22 1.9 1.9-7.068a13.509 13.509 0 0 1-1.9-6.802 13.642 13.642 0 1 1 13.737 13.68Zm0-24.947a11.4 11.4 0 0 0-9.595 17.347l.266.437-1.14 4.16 4.332-1.177.418.247a11.4 11.4 0 0 0 5.7 1.577 11.4 11.4 0 0 0 0-22.8l.019.209Zm6.65 16.188a3.459 3.459 0 0 1-2.299 1.615c-.71.13-1.44.084-2.128-.133a16.894 16.894 0 0 1-1.9-.722 15.199 15.199 0 0 1-5.814-5.13 6.612 6.612 0 0 1-1.387-3.515 3.8 3.8 0 0 1 1.197-2.85 1.235 1.235 0 0 1 .912-.418h.532c.209 0 .494 0 .76.589s.969 2.356 1.064 2.527a.646.646 0 0 1 0 .589c-.084.206-.2.398-.342.57-.171.209-.361.456-.513.608-.152.152-.342.342-.152.684a10.566 10.566 0 0 0 1.9 2.356 9.499 9.499 0 0 0 2.736 1.69c.342.172.551.153.741 0 .19-.151.855-.987 1.083-1.33.228-.341.456-.284.76-.17.304.114 1.995.93 2.337 1.102.342.17.551.247.646.399a2.964 2.964 0 0 1-.133 1.482v.057Z" fill="#4A73F3"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank">
							<svg fill="none" class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 39">
								<path d="M19 14.32a4.712 4.712 0 1 0 0 9.425 4.712 4.712 0 0 0 0-9.424Zm18.867-4.654a12.408 12.408 0 0 0-.798-4.294A7.6 7.6 0 0 0 32.661.964a12.407 12.407 0 0 0-4.294-.798C25.916.033 25.194.033 19 .033c-6.194 0-6.916 0-9.367.133-1.467.01-2.921.28-4.294.798A7.6 7.6 0 0 0 .931 5.372a12.407 12.407 0 0 0-.798 4.294C0 12.116 0 12.839 0 19.033c0 6.194 0 6.916.133 9.367.02 1.472.29 2.93.798 4.313.38 1 .97 1.907 1.729 2.66a7.39 7.39 0 0 0 2.679 1.729c1.373.518 2.827.788 4.294.798 2.451.133 3.173.133 9.367.133 6.194 0 6.916 0 9.367-.133 1.467-.01 2.921-.28 4.294-.798a7.39 7.39 0 0 0 2.679-1.73 7.485 7.485 0 0 0 1.729-2.66c.517-1.379.787-2.839.798-4.312.133-2.451.133-3.173.133-9.367 0-6.194 0-6.916-.133-9.367Zm-4.826 15.2a10.888 10.888 0 0 1-.741 3.42 7.336 7.336 0 0 1-4.047 4.047c-1.103.406-2.264.63-3.439.665H13.186a10.888 10.888 0 0 1-3.439-.665 6.668 6.668 0 0 1-2.489-1.634A6.668 6.668 0 0 1 5.7 28.286a10.431 10.431 0 0 1-.646-3.44V13.22c.02-1.175.239-2.337.646-3.44a6.669 6.669 0 0 1 1.634-2.488 6.821 6.821 0 0 1 2.413-1.558 10.887 10.887 0 0 1 3.439-.665h11.628c1.175.034 2.336.259 3.439.665.942.35 1.793.908 2.489 1.634A6.67 6.67 0 0 1 32.3 9.78c.406 1.103.63 2.264.665 3.439v5.814c0 3.914.133 4.313.076 5.814v.019Zm-3.04-14.136a4.522 4.522 0 0 0-2.679-2.68 7.6 7.6 0 0 0-2.622-.417H13.3a7.6 7.6 0 0 0-2.622.494 4.522 4.522 0 0 0-2.679 2.584 8.113 8.113 0 0 0-.399 2.622v11.4c.019.895.186 1.781.494 2.622a4.522 4.522 0 0 0 2.679 2.679c.81.298 1.664.465 2.527.494h11.4a7.598 7.598 0 0 0 2.622-.494 4.522 4.522 0 0 0 2.679-2.68 7.6 7.6 0 0 0 .494-2.621v-11.4c0-.898-.167-1.787-.494-2.622v.019ZM19 26.29a7.24 7.24 0 0 1-7.239-7.257A7.259 7.259 0 1 1 19 26.29Zm7.6-13.09a1.71 1.71 0 0 1 0-3.401 1.71 1.71 0 0 1 0 3.4Z" fill="#4A73F3"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
			<div class="w-full mb-12 text-center md:w-1/3 md:mb-0 md:text-left">
				<h3 class="mb-4 font-bold text-22 md:text-26 lg:text-30 md:mb-7">Address</h3>
				<p class="mb-7 md:mb-10 text-18 lg:text-20"><?php the_field('address', 'option'); ?></p>
					<a href="<?php the_field('google_maps_link', 'option'); ?>" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer px-7 font-med bg-orange text-14 hover:bg-blue" target="_blank">Get Directions</a>
			</div>
			<div class="w-full text-center md:w-1/3 md:text-left">
				<h3 class="mb-4 font-bold text-22 md:text-26 lg:text-30 md:mb-7">Opening Hours</h3>
				<ul class="text-18 lg:text-20">
					<?php
						if( have_rows ('opening_hours', 'option') ):
						while ( have_rows ('opening_hours', 'option') ) : the_row();
						$day = get_sub_field('day');
						$times = get_sub_field('times');
					?>

							<li><?php echo $day; ?>: <?php echo $times; ?></li>

					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
