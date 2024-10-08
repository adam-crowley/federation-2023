<?php 
  include './config.php';

	// Functions
	function includeWorkItem($slug, $company, $brief, $img_m, $img_d, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}
	function includeTestimonial($quote, $name, $role, $company, $image_mobile, $image_desktop) {
		include(ABSPATH . '/partials/testimonial.php');
	}

	// Data
	$page_title = "Leading New Zealand advertising agency for ambitious clients across NZ and Australia";
	$page_description = "We’re Federation, an advertising agency creating provocative ideas that live within advertising, entertainment and technology.";
	$styles = [
		'slick.css',
	];
	$scripts = [
		'slick.min.js',
	];
	include ABSPATH . '/data/work.php';
	include ABSPATH . '/data/testimonials.php';
	include ABSPATH . '/partials/header.php';

  // Send headers to prevent caching of testimonial order on homepage
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");

?>
<div id="hero--home" class="hero hero--home">
		<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_2023_Homepage_v4.mp4" type="video/mp4"></video>
		<span id="what1" class="what h1 d-none d-md-inline-block">What does success</span>
		<span id="what2" class="what h1 d-none d-md-inline-block">look like to you?</span>
</div>
<div class="container">
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1 id="h1--home">What does success look like to you?</h1>
				<p>Understanding what success looks like to you is the most powerful place for us to start.</p>
        <p>And it’s the question we ask every one of our clients.</p>
        <p>What opportunity do you want to unleash? What audience behaviours do you want to change? What are the marketing goals you want to knock into the stratosphere?</p>
        <p>Your ‘success’ defines our mission, our strategic response, our creative approach and how we measure performance.</p>
        <p>Welcome to Federation – leading independent New Zealand agency for ambitious clients.</p>
				<div class="gutter--xs"></div>
				<a href="<?=HTML_ROOT;?>/about" class="button">About us</a>
			</div>
		</div>	
	</div>
</section>

<section>
	<div class="finger finger--slick-work align-items-center">
		<div class="finger__text">
			<h2>Our work</h2>
			<div class="slick--controls">
				<a href="" class="button button--spot prev slick-work-prev"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt="<"></a>
				<a href="" class="button button--spot next slick-work-next"><img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/chevron-right.svg" alt=">"></a>
				<span class="our-work-button-spacer"></span>
				<a href="<?=HTML_ROOT;?>/work" class="button button--reverse">See all work <img class="svg" src="<?=HTML_ROOT;?>/assets/images/utility/arrow-right.svg" alt=">"></a>
			</div>
		</div>
		<div class="finger__image">
			<div id="slick__work" class="cards">
				<!-- Work Cards -->
				<?php
					// note: number of items must match css nth-child in slick.scss or animation will be jerky
					$four_work_items = array_slice($work, 0, 9); 
					foreach ($four_work_items as $item) {
						includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb_primary_m"], $item["thumb"], $item["gradient"], $item["tags"]);
					}
				?>
			</div>
		</div>
	</div>
</section>

<section>
	<div id="slick__testimonials" class="">
		<!-- Testimonials -->
		<?php
      shuffle($testimonials);
			foreach ($testimonials as $item) {
				includeTestimonial($item["quote"], $item["name"], $item["role"], $item["company"], $item["image_mobile"], $item["image_desktop"]);
			}
		?>	
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
