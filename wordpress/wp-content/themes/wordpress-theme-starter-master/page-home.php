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
    <div class="carousel-item active d-flex flex-row">
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

<!-- LATEST AND GREATEST -->
<h2 class="mt-5 ml-5">The Latest and Greatest</h2>
<section class="contatiner-fluid d-flex">
  <figure class="col-6 latest d-flex justify-content-end flex-column">
  <figcaption>
  <h1 class="latestgr8est mb-5 ml-5">New Work Essentials</h1>
  </figcaption>
    <button class="btn shop ml-5">
    Shop
    </button>
  </figure>
  <figure class="col-6 andgreatest d-flex justify-content-end flex-column">
    <figcaption>
      <h1 class="latestgr8est mb-5 ml-5">
        Air Jordan IV Retro 'Winterized' and More.
      </h1>
    </figcaption>
  <button class="btn shop ml-5">
    Shop
    </button>
  </figure>
</section>
<h2 class="mt-5 ml-5">Mix-and-Match Styles</h2>
<section class="container-fluid d-flex">
  <figure class="col-12 bettertogether">
  <figcaption>
    <h1 class="mixmatch">BETTER <br> TOGETHER</h1>
    <p id="description">Must-have looks for you and your crew.</p>
  </figcaption>
  <button class="btn shop ml-5">
    Shop
    </button>
  </figure>
</section>
<h2 class="ml-5"> Trending Now</h2>
<section class="contatiner-fluid d-flex">
  <figure class="col-6 airforce1 d-flex justify-content-end flex-column">
    <figcaption>
      <h1 class="mb-5 ml-5" id="description">Air Force 1 'Triple Black'</h1>
      <button class="btn shop ml-5">
        Shop
      </button>
    </figcaption>
  </figure>
  <figure class="col-6 airmaxdia d-flex justify-content-end flex-column">
    <figcaption>
      <h1 class="trending ml-5 mb-5">Featured In Nike Air Shop: <br> 
      Air Max Dia</h1>
      <button class="btn shop ml-5 blackbtn"> Shop</button>
      <button class="btn shop ml-5 blackbtn"> Explore</button>
    </figcaption>
  </figure>
</section>
<h2 class="ml-5 mt-5 mb-5">Last Minute Picks for Every Athlete</h2>
<section class="container-fluid d-flex">
  <figure class="col-4 her d-flex justify-content-end flex-column"> 
    <h3>Top Picks for Her</h3>
  </figure>
  <figure class="col-4 him d-flex justify-content-end flex-column"> 
    <h3>Top Picks for Him</h3>
  </figure>
  <figure class="col-4 kids d-flex justify-content-end flex-column"> 
    <h3>Top Picks for Kids</h3>
  </figure>
 
</section>
	</main>


</section>
<?php get_footer(); ?>
