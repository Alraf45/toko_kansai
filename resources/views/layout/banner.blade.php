<!-- Tambah link Swiper CSS & JS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Container -->
<div class="swiper mySwiper mt-10 max-w-7xl mx-auto h-96 rounded-lg shadow-lg overflow-hidden">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="/img/Web-side-banner-.png" class="w-full h-full object-cover" />
    </div>
    <div class="swiper-slide">
      <img src="/img/1.jpg.jpeg" class="w-full h-full object-cover" />
    </div>
    <div class="swiper-slide">
      <img src="/img/banner19-1536x640.jpg" class="w-full h-full object-cover" />
    </div>
  </div>
  <!-- Navigasi -->
  <div class="swiper-pagination"></div>
</div>

<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 4800,
    },
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

