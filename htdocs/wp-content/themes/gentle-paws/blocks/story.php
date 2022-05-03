<?php
	$title = get_sub_field('title');
  $txt = get_sub_field('text');
  $image = get_sub_field('image');
  $button = get_sub_field('button');
?>

<section class="w-full text-navy bg-orange story">
  <div class="container grid grid-cols-1 gap-0 md:grid-cols-2 md:gap-12 lg:gap-16">
    <div class="relative px-6 pt-20 pb-10 md:py-24 lg:py-28 md:pl-12 lg:pl-20 md:pr-0">
      <svg class="absolute top-0 right-0 w-20 mt-10 mr-6 md:w-24 lg:w-28 md:mr-0" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 101">
        <path d="M81.278 58.989c-.148-.149-.148-.447-.297-.595L25.18 86.22c.148.148.297.446.297.594 2.381 4.613.595 10.268-4.018 12.5-4.612 2.38-10.267.594-12.498-4.018-1.34-2.53-1.34-5.506-.149-8.035a.453.453 0 0 0 0-.595l-.446-.446a9.605 9.605 0 0 1-6.548-4.91c-2.38-4.613-.594-10.268 4.018-12.5 4.613-2.38 10.268-.594 12.5 4.018.148.149.148.447.297.595L73.392 45.3c-.148-.149-.297-.447-.297-.595-2.381-4.612-.595-10.267 4.017-12.499 4.018-2.083 8.929-.893 11.607 2.53l-5.505 27.379c-.3-.596-1.192-1.637-1.936-3.126Zm38.093-44.194c-1.042 5.06-5.951 8.333-11.011 7.292-.298 0-.447-.149-.744-.149l-6.398 31.695-1.042 5.208-4.763 23.362c.298 0 .447 0 .745.149 5.059 1.042 8.332 5.951 7.291 11.011-1.042 5.06-5.951 8.333-11.011 7.292-2.828-.595-5.209-2.381-6.398-4.91l-.447-.447c-.148 0-.446 0-.594.148a10.035 10.035 0 0 1-7.887 2.084c-5.059-1.043-8.332-5.952-7.291-11.012 1.042-5.059 5.951-8.332 11.011-7.291.298 0 .447.148.745.148l3.125-15.624.298-1.489 5.356-26.188.447-2.232 2.976-14.731c-.298 0-.447 0-.745-.149-5.059-1.042-8.332-5.951-7.291-11.011C86.785 2.89 91.694-.382 96.754.659c2.828.595 5.209 2.381 6.398 4.91l.447.447c.148 0 .446 0 .594-.148a10.036 10.036 0 0 1 7.887-2.083c5.059 1.04 8.332 5.951 7.291 11.01Z" fill="#4A73F3"/>
      </svg>
      <h2 class="mb-10 font-bold text-white text-26 md:text-32 lg:text-40 xl:text-46"><?php echo $title; ?></h2>
      <?php echo $txt; ?>
      <?php if ( $button ) :
        $button_url = $button['url'];
        $button_title = $button['title'];
        $button_target = $button['target'] ? $button['target'] : '_self';
      ?>
        <a href="<?php echo esc_url( $button_url ); ?>" class="inline-block py-3 text-white uppercase rounded-md cursor-pointer md:mt-2 px-7 font-med bg-blue text-14 hover:bg-navy" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
      <?php endif; ?>
    </div>
    <div class="w-full h-full bg-top bg-no-repeat bg-cover img" style="background-image:url('<?php echo $image; ?>');"></div>
  </div>
</section>
