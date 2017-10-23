<div class="owl-carousel owl-theme">
  <div class="item animat-box" data-animate-effect="fadeInLeft"><img src="assets/images/1.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/1.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/2.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/3.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/4.jpg" class="img img-responsive" alt="" title=""></div>
  <div  class="item"><img src="assets/images/2.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/1.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/1.jpg" class="img img-responsive" alt="" title=""></div>
  <div class="item"><img src="assets/images/1.jpg" class="img img-responsive" alt="" title=""></div>
</div>
<script type="text/javascript">
  $( document).ready(function(){
    $('.owl-carousel').owlCarousel({
      // margin: 10,
      // loop: true,
      // autoWidth: true,
      // autoHeight: true,
      // items:4
      stagePadding: 50,
      loop: true,
      margin:1,
      nav:true,
      responsive:{
        0:{
          items:1
      },
      600:{
        items:3
      }
      800:{
        items:5
      }
    });
  })
</script>
