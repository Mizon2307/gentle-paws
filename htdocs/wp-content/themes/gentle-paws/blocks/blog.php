<?php
	$title = get_sub_field('title');
  $button = get_sub_field('button');
?>

<section class="w-full pt-20 pb-10 bg-white text-navy md:py-24 lg:py-28">
  <div class="container flex flex-col sm:flex-row">
    <div class="w-full sm:w-1/2 md:w-2/3">
      <h2 class="font-bold text-26 md:text-32 lg:text-40 xl:text-46 mb-7 sm:mb-0"><?php echo $title; ?></h2>
    </div>
    <div class="w-full sm:w-1/2 md:w-1/3 sm:text-right sm:px-2">
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
    <div class="grid grid-cols-1 gap-12 md:gap-6 lg:gap-8 md:grid-cols-3 mt-14">

      <?php
			$query = new WP_Query( array(
					'post_type' => 'post',
					'orderby' => 'date',
					'order' => 'ASC',
					'posts_per_page' => '3',
					'tax_query' => array(
					)
				));
				if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();?>

          <div class="w-full">
            <div>
              <div class="w-full bg-top bg-no-repeat bg-cover rounded-t-md mb-7 h-52 sm:h-80 md:h-48" style="background-image:url('<?php the_field('featured_image'); ?>');"></div>
              <div class="flex flex-wrap justify-between mb-4">
                <p class="text-14 text-orange font-med"><?php the_time( 'd/m/Y' ); ?></p>
              </div>
              <h4 class="mb-3 font-bold text-navy text-18 md:text-20 lg:text-20"><?php the_title(); ?></h4>
              <span class="text-14 md:text-16 mb-7"><?php echo truncate($post->post_content, 150); ?></span>
            </div>
            <div>
              <a href="<?php the_permalink(); ?>" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer px-7 font-med bg-blue text-14 hover:bg-navy mt-7">Read More</a>
            </div>
          </div>

      <?php endwhile;
				else :
				endif;
				wp_reset_postdata();
			?> 

    </div>
  </div>
</section>
