<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main>
			<section class="wrap">
			<div class="primary">
			<?php $query = new WP_Query( 'tag=article&posts_per_page=5' ); ?>
			 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
			 $do_not_duplicate = $post->ID; ?>

				<article id="post-<?php the_ID(); ?>">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
					<?php the_excerpt(); ?>
					
				</article>
				<?php endwhile; ?>

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
			</div>
				<?php get_sidebar(); ?>
			</section>

			<?php bones_page_navi(); ?>
	</main>

	</div>

</div>
<?php get_footer(); ?>
