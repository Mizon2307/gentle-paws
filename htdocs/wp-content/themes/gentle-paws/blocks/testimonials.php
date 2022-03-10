<?php
	$title = get_sub_field('title');
?>

<section class="w-full py-20 text-white bg-blue md:py-24 lg:py-28">
	<div class="container overflow-hidden">
    <div class="relative w-full">

      <div class="flex items-center justify-between w-full mb-12">
        <h2 class="font-bold text-26 md:text-32 lg:text-40 xl:text-46"><?php echo $title; ?></h2>

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
