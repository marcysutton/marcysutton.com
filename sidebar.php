	<aside id="sidebar1" class="secondary sidebar" role="complementary">

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar1' ); ?>

		<?php else : ?>

			<?php
				/*
				 * This content shows up if there are no widgets defined in the backend.
				*/

				// no default values. using these as examples
				$taxonomies = array( 
			    'category'
				);

				$args = array(
			    'order'             => 'ASC',
			    'number'            => '',
			    'include'						=> 'talk, code, blog'
				); 

				$terms = get_terms($taxonomies, $args);

				/*foreach($terms as $tag) {
					$tag_name = $tag->name;
					?>
					
				<h2><?php echo $tag_name; ?></h2>
				<?php
				$posts_array = get_posts($tag_name);
				foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endforeach; 
				wp_reset_postdata();
					?>
			<?php }*/ ?>
		<?php endif; ?>
	</aside>
