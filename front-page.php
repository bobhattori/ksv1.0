<?php get_header() ?>
<div class="keyvisual">
	<img src="<?php bloginfo('template_directory') ?>/assets/images/home/keyvisual.jpg" alt="">
</div>

<div class="row">
	<div class="large-12 columns">

		<section class="recent rikejo">

			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl01.png" alt="Suteki rikei joshi">
			</div>

			<?php
				$args = array('post_type' => 'rikejo', 'post_per_page' => 5);
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
				<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
				<div class="cont 
				<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?>
				">
				<p class="date"><?php the_time("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent topix">
				<div class="item topix-ttl">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl02.png" alt="TOPIX">
				</div>
				<div class="item topix-body panel">
					<ul class="no-bullet">
					<?php
						$args = array('post_per_page' => 4);
						$myPosts = get_posts($args);
						foreach($myPosts as $post): setup_postdata($post);
					?>
						<li><span class="date"><?php the_date("Y.m.d") ?></span><span class="news-con"><?php the_content() ?></span></li>
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</section>

		<section class="recent company">

			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl03.png" alt="kirari company">
			</div>

			<?php
				$args = array('post_type' => 'company', 'post_per_page' => 5);
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
				<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
				<div class="cont 
				<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?>
				">
				<p class="date"><?php the_date("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent stemcafe">

			<div class="item show-for-small show-for-medium">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl04.png" alt="kirari company">
			</div>

			<?php
				$args = array('post_type' => 'stemcafe', 'post_per_page' => 2);
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
				<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
				<div class="cont 
				<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?>
				">
				<p class="date"><?php the_date("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

			<div class="item show-for-large">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl04.png" alt="kirari company">
			</div>

			<?php
				$args = array('post_type' => 'stemcafe', 'post_per_page' => 3, 'offset' => 2);
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
				<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
				<div class="cont 
				<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?>
				">
				<p class="date"><?php the_date("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

		<section class="recent ks-news">

			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/home/ttl05.png" alt="kawaiixscience news">
			</div>

			<?php
				$args = array('post_type' => 'k-news', 'post_per_page' => 5);
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
				<img src="<?php echo $mainImg ?>" alt="<?php the_title() ?>">
				<div class="cont 
				<?php if($cat_name == "cat1"): echo "color1"; else: echo "colornone"; endif; ?>
				">
				<p class="date"><?php the_date("Y.m.d") ?></p>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>

		</section>

	</div>
</div>
<?php get_footer() ?>