<?php
/*
 Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main>
			<section class="wrap hero padded-top">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?>>

					<?php $my_query = new WP_Query( 'post_type=talk&posts_per_page=1' );
					while ( $my_query->have_posts() ) : $my_query->the_post(); 
						$do_not_duplicate = $post->ID; ?>
					
					<div class="hero-excerpt">
						<?php the_excerpt(); ?>
					</div>
					
					<div class="hero-links">
						<h2>Latest Talk</h2>
						<h3>
							<a href="<?php the_permalink(); ?>" class="inline-title"><?php the_title(); ?></a>. 
							<!-- <a href="<?php get_site_url(); ?>/talks" title="More talks" class="more-link button">More talks</a> -->
						</h3>
					</div>
					<?php endwhile; ?>			
				</article>
				<aside class="secondary">
					<div class="hero-article-list">
						<h2 class="widgettitle">Articles</h2>
						<ul>
						<?php $my_query = new WP_Query( 'tag=article&posts_per_page=6' );
						while ( $my_query->have_posts() ) : $my_query->the_post(); 
							$do_not_duplicate = $post->ID; ?>
							<li class="article-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
						<?php endwhile; ?>	
						</ul>
						</div>
				</aside>
		</section>
		<section class="alt">
			<div class="wrap">
			<article class="primary">
				<div class="recent-things">
				<h2>Recent Links</h2>
				<ul>
		 <?php $query = new WP_Query( 'post_type=link&posts_per_page=5' ); ?>
		 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
		 $do_not_duplicate = $post->ID; ?>
					<li>
						<h3 class="h2 recent-thing-title offsite-link">
						<a href="<?php echo the_permalink(); ?>" title="Link opens in a new window">
							<span class="inline-link"><?php the_title(); ?></span>
							<span class="icon-newtab"></span>
							<span class="visuallyhidden">Link opens in a new window</span>
						</a></h3>
					</li>
		<?php endwhile; ?>
					<!-- <li><a href="#" class="more-link">More links</a></li> -->
				</ul>

				<h2>Blog Posts</h2>
				<ul>
				<?php $my_query = new WP_Query( 'tag=blog&posts_per_page=2' );
						while ( $my_query->have_posts() ) : $my_query->the_post(); 
						$do_not_duplicate = $post->ID;
						?>
					<li>
						<h3 class="h2 recent-thing-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="recent-thing-date"><?php the_date(); ?></p>
					</li>
		<?php endwhile; ?>
					<!-- <li><a href="#" class="more-link">More posts</a></li> -->
				</ul>
				</div>
		<?php endif; ?>
			</article>
			<aside class="secondary vert-align">
				<figure class="author-bio">
				<?php // Retrieve The Post's Author ID
		    $user_id = get_the_author_meta('ID');
		    // Set the image size. Accepts all registered images sizes and array(int, int)
		    $size = 'thumbnail';
		    // Get the image URL using the author ID and image size params
		    $imgURL = get_cupp_meta($user_id, $size);
		    // Print the image on the page
		    echo '<img src="'. $imgURL .'"alt="Marcy Sutton">'; ?>
				<h3 class="h2 author-bio-text"><em><?php the_author_meta('description'); ?></em></h3>
				</figure>
			</aside>
			</div>
		</section>
		<section>
			<div class="instagram-feed">
				<figure>
					<a href="http://instagram.com/p/uX-nn-yXqY">
						<img src="//photos-f.ak.instagram.com/hphotos-ak-xpa1/923810_532864296858693_538374948_a.jpg" alt="I rode my cyclocross bike around Paris during ngEurope. Dreamy.">
						<figcaption>
							<span>I rode my cyclocross bike around Paris during ngEurope. <br>Dreamy.&lt;3</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vEwggkSXod/">
						<img src="//scontent-b.cdninstagram.com/hphotos-xpf1/t51.2885-15/10802897_891727464185805_1883074812_a.jpg" alt="@chriscoyier and @davatron5000 hosted me as a guest on the Shop Talk Show today. Excited #webdev nerd alert!">
						<figcaption>
							<span>@chriscoyier and @davatron5000 hosted me as a guest on the Shop Talk Show today. Excited #webdev nerd alert!</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vMbILtSXr1/">
						<img src="http://photos-e.ak.instagram.com/hphotos-ak-xfa1/1889239_779631985433292_374494398_a.jpg" alt="Magical mountain-bike trails in my home state of Washington.">
						<figcaption>
							<span>Magical mountain-bike trails in my home state of Washington.</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/tbB9SwSXmd/">
						<img src="//scontent-b-sea.cdninstagram.com/hphotos-xpf1/t51.2885-15/1741247_829964260387120_136941937_a.jpg" alt="Thanks for the Nexus 5, Google! #AngularJS #MaterialDesign #testing">
						<figcaption>
							<span>Thanks for the Nexus 5, Google! #AngularJS #MaterialDesign #testing</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vKJfl8SXvt/">
						<img src="//scontent-a.cdninstagram.com/hphotos-xfa1/t51.2885-15/1391241_1512487462342742_810785017_a.jpg" alt="A great fall ride. #howIRaleigh">
						<figcaption>
							<span>A great fall ride. #howIRaleigh</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vPrdwwyXpi/">
						<img src="//scontent-a.cdninstagram.com/hphotos-xpa1/t51.2885-15/10784907_737763639646351_452092363_a.jpg" alt="PLEASE I CAN HAS SOME CHEESE. #WallyWallerson">
						<figcaption>
							<span>PLEASE I CAN HAS SOME CHEESE. #WallyWallerson</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vKkLLCyXoF/">
						<img src="//scontent-b.cdninstagram.com/hphotos-xfp1/t51.2885-15/891403_742623422459697_1987823294_a.jpg" alt="Gotta get that bike race costume ready!">
						<figcaption>
							<span>Gotta get that bike race costume ready!</span>
						</figcaption>
					</a>
				</figure>
				<figure>
					<a href="http://instagram.com/p/vHAUpLSXhr/">
						<img src="http://scontent-a-sea.cdninstagram.com/hphotos-xap1/t51.2885-15/10683942_854007421277645_2091129091_a.jpg" alt="Abflug: Frankfurt. Flying home from JSConf EU in Berlin">
						<figcaption>
							<span>Abflug: Frankfurt. Flying home from JSConf EU in Berlin</span>
						</figcaption>
					</a>
				</figure>
				<?php //dynamic_sidebar('above_footer'); ?>
			</div>
		</section>
	</main>

	</div>

</div>
<?php get_footer(); ?>
