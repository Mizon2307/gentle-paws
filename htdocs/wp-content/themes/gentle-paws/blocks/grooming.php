<?php
	$title = get_sub_field('title');
  $button = get_sub_field('button');
?>

<section class="w-full py-20 text-white bg-blue md:py-24 lg:py-28">
  <div class="container flex flex-col sm:flex-row">
    <div class="w-full sm:w-1/2">
      <h2 class="font-bold text-26 md:text-32 lg:text-40 xl:text-46 mb-7 sm:mb-0"><?php echo $title; ?></h2>
    </div>
    <div class="w-full sm:w-1/2 sm:text-right sm:px-2">
    <?php if ( $button ) :
			$button_url = $button['url'];
			$button_title = $button['title'];
			$button_target = $button['target'] ? $button['target'] : '_self';
		?>
			<a href="<?php echo esc_url( $button_url ); ?>" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer md:mt-2 px-7 font-med bg-orange text-14 hover:bg-navy" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
		<?php endif; ?>
    </div>
  </div>
  <div class="container">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mt-14">

      <?php
			$query = new WP_Query( array(
					'post_type' => 'services',
					'orderby' => 'date',
					'order' => 'ASC',
					'posts_per_page' => '4',
					'tax_query' => array(
					)
				));
				if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();?>

          <div class="w-full">
            <a href="/grooming/" class="flex flex-col justify-between h-full px-4 py-4 border-2 rounded-sm bg-navy hover:bg-blue border-navy">
              <div>
                <div class="w-full mb-6 bg-center bg-no-repeat bg-cover h-52 sm:h-48 md:h-56 lg:h-40" style="background-image:url('<?php the_field('featured_image'); ?>');"></div>
                <h4 class="mb-4 text-orange font-med text-18 md:text-20 lg:text-20"><?php the_title(); ?></h4>
                <p class="text-14 md:text-16 mb-7"><?php the_field('intro'); ?></p>
              </div>
              <div>
                <p class="flex justify-between uppercase">
                  <span class="text-14">Read More</span>
                  <svg class="w-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 17">
                    <path d="m19.738 7.37-5.6-6.928c-.464-.529-1.206-.58-1.694-.172-.488.407-.568 1.229-.169 1.726l3.988 4.93H1.2c-.663 0-1.2.547-1.2 1.222 0 .675.537 1.223 1.2 1.223h15.063l-3.988 4.93c-.399.496-.31 1.307.169 1.725.493.432 1.295.325 1.694-.172l5.6-6.929c.365-.522.334-1.048 0-1.554Z" fill="#fff"/>
                  </svg>
                </p>
              </div>
            </a>
          </div>

      <?php endwhile;
				else :
				endif;
				wp_reset_postdata();
			?> 

    </div>
  </div>
</section>
