<?php
	$title = get_sub_field('title');
	$text = get_sub_field('text');
?>

<section class="w-full py-20 text-white bg-navy md:py-24 lg:py-28">
	<div class="container">
    <div class="w-full">
      <h2 class="font-bold text-26 md:text-32 lg:text-40 xl:text-46 mb-7"><?php echo $title; ?></h2>
      <p class="mb-10 text-18 md:text-22 lg:mb-14"><?php echo $text; ?></p>
      <?php /*<?php echo do_shortcode('[gravityform id="1"]'); ?>*/?>
      <?php echo do_shortcode('[contact-form-7 id="243" title="Contact form"]'); ?>
    </div>
  </div>
</section>
