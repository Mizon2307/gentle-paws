<?php
	$title = get_sub_field('title');
  $button = get_sub_field('button');
?>

<section class="w-full py-20 text-blue bg-grey md:py-24 lg:py-28">
	<div class="container flex flex-col sm:flex-row">
    <div class="w-full sm:w-1/2 sm:px-2">
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
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 mt-14">

      <?php
        if( have_rows ('images') ):
        while ( have_rows ('images') ) : the_row();
      ?>

        <?php 
          $image = get_sub_field('image');
          if( !empty( $image ) ): ?>
            <div class="w-full gallery-img">
              <div class="w-full h-full bg-center bg-no-repeat bg-cover" style="background-image:url('<?php echo esc_url($image['url']); ?>');"></div>
            </div>
        <?php endif; ?>

      <?php endwhile; endif; ?>

    </div>
  </div>
</section>
