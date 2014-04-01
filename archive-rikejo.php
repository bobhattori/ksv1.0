<?php get_header() ?>
	
	<div class="row">
		<div class="large-12 columns">

			<section class="archive-body">
				
				<div class="items">
					
					<?php
						$args = array('post_type' => 'rikejo');
						$myPosts = get_posts($args);
						foreach($myPosts as $post): setup_postdata($post);
						$cat = get_the_category();
						$cat_info = $cat[0];
						$cat_name = $cat_info->slug;
							$interview = get_field('interview');
							$mainImg = get_field('mainImg');
							$name1 = get_field('name1');
							$univ1 = get_field('univ1');
							$name2 = get_field('name2');
							$univ2 = get_field('univ2');
					?>
					<div class="item">
						<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>" style="width:300px;">
						<div class="cont 
						<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?> 
						">
							<p class="date"><?php the_time("Y.m.d") ?></p>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
							<?php the_excerpt() ?>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>

				</div>

			</section>
			
			<div class="pager">
				<?php if(function_exists("wp_pagenavi")) { wp_pagenavi(); } ?>
			</div>

		</div>
	</div>

<?php get_footer() ?>