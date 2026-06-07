<?php
	include 'partials/header.php';
?>

<section id="slider" class="position-relative padding-xlarge no-padding-top">
	<div class="container">
		<div class="swiper main-slider overflow-hidden">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="../assets/images/slider-img1.jpg" class="slider-img img-fluid" style="width:1300px; height:643px; object-fit:cover;">
					<div class="carousel-text text-start">
						<div class="story-title-wrap mt-3">
							<div class="post-meta"><a href="events.php">Music Event</a></div>
							<h2 class="story-title">
								<a href="single-post.php">Summer Night Festival in the City Center</a>
							</h2>				
							<p>
								Live music, food trucks, and local artists. Join hundreds of visitors during one of the biggest summer events in town.
							</p>
							<div class="entry-meta">
								<span class="author">
									<span class="sp">organized by</span>
									<span class="author-name">Local Events Hub</span>
								</span>
								<span class="meta-date">
									<span class="sp">-</span>
									<time class="published">June 14, 2026</time>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<img src="../assets/images/slider-img2.jpg" class="slider-img img-fluid" style="width:1300px; height:643px; object-fit:cover;">
					<div class="carousel-text text-start">
						<div class="story-title-wrap mt-3">
							<div class="post-meta"><a href="events.php">Workshop</a></div>
							<h2 class="story-title">
								<a href="single-post.php">Photography Workshop for Beginners</a>
							</h2>				
							<p>
								Learn camera basics, lighting, and editing from local photographers in a hands-on workshop.
							</p>
							<div class="entry-meta">
								<span class="author">
									<span class="sp">organized by</span>
									<span class="author-name">Creative Studio</span>
								</span>
								<span class="meta-date">
									<span class="sp">-</span>
									<time class="published">July 2, 2026</time>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<img src="../assets/images/slider-img3.jpg" class="slider-img img-fluid" style="width:1300px; height:643px; object-fit:cover;">
					<div class="carousel-text text-start">
						<div class="story-title-wrap mt-3">
							<div class="post-meta"><a href="events.php">Sports</a></div>
							<h2 class="story-title">
								<a href="single-post.php">Community Football Tournament</a>
							</h2>				
							<p>
								Local teams compete in a weekend football tournament open to players and spectators.
							</p>
							<div class="entry-meta">
								<span class="author">
									<span class="sp">organized by</span>
									<span class="author-name">City Sports Club</span>
								</span>
								<span class="meta-date">
									<span class="sp">-</span>
									<time class="published">August 8, 2026</time>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-icon swiper-arrow slider-arrow-next position-absolute top-0 bottom-0 end-0 d-flex align-items-center">
			<a href="#">
			<svg class="bi" width="60" height="60">
			<use xlink:href="#long-arrow-alt-right"></use>
			</svg>
			</a>
        </div>
		<div class="swiper-icon swiper-arrow slider-arrow-prev position-absolute top-0 bottom-0 start-0 d-flex align-items-center">
			<a href="#">
			<svg class="bi" width="60" height="60">
			<use xlink:href="#long-arrow-alt-left"></use>
			</svg>
			</a>
        </div>
        <div class="swiper-pagination main-slider-pagination"></div>
	</div>
</section>
<section id="latest-posts" class="latest-posts margin-large">
	<div class="container">
		<div class="title-wrap d-flex justify-content-between">			
			<div class="section-header">
				<h4 class="elementary-title">Upcoming Events</h4>
			</div>
			<a href="events.php" class="button">
				View all events
				<svg class="bi" width="18" height="18">
					<use xlink:href="#chevron-forward"></use>
				</svg>
			</a>
		</div>
		<div class="row">
			<div class="post-item col-md-4">
				<figure class="zoom-effect">
					<a href="single-post.php" class="zoom-in">
						<img src="../assets/images/item1.jpg" alt="event" class="blogImg img-fluid" style="width:560px; height:397px; object-fit:cover;">
					</a>
				</figure>
				<div class="story-title-wrap mt-3">
					<div class="post-meta">
						<a href="events.php">Technology</a>
					</div>
					<h3 class="story-title">
						<a href="single-post.php">Startup Networking Evening</a>
					</h3>				
					<div class="entry-meta">
						<span class="author">
							<span class="sp">Location</span>
							<span class="author-name">City Hall</span>
						</span>
						<span class="meta-date">
							<span class="sp">-</span>
							<time class="published">June 20, 2026</time>
						</span>
					</div>
				</div>
			</div>
			<div class="post-item col-md-4">
				<figure class="zoom-effect">
					<a href="single-post.php" class="zoom-in">
						<img src="../assets/images/item2.jpg" alt="event" class="blogImg img-fluid" style="width:560px; height:397px; object-fit:cover;">
					</a>
				</figure>
				<div class="story-title-wrap mt-3">
					<div class="post-meta">
						<a href="events.php">Food Festival</a>
					</div>
					<h3 class="story-title">
						<a href="single-post.php">Street Food Weekend</a>
					</h3>				
					<div class="entry-meta">
						<span class="author">
							<span class="sp">Location</span>
							<span class="author-name">Central Square</span>
						</span>
						<span class="meta-date">
							<span class="sp">-</span>
							<time class="published">July 10, 2026</time>
						</span>
					</div>
				</div>
			</div>
			<div class="post-item col-md-4">
				<figure class="zoom-effect">
					<a href="single-post.php" class="zoom-in">
						<img src="../assets/images/item3.jpg" alt="event" class="blogImg img-fluid" style="width:560px; height:397px; object-fit:cover;">
					</a>
				</figure>
				<div class="story-title-wrap mt-3">
					<div class="post-meta">
						<a href="events.php">Education</a>
					</div>
					<h3 class="story-title">
						<a href="single-post.php">Programming Basics Bootcamp</a>
					</h3>				
					<div class="entry-meta">
						<span class="author">
							<span class="sp">Location</span>
							<span class="author-name">Community Center</span>
						</span>
						<span class="meta-date">
							<span class="sp">-</span>
							<time class="published">August 1, 2026</time>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	include 'partials/footer.php';
?>
