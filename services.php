<?php 
  include './config.php';

	// Functions
	function includeAccordionItem($title, $content) {
		include(ABSPATH . '/partials/item__accordion.php');
	}

	// Data
	$page_title = "Our Services";
	$page_description = "We’ve built our team of specialists to think, create and make great work across inside-out brand strategy, customer experience, technology, digital, direct, data, content, and social.";

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

<section class="services">
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				
			</div>
		</div>
	</div>
</section>

<?php
	include ABSPATH . '/partials/footer.php';
?>
