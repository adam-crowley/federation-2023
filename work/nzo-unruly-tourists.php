<?php 
  include '../config.php';

	// Functions
	function includeNextItem($slug, $company, $brief, $img, $gradient, $tags) {
		include(ABSPATH . '/partials/card__next.php');
	}
	function includeHeroImage($img_m, $img_d, $img_dxl, $page_title) {
		include(ABSPATH . '/partials/hero--image.php');
	}
	function includeServiceSection($title, $alt, $img_m, $img_d, $img_dxl) {
		include(ABSPATH . '/partials/service-section.php');
	}
	function includeServiceSectionVideo($title, $mp4, $poster) {
		include(ABSPATH . '/partials/service-section--video.php');
	}
	function includeServiceSectionSlickV($title, $cards) {
		include(ABSPATH . '/partials/service-section--slick-v.php');
	}
	function includeServiceSectionSlickH($title, $squared, $cards) {
		include(ABSPATH . '/partials/service-section--slick-h.php');
	}
	function includeServiceSectionSlickHW($cards) {
		include(ABSPATH . '/partials/service-section--slick-hw.php');
	}

	// Data
	$page_title = "NZ Opera - Unruly Tourists";
	$page_description = "";
	$styles = [
		'work__detail.css',
		'slick.css'
	];
	$scripts = [
		'slick.min.js',
	// 	'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js',
	];
	include ABSPATH . '/data/work.php';

	// Get this page data from data/work.php, based on current slug
	$url= $_SERVER['REQUEST_URI'];
	$slug_with_php = substr($url, strrpos($url, "/") + 1);
	$slug = preg_replace('/.php/', '', $slug_with_php);
	$page_data = $work[$slug];

	// Next work item data
	$keys = array_keys($work); 
	$index = array_search($page_data['slug'],$keys); 
	if (count($work) <= $index+1 ) { 
		$next_page_data = $work[$keys[0]]; 
	} else { 
		$next_page_data = $work[$keys[$index+1]]; 
	}

	$img_path = HTML_ROOT . '/assets/images/work/' . $page_data['slug'] . '/';
	$video_path = HTML_ROOT . '/assets/videos/work/' . $page_data['slug'] . '/';

	include ABSPATH . '/partials/header.php';
?>

<?php
	includeHeroImage(
		$img_path . 'Unruly-Tourists-hero_Mobile.webp',
		$img_path . 'Unruly-Tourists-hero_Desktop.webp',
		$img_path . 'Unruly-Tourists-hero_Desktop_XL.webp',
		$page_title,
	);
?>
<section>
	<div class="container container-xxl container--case-study-copy container--case-study-copy">
		<div class="row">
			<h1 class="h1--work maintain-margin"><?=$page_data['company']?></h1>
		</div>
		<div class="row justify-content-center">
			<div class="col col-12 col-md-6">
				<h2><?=$page_data['brief']?></h2>
				<p class="maintain-margin"><strong>Services:</strong>
					<?php
						foreach($page_data['tags'] as $tag) {
							echo '<br>' . $tag;
						}
					?>
				</p>
			</div>
			<div class="col col-12 col-md-6">
				<h5>Challenge</h5>
				<p>Opera is seen as a dignified, if slightly stuffy, artform. In the battle to get much younger bums on seats, NZ Opera needed to be more innovative in both their show choices and the ways they promoted them.</p>
				<h5>Solution</h5>
				<p>The ‘Unruly Tourists’ were a band of overseas visitors who invaded New Zealand’s shores. They tested our patience, both captivating and repelling us.<br>In 2023, NZ Opera took this provocative story to the stage.<br>To promote the show, NZ Opera created an Us Vs Them campaign. The actual insults posted on social media sites by angry Kiwis were pitted against those of the tourists. The abuse became our headlines. And this led to the inevitable question ‘Who was truly unruly?”</p>
				<h5>Results</h5>
				<p>Successful? You f***ing betcha. The campaign resulted in sell out shows and a dramatic uplift in younger audience members. Turns out that trash sells.</p>
			</div>
		</div>
	</div>
</section>

<div class="services">

	<section class="service-section">
		<div class="service align-items-center">
			<div class="service__image">

				<?php /* Mobile only */ ?>
				<div class="text-graphic d-md-none" style="background-color: black; background-image:url(<?=$img_path?>Unruly-Stat-mobile.webp); background-size: cover;">
          <h4>An uplift in a younger<br> target audience</h4> 
				</div>

				<?php /* Desktop only */ ?>
				<div class="text-graphic d-none d-md-flex" style="background-color: black; background-image:url(<?=$img_path?>Unruly-Stat-Desktop.webp); background-size: cover;">
					<div class="stat" style="font-size: 3.5vw">An uplift in a younger<br> target audience</div>
				</div>
			</div>
			<!-- <div class="service__text">
				<h4 class="d-md-none">An uplift in a younger target audience</h4>
			</div> -->
		</div>
	</section>

  <?php
		includeServiceSectionVideo(
			"Video",
			$video_path . "Unruly_920x518_v2_comp.mp4",
			$img_path . "Unruly-Video-XL.webp",
		);
    includeServiceSection(
			"OOH",
			"OOH",
			$img_path . "Unruly-OOH-mobile.webp",
			$img_path . "Unruly-OOH-Desktop.webp",
			$img_path . "Unruly-OOH-XL.webp",
		);
	?>

	

<!-- END .services -->
</div> 

<?php
	includeNextItem($next_page_data['slug'], $next_page_data["company"], $next_page_data["brief"], $next_page_data["thumb_sq"], $next_page_data["gradient"], $next_page_data["tags"]);
	
	include ABSPATH . '/partials/footer.php';
?>
