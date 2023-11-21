<?php 
  include './config.php';

	// Functions
	function includeWorkItem($slug, $company, $brief, $img_m, $img_d, $gradient, $tags) {
		include(ABSPATH . '/partials/card__work.php');
	}

	// Data
	$page_title = "Work Portfolio";
	$page_description = "From the rich consumer insights and behavioural data we harness, to the creation of a compelling brand narrative.";
	include ABSPATH . '/data/work.php';

	include ABSPATH . '/partials/header.php';
?>
<div class="hero">
	<video preload="auto" autoplay playsinline muted="muted" loop class="feature-img__bgvideo"><source src="<?=HTML_ROOT;?>/assets/videos/work/920x518_work_v2.mp4" type="video/mp4" poster="<?=HTML_ROOT;?>/assets/images/work/video-still.webp"></video>
</div>
<section>
	<div class="container container-xxl">
		<div class="row justify-content-center">
			<div class="col col-12 col-md-8 col-lg-6">
				<h1>Our Work</h1>
				<p class="intro">Growing market share, creating behaviour change, winning hearts. Here are some of our most effective and talked about creative ideas.</p>
				<div id="work-filters">
					<h5 class="filter-by">Filter by service:</h5>
					<a id="filter--brand" class="label">Brand</a>
					<a id="filter--social" class="label">Social</a>
          <a id="filter--ooh" class="label">OOH</a>
          <a id="filter--digital" class="label">Digital</a>
          <a id="filter--tvc" class="label">TVC</a>
					<a id="filter--website" class="label">Website</a>
          <a id="filter--clear" class="label--clear">Remove filter</a>
				</div>
        <div id="work-filters--mobile">
          <select id="work-filters--mobile__select">
            <option value="all">All</option>
            <option value="brand">Brand</option>
            <option value="social">Social</option>
            <option value="ooh">OOH</option>
            <option value="digital">Digital</option>
            <option value="tvc">TVC</option>
            <option value="website">Website</option>
          </select>
        </div>
				<div class="gutter"></div>
			</div>
		</div>
	</div>
	<div id="work-cards">
		<div class="cards work-cards--primary">
			<!-- Primary Work Cards -->
			<?php
				$primary_work = array_slice($work, 0, 9);
					foreach ($primary_work as $item) {
						includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb_primary_m"], $item["thumb"], $item["gradient"], $item["tags"]);
					}
			?>
      
		</div>
    <div class="work-cards--secondary-container">
      <div class="cards work-cards--secondary">
        <!-- Secondary Work Cards -->
        <?php
          $secondary_work = array_slice($work, 9);
          foreach ($secondary_work as $item) {
              includeWorkItem($item["slug"], $item["company"], $item["brief"], $item["thumb"], $item["thumb"], $item["gradient"], $item["tags"]);
            }
        ?>
      </div>
    </div>
    <div class="work-btn">
      <a id="work-btn__btn" class="button work-btn__btn">Load more work +</a>
    </div>
	</div>
</section>


<?php
	include ABSPATH . '/partials/footer.php';
?>
