@extends('layouts.phone')
@section('title')
 | Lookbook
@endsection
@section('content')
@include('components.headerphone2')
<section>
  <div class="lookbook-wrapper">
    <div class="container-lg">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(/images/LOOKBOOK1.JPG);"></div>
          <div class="swiper-slide" style="background-image: url(/images/LOOKBOOK2.JPG);"></div>
          <div class="swiper-slide" style="background-image: url(/images/LOOKBOOK3.JPG);"></div>
          <div class="swiper-slide" style="background-image: url(/images/LOOKBOOK4.JPG);"></div>
          <div class="swiper-slide" style="background-image: url(/images/LOOKBOOK5.JPG);"></div>
        <!-- Add Pagination -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="lookbook-name">
        <p>Escaper - Lookbook Collection 2021</p>
      </div>
    </div>
  </div>
</section>
	
@include('components.footerphone')
@endsection
	
@section('script')
<script>
  
    var swiper = new Swiper('.swiper-container', { 
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true, 
      autoplay: { 
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
</script>
@endsection