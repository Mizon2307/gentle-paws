$(function () {
  // Add class to remove pre-loader
  setTimeout(function () {
    $('.preloader').addClass('hide-loader')
  }, 750)

  //Opens/Closes burger menu on click.
  $('#hamburger').click(function () {
    $(this).toggleClass('animate')
    $('header').toggleClass('active-header')
    $('.nav-mob-container').toggleClass('active-nav')
    $('body, html').toggleClass('show')
  })

  $('nav a').on('click', function () {
    $('.nav-mob-container').removeClass('active-nav')
    $('#hamburger').removeClass('animate')
    $('body, html').removeClass('show')
  })

  // Swiper Js
  var swiper1 = new Swiper('.mySwiper1', {
    loop: true,
    autoHeight: true,
    lazyLoading: true,
    slidesPerView: 1,
    spaceBetween: 80,
    speed: 1000,
    navigation: {
      nextEl: '.slider-next',
      prevEl: '.slider-prev',
    },
  })
})
