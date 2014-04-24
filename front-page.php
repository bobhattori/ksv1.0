<?php get_header() ?>
<div class="keyvisual">
	<ul class="kv-body bxslider no-bullet">
		<li><img src="<?php bloginfo('template_directory') ?>/assets/images/home/kv01.jpg" alt=""></li>
		<li><img src="<?php bloginfo('template_directory') ?>/assets/images/home/kv02.jpg" alt=""></li>
		<li><img src="<?php bloginfo('template_directory') ?>/assets/images/home/kv03.jpg" alt=""></li>
		<li><img src="<?php bloginfo('template_directory') ?>/assets/images/home/kv04.jpg" alt=""></li>
</ul>
</div>

<div class="row">
	<div class="large-12 columns">

		<section class="recent rikejo">

			<div class="item ttl-img">
				<a href="<?php bloginfo('url') ?>/girls"><img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl01.png" alt="Suteki rikei joshi"></a>
			</div>

			<?php
				$args = array('post_type' => 'girls', 'showposts' => 5);
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
				<div class="eyecatch-img"><img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>"></div>
				<div class="cont
				">
				<p class="date"><?php the_time("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a></h2>
					<?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent topix">
				<div class="item ttl-img">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl02.png" alt="TOPIX">
				</div>
				<div class="item topix-body panel">
					<ul class="no-bullet">
					<?php
						$args = array('post_per_page' => 4);
						$myPosts = get_posts($args);
						foreach($myPosts as $post): setup_postdata($post);
						$link = get_field('link');
					?>
						<li><span class="date"><?php the_time("Y.m.d") ?></span><span class="news-con"><?php if($link): ?><a href="<?php echo $link ?>" taget="_blank"><?php the_title() ?></a><?php else: ?><?php the_title(); ?><?php endif; ?></span></li>
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</section>

		<section class="recent company">

			<div class="item ttl-img">
				<a href="<?php bloginfo('url') ?>/companies"><img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl03.png" alt="kirari company"></a>
			</div>

			<?php
				$args = array('post_type' => 'companies', 'showposts' => 5);
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
				<div class="eyecatch-img"><img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>"></div>
				<div class="cont
				">
				<p class="date"><?php the_time("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a></h2>
					<?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent stemcafe">

			<div class="item ttl-img hide-for-large-up">
				<a href="<?php bloginfo('url') ?>/stemcafe"><img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl04.png" alt="stem cafe"></a>
			</div>

			<?php
				$args = array('post_type' => 'stemcafe', 'showposts' => 2);
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
				<div class="eyecatch-img"><img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>"></div>
				<div class="cont">
				<p class="date"><?php the_time("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a></h2>
					<?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

			<div class="item show-for-large-up">
				<a href="<?php bloginfo('url') ?>/stemcafe"><img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl04.png" alt="kirari company"></a>
			</div>

			<?php
				$args = array('post_type' => 'stemcafe', 'showposts' => 3, 'offset' => 2);
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
				<div class="eyecatch-img"><img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>"></div>
				<div class="cont">
				<p class="date"><?php the_time("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a></h2>
					<?php echo mb_substr(get_the_excerpt(), 0, 40); ?>...
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent ks-news">

			<div class="item ttl-img">
				<a href="<?php bloginfo('url') ?>/news"><img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl05.png" alt="kawaiixscience news"></a>
			</div>

			<?php
				$args = array('post_type' => 'news', 'showposts' => 5);
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

		</section>

	</div>
</div>
<?php get_footer() ?>