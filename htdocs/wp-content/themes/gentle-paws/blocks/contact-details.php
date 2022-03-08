<section class="w-full py-20 text-white bg-blue md:py-24 lg:py-28">
	<div class="container flex flex-col text-center sm:text-left sm:flex-row">
    <div class="w-full mb-8 md:w-1/2 sm:mb-0">
      <h2 class="mb-4 font-bold text-26 md:text-32 lg:text-40 md:mb-7">Phone</h2>
      <p class="mb-1 md:mb-2 text-18 md:text-22"><span class="font-bold">t: </span><?php the_field('phone_number', 'option'); ?></p>
      <p class="text-18 md:text-22"><span class="font-bold">m: </span><?php the_field('mobile_number', 'option'); ?></p>
    </div>
    <div class="w-full md:w-1/2">
      <h2 class="mb-3 font-bold text-26 md:text-32 lg:text-40 md:mb-7">Email</h2>
      <p class="text-18 md:text-22"><a class="hover:text-orange" href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
    </div>
  </div>
</section>
