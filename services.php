<?php 
  include './config.php';

	// Functions
  function includeWorkItem($slug, $company, $brief, $img_m, $img_d, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}
	function includeAccordionItem($title, $content) {
		include(ABSPATH . '/partials/item__accordion.php');
	}

	// Data
	$page_title = "Our Services";
	$page_description = "We’ve built our team of specialists to think, create and make great work across inside-out brand strategy, customer experience, technology, digital, direct, data, content, and social.";
  $styles = [
		'slick.css',
	];
	$scripts = [
		'slick.min.js',
	];
	include ABSPATH . '/data/work.php';

	include ABSPATH . '/data/services.php';
	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/920x518_Services_v1.mp4" type="video/mp4" poster=""></video>
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>What we do</h1>
				<p>We foster long term partnerships through performance, because enduring success doesn’t simply happen overnight.</p>
        <p>We are the first agency to offer specialist climate change and net zero advisory for brands.</p>
        <p>We bring a wealth of experience, and our senior talent will work beside you every day.</p>
        <p>We are ambitious for you. And nothing less than step-change results will do.</p>
			</div>
		</div>
	</div>
</section>

<!-- <section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<div class="accordion"> -->
					<!-- Accordion items -->
					<?php
						// foreach ($services as $item) {
						// 	includeAccordionItem($item["title"], $item["content"]);
						// }
					?>
				<!-- </div>
			</div>
		</div>
	</div>
</section> -->

<section class="service-list">
	<div class="container-lg">
		<div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-11 col-xl-10 col-xxl-8">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">Strategy</h2>
              <p class="service-list__p">[copy to come]</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
                <h2 class="service-list__h2">Creative</h2>
                <p class="service-list__p">From ideation to execution. Our teams create brand and retail platforms that are dynamic, strategic and culturally intelligent.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">Design and branding</h2>
              <p class="service-list__p">Our branding professionals develop distinctive and meaningful brand platforms - from packaging to identity.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">Digital solutions</h2>
              <p class="service-list__p">Our team of digital specialists develop strategies and solutions based on real world data and insights.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
                <h2 class="service-list__h2">From websites to e-commerce</h2>
                <p class="service-list__p">We drive digital experiences and online store sales while supporting traditional bricks and mortar models.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">Content</h2>
              <p class="service-list__p">Our team develops video and editorial content for brands. We deliver quality work at the speed (and cost) of the Internet.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">PR, events and activations</h2>
              <p class="service-list__p">In partnership with best-in-class activation producers, we deliver quality creative ideas and experiential platforms for our diverse client brands.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
                <h2 class="service-list__h2">Retail Spatial Design</h2>
                <p class="service-list__p">We’ve created transformational spaces that weave technology and communication into the customer experience.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 service-list__service-container">
            <div class="service-list__service">
              <h2 class="service-list__h2">Media planning</h2>
              <p class="service-list__p">Our relationships allow us to offer expert media planning and buying power. We pride ourselves on performance measurement and seamless integration with the creative process.</p>
            </div>
          </div>
        </div>
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

<?php
	include ABSPATH . '/partials/footer.php';
?>
