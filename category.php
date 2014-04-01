<?php get_header() ?>
	
	<div class="row">
		<div class="large-12 columns">
			<?php
				the_post();
				$mainImg = get_field('mainImg');
				$name1 = get_field('name1');
				$univ1 = get_field('univ1');
			?>

			<section class="archive">
				
				<div class="row row1">
					
					<?php
						$args = array('post_type' => 'rikejo', 'post_per_page' => 2)
						$myPosts = get_posts($args);
						foreach($myPosts as $post): setup_postdata($post);
					?>
					<div class="item">
						<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
						<div class="cont">
							<p class="date"><?php the_date("Y.m.d") ?></p>
							<h2><?php the_title() ?></h2>
							<div class="meta">
								<p class="name"><?php echo $name1 ?></p>
								<p class="univ"><?php echo $univ1 ?></p>
							</div>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>

				</div>

			</section>

		</div>
	</div>

<?php get_footer() ?>