<?php 
  include './config.php';

	// Functions
	function includeHeroImage($img_m, $img_d, $img_dxl, $page_title) {
		include(ABSPATH . '/partials/hero--image.php');
	}
	function includePeopleItem($slug, $name, $role, $thumb) {
		include(ABSPATH . '/partials/card__people.php');
	}
	function includePeopleBio($slug, $name, $role, $image_mobile, $image_desktop, $bio) {
		include(ABSPATH . '/partials/modal__person.php');
	}

	// Data
	$page_title = "About Us";
	$page_description = "We were born to make the world’s most creative and effective ideas to help brands prosper.";
	$img_path = HTML_ROOT . '/assets/images/about/';
	include ABSPATH . '/data/people.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="page--about">
	<?php
		// includeHeroImage(
		// 	$img_path . 'Staff-hero_Mobile_v1.webp',
		// 	$img_path . 'Staff-hero_Desktop_v2.webp',
		// 	$img_path . 'Staff-hero_Desktop_XL_v2.webp',
		// 	$page_title,
		// );
	?>
  <div class="hero">
    <video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/About-header_CL_v2.mp4" type="video/mp4"></video>
  </div>
	<section>
		<div class="container container-xxl">
			<div class="row justify-content-center">
				<div class="col col-12 col-md-8 col-lg-6">
					<h1>Who we are</h1>
					<p class="intro">From a market challenger start-up in 2008, Federation has become one of the leading independent agencies in New Zealand – headquartered in Auckland, with operations in Wellington and Melbourne. We are hungry to do things differently and free to do the best work possible.</p>
					<p class="intro">We work with leading New Zealand and Australian global brands. NZX and ASX listed and private equity owned companies. Government and local government. Multi-national brand leaders. And entrepreneurial brands ambitious for the world stage.</p>
					<p class="intro">We create far-reaching, enduring solutions to your opportunities and challenges. More than an advertising agency, we are innovators with a focus on your mission.</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container container-xxl">
      <div class="row">
        <div class="col col-12 col-md-12 col-lg-9">
          <h3>Meet our people</h3>
          <p>We are a team focused on building enduring success, both for our clients and for Aotearoa New Zealand. We’re a full-service team of multi-discipline experts. We build brands and change behaviour through exceptional capability across strategy, creative, account service, digital and social. Together, we create ideas that deliver maximum impact on the people you want to influence most.</p>
        </div>
      </div>
			<div id="people-cards" class="cards">
				<!-- People Cards -->
				<?php
					foreach ($people as $item) {
						includePeopleItem($item["slug"], $item["name"], $item["role"], $item["thumb"]);
					}
				?>
				<!-- People Bios -->
				<?php
					foreach ($people as $item) {
						includePeopleBio($item["slug"], $item["name"], $item["role"], $item["image_mobile"], $item["image_desktop"], $item["bio"]);
					}
				?>
        <div id="people-btn" class="people-btn">
          <div class="people-btn__container">
            <div class="people-btn__gradient"></div>
            <a id="people-btn__btn" class="button people-btn__btn">See more people +</a>
          </div>
        </div>
			</div>
      
      
		</div>
	</section>
	<section id="section--our-services ">
		<div class="finger align-items-center">
			<div class="finger__image">
				<img src="<?=HTML_ROOT;?>/assets/images/about/services-cta.webp" alt="Services at Federation" class="card__img">
			</div>
			<div class="finger__text">
				<h2>Our services</h2>
				<p>Yes, we sweat the big stuff. But we also sweat the smallest of details to help you succeed.</p>
				<div class="gutter--xs"></div>
				<a href="<?=HTML_ROOT;?>/services" class="button">See more</a>
			</div>
		</div>
	</section>
</div>

<?php
	include ABSPATH . '/partials/footer.php';
?>
