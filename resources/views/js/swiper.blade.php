 <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    var swiper_tlf = new Swiper('.tlf', {
      slidesPerView: 1, 
      spaceBetween: 50,     
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true,
    
    });
  </script>