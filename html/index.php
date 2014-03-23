<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PSD to HTML Conversion</title>

	<!-- Works fine with/without normalize.css - Just good practice. -->
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<!-- Outermost Wrapper - Full Screen Width -->
	<div class="outer-wrapper">

		<!-- Inner Wrapper - Contents Width/Center Block -->
		<div class="inner-wrapper">

			<!-- Header -->
			<header class="header">

				<div class="float-left">
					<img src="img/imperio-logo-with-text.png" alt="">
				</div>

				<nav class="nav float-right">
					<?php $top_nav_links = ['Home' => '#', 'About' => '#', 'Services' => '#', 'Portfolio' => '#', 'Contact' => '#', 'Blog' => '#']; ?>
					<ul>
						<?php foreach ($top_nav_links as $name => $href): ?>
						<li <?php echo $name == 'Home' ? 'class="active"' : ''; ?> >
							<a href="<?php echo $href; ?>"><?php echo $name; ?></a>
						</li>
						<?php endforeach ?>
					</ul>
				</nav>
				<div class="clearfix"></div>
			</header>

			<!-- Slideshow -->
			<div class="slider-container tricky-striped-border">
				<div class="slide">
					<img src="http://lorempixel.com/940/358/food/<?php echo rand(1,8); ?>" width="940" height="358" alt="">
					<div class="caption">
						<div>
						<p class="caption-block caption-block-blue">
							We Strive to be
						</p>
						</div>
						<div>
						<p class="caption-block caption-block-tan">
							Awesome Blossoms...
						</p>
						</div>
					</div>
				</div>
				<div class="slider-controls">
					<ul class="list-inline">
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li class="active"><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
			</div>

			<!-- Tagline Quote -->
			<div class="big-quote-row">
				<div class="dotted-row"></div>
				Imperio is a group of <span class="text-color-accent">Creative Professionals</span> who desire nothing else but to be awesome. Check out some of our latest projects below, we think you’ll like them.
				<div class="dotted-row"></div>
			</div>

			<!-- 3 col-4 Images with Caption -->
			<div class="row">
				<?php $thumb_captions = ['The Best Food in Your Mouth', 'Delicious as Heck and you Know it', 'Order Now to Increase your Happiness']; ?>
				<?php foreach ($thumb_captions as $caption): ?>
				<div class="col-4">
					<img src="http://lorempixel.com/300/250/food/<?php echo rand(1,8); ?>" class="tricky-striped-border" width="300" height="250" alt="Faker" title="faker">
					<p><strong><?php echo $caption ?></strong></p>
				</div>
				<?php endforeach ?>
			</div>



			<div class="row">
				<div class="dotted-row" style="position: relative; top: 36px;"></div>
				<!-- Why are We Awesome? -->
				<div class="col-6">
					<h3 class="blocky-background">Why are We Awesome? <div class="float-right dotted-row"></div></h3>
					<div class="clearfix"></div>

						<?php foreach ([1,2,3] as $i): ?>
						<div class="row">
							<div class="col-2" style="padding-top:30px;">
								<div class="round-blue-number">
									<?php echo $i; ?>
								</div>
							</div>
							<div class="col-4 text-center" style="padding-top:30px;">
								<strong>
									The sort of tagline thing here
								</strong>
								<div class="background-number-big">
									<?php echo $i; ?>
								</div>
							</div>
							<div class="col-6">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, consequuntur, fugiat reiciendis sunt nobis laboriosam illo!
								</p>
							</div>
						</div>
						<div class="dotted-row"></div>
						<?php endforeach ?>

						<button class="btn btn-accent">View Services</button>
				</div>

				<!-- Our Work -->
				<div class="col-6">
					<h3 class="blocky-background">Check Out Our Latest Work</h3>
					<div class="clearfix"></div>

					<?php foreach ([ [1,2], [3,4] ] as $cols): ?>
					<div class="row">
						<?php foreach ($cols as $i): ?>
						<div class="col-6">
							<img src="http://lorempixel.com/192/130/food/<?php echo rand(1,8); ?>" class="tricky-striped-border" alt="Faker" title="faker" width="192" height="130">
							<p>Short little captions here</p>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endforeach; ?>

					<button class="btn btn-accent">View Portfolio</button>
				</div>
			</div>



			<div class="row">
				<div class="dotted-row" style="position: relative; top: 36px;"></div>
				<!-- From the Blog -->
				<div class="col-6 widget-posts">
					<h3 class="blocky-background">From the Blog</h3>
					<div class="clearfix"></div>

					<?php
					$blog_posts = [
						[
							'title' => 'Breaking News About...',
							'img' => '#',
							'url'   => '#',
							'snippet' => 'Lorem ipsum dolor sit amet, consectetur',
							'date'   => '15th February, 2014',
							'author' => 'Joe Johnson',
							'comments_count' => 2,
							'likes_count' => 11
						],
						[
							'title' => 'So Fake it\'s Crazy',
							'img' => '#',
							'url'   => '#',
							'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipisicing',
							'date'   => '09th February, 2014',
							'author' => 'Mary Ann',
							'comments_count' => 12,
							'likes_count' => 21
						],
						[
							'title' => 'Just a Blog Post',
							'img' => '#',
							'url'   => '#',
							'snippet' => 'Lorem ipsum dolor sit amet, consectetur',
							'date'   => '10th January, 2014',
							'author' => 'Joe Johnson',
							'comments_count' => 18,
							'likes_count' => 33
						]
					];
					?>

					<?php foreach ($blog_posts as $post): ?>

					<div class="widget-posts-post">
						<div class="col-4">
							<img src="http://lorempixel.com/106/64/food/<?php echo rand(1,8); ?>" class="tricky-striped-border box-content-box" width="106" height="64" alt="" style="margin-top:22px;">
						</div>

						<div class="col-8">
							<h5><?php echo $post['title'] ?></h5>
							<p><?php echo $post['snippet'] ?> ... </p>
							<p class="text-small">
								<span class="float-left">
									<span class="text-color-accent"><?php echo $post['date'] ?></span>
									by <?php echo $post['author'] ?>
								</span>
								<span class="float-right">
									<?php echo $post['comments_count'] ?> <img src="img/icon-comment.png" alt="Comments">
									<?php echo $post['likes_count'] ?> <img src="img/icon-heart.png" alt="likes">
								</span>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>

					<hr>

					<?php endforeach ?>

				</div>

				<!-- Testimonials -->
				<div class="col-6">
					<h3 class="blocky-background">What Do Clients Say?</h3>
					<div class="clearfix"></div>

					<div class="shadow-box-blue shadow-box-quote">
						<p class="quote-content">
							"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, alias reprehenderit ipsum ullam quaerat a provident repellendus magni aperiam impedit."
						</p>


					</div>

					<!-- Author/Slide Controls -->
					<div class="col-8">
						<div class="float-right">
							<p class="font-museo-slab">
								<i>Joseph Myers, Enspiro Inc.</i>
							</p>

							<div class="slider-controls">
								<ul class="list-inline text-center">
									<li><a href=""></a></li>
									<li><a href=""></a></li>
									<li class="active"><a href=""></a></li>
									<li><a href=""></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<p>
						We love to hear from our clients, especially after we’ve completed  stellar work.  Take a moment and read some raves from some of our clients.  Remember, this could be you, happy as a pig in the mud!  Go on, give us a try!
					</p>
				</div>
			</div>


			<!-- Footer -->
			<footer class="footer">

				<!-- Big Blue Quote Box -->
				<div class="row shadow-box-blue">

					<div class="col-4">
						<img src="img/imperio-logo-with-text.png" alt="">
						<p class="font-italic text-color-gray-light">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, beatae officia sequi ullam provident? Cumque, nemo, quod, facere, necessitatibus nam enim sit eum voluptate omnis repudiandae modi magni magnam est eaque ipsam tempore possimus voluptatum!
						</p>
					</div>

					<div class="col-4">
						<h5>Quick Links</h5>
						<!-- (ul.float-left>(li>a{ListItem$})*5)*2 -->
						<?php $footer_quick_links = [
								[
									'Find us on a Map',
									'Contact us',
									'Folio of work',
									'Our Blog',
									'Lorem Ipsum'
								],
								[
									'Find us on a Map',
									'Contact us',
									'Folio of work',
									'Our Blog',
									'Lorem Ipsum'
								]
							]; ?>
						<?php foreach ($footer_quick_links as $links): ?>
						<ul class="float-left list-style-triangle">
							<?php foreach ($links as $name): ?>
							<li><a href=""><?php echo $name; ?></a></li>
							<?php endforeach ?>
						</ul>
						<?php endforeach ?>
					</div>

					<div class="col-4">
						<h5>Flickr Stream</h5>
						<?php $flickr_images = ['#','#','#','#','#','#'] ?>
						<?php foreach ($flickr_images as $src): ?>
							<img src="http://lorempixel.com/55/55/food/<?php echo rand(1,8); ?>" alt="" class="flickr-thumb" height="55" width="55">
						<?php endforeach ?>
					</div>

					<div class="clearfix"></div>
				</div>


				<div class="clearfix"></div>

				<div>
					<!-- Social Buttons -->
					<div class="float-left footer-social-icons">
						<ul class="list-inline">
							<li><a href="#" title="Facebook" class="social-round-icon">
								<img src="img/social-icon-facebook.png" width="39" height="39" alt="">
							</a></li>
							<li><a href="#" title="Twitter" class="social-round-icon">
								<img src="img/social-icon-twitter.png" width="39" height="39" alt="">
							</a></li>
							<li><a href="#" title="LinkedIn" class="social-round-icon">
								<img src="img/social-icon-linkedin.png" width="39" height="39" alt="">
							</a></li>
							<li><a href="#" title="V" class="social-round-icon">
								<img src="img/social-icon-v.png" width="39" height="39" alt="">
							</a></li>
							<li><a href="#" title="RSS" class="social-round-icon">
								<img src="img/social-icon-rss.png" width="39" height="39" alt="">
							</a></li>
							<li><a href="#" title="Maybe Picasa..." class="social-round-icon">
								<img src="img/social-icon-shutterthing.png" width="39" height="39" alt="">
							</a></li>
						</ul>
					</div>

					<p class="float-right" style="padding-top:15px;">
						&copy; Imperio 2012, All Rights Reserved
					</p>
				</div>

			</footer>



		</div>

	</div>



</body>
</html>