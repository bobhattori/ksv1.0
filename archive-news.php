<?php get_header() ?>
	
	<div class="row">
		<div class="large-12 columns">

			<section class="archive-body">
				
				<div class="items">
					
					<?php
						$args = array_merge($wp_query->query,array('post_type' => 'news', 'showposts' =>7));
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
					<div class="item 
					<?php if($cat_name == "cat1"): echo "color1"; elseif($cat_name == "cat2"): echo "color2"; else: echo "colornone"; endif; ?>">
						<?php if($mainImg): ?><div class="eyecatch-img"><img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>"></div><?php endif; ?>
						<div class="cont">
							<p class="date"><?php the_time("Y.m.d") ?></p>
							<h2><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a></h2>
					<?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...
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