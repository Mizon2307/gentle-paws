<section class="w-full pt-20 md:pt-24 lg:pt-28 lg:pb-4">
  <div class="container">
    <div class="grid grid-cols-1">

      <?php
			$query = new WP_Query( array(
					'post_type' => 'services',
					'orderby' => 'date',
					'order' => 'ASC',
					'tax_query' => array(
					)
				));
				if ( $query->have_posts() ) :
				while ( $query->have_posts() ) : $query->the_post();?>

          <div class="w-full mb-20 md:mb-24 md:grid md:grid-cols-2 md:gap-12 lg:gap-16 service">

            <div class="w-full h-64 mb-6 bg-top bg-no-repeat bg-cover md:mb-0 sm:h-96 md:h-full service-flip" style="background-image:url('<?php the_field('featured_image'); ?>');"></div>

            <div class="grooming-content">
              <h2 class="mb-5 font-bold lg:mb-6 text-30 md:text-32 lg:text-36 text-blue"><?php the_title(); ?></h2>
              <?php the_field('text'); ?>
              <a href="/contact/" class="inline-block py-3 mt-6 text-white uppercase rounded-md cursor-pointer px-7 md:px-8 md:py-4 font-med bg-orange text-14 md:text-16 hover:bg-navy">Enquire Now</a>
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
