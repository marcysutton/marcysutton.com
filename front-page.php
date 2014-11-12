<?php
/*
 Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main>
			<section>
				<div class="hero wrap padded-top">
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
								<a href="<?php get_site_url(); ?>/talks" title="More talks" class="more-link button">More talks</a>
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
				</div>
		</section>
		<section class="alt">
			<div class="wrap">
				<article class="primary">
					<div class="recent-things">
					<h2>Recent Articles</h2>
					<ul>
			 <?php $query = new WP_Query( 'post_type=link&posts_per_page=3' ); ?>
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
						<li><a href="#" class="more-link">More links</a></li>
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
						<li><a href="#" class="more-link">More Posts</a></li>
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
				<?php dynamic_sidebar('above_footer'); ?>
			</div>
		</section>
	</main>

	</div>

</div>
<?php get_footer(); ?>
