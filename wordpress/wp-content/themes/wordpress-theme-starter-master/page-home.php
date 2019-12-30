<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header('header-demo'); ?>

	<main role="main">
		<!-- section -->
		<div class="container">
		<figure class="hero d-flex flex-column justify-content-end">
			<figcaption>
			<h1 id="title">NBA CITY <br> EDITION JERSEYS</h1>
			<p id="description">Inspired by LA, Brooklyn and every city in between.</p>
			</figcaption>
			<button class="btn shop">
				Shop
			</button>
			

		</figure>
	</div>
		<!-- /section -->

		<!-- CAROUSEL -->
		<h2 class="ml-5 mt-5">Basketball's Best</h2>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active d-flex flex-row align-items">
	  <img class="d-block w-25 shoes" src="https://c.static-nike.com/a/images/f_auto/q_auto/t_PDP_864_v1/z4d2dvacdx6vc3a5wi0g/lebron-17-basketball-shoe-6LSXgh.jpg" alt="First slide">
	  <img class="d-block w-25 shoes" src="https://c.static-nike.com/a/images/f_auto/q_auto/t_PDP_864_v1/719f2dc9-7b11-4576-84ed-4dc0bbb7f03e/kyrie-6-basketball-shoe-KQmCXH.jpg" alt="">
	  <img class="d-block w-25 shoes" src="https://c.static-nike.com/a/images/f_auto/q_auto/t_PDP_864_v1/zaiywkaxptzxmajetrd7/pg-3-basketball-shoe-nzrq5r.jpg" alt="">
	  <img class="d-block w-25 shoes" src="https://c.static-nike.com/a/images/f_auto/q_auto/t_PDP_864_v1/mpjp035mxzjelypmebmj/zoom-freak-1-basketball-shoe-tmk8Hw.jpg" alt="">
    </div>
   <div class="carousel-item">
      <img class="d-block w-25 shoes" src="https://c.static-nike.com/a/images/f_auto/q_auto/t_PDP_864_v1/3d8a6abb-cdc3-4465-9944-03b8f3abeec4/air-zoom-unvrs-flyease-basketball-shoe-29tFGs.jpg" alt="Second slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>  -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</main>



				
<?php get_footer(); ?>
