<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main>
			<section>
				<!-- <article id="post-<?php the_ID(); ?>" <?php post_class( 'primary' ); ?>>

					<h2>Recent Talk</h2>

					<?php $my_query = new WP_Query( 'post_type=talk&posts_per_page=1' );
					while ( $my_query->have_posts() ) : $my_query->the_post(); 
						$do_not_duplicate = $post->ID; ?>
					
					<?php the_excerpt(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<?php endwhile; ?>
					<p><a href="<?php get_site_url(); ?>/talks" title="More talks">More</a></p>
				</article> -->
				<?php get_sidebar(); ?>
		</section>

		<section>
			<aside class="secondary">
				<h2><?php the_author_meta('description'); ?></h2>
			</aside>
			<article class="primary">
				<h2>Recent Things</h2>
				<ul class="recent-things">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><?php the_title(); ?></li>
		<?php endwhile; ?>
				</ul>
			</article>

	<?php bones_page_navi(); ?>

	<?php else : ?>

	<article id="post-not-found" class="hentry cf">
		<header class="article-header">
			<h2><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h2>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
		</section>
		<footer class="article-footer">
			<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
		</footer>
	</article>

	<?php endif; ?>
	</main>

	</div>

</div>
<?php get_footer(); ?>
