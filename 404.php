<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

					<main>
						<section class="wrap">
							<div class="wrap padded-top">
						
						<article id="post-not-found" class="hentry primary">

							<header class="article-header">

								<h1><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

						</article>
						</div>
					</section>
					</main>

				</div>

			</div>

<?php get_footer(); ?>
