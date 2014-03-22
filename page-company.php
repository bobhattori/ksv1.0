<?php get_header(); ?>
<?php
$ci_comment = get_field('cicomment');
$ci_left = get_field("cileft");
$ci_right = get_field("ciright");
$ci_bottom_left_ttl = get_field("cibottomleftttl");
$ci_bottom_left = get_field("cibottomleft");
$ci_bottom_right_ttl = get_field("cibottomrightttl");
$ci_bottom_right = get_field("cibottomright");
?>

	<h2><?php the_title(); ?></h2>

	<div class="comment">
		<?php echo $ci_comment ?>
	</div>

	<div class="row company-info">
		<div class="large-6 columns">
			<?php echo $ci_left ?>
		</div>
		<div class="large-6 columns">
			<?php echo $ci_right ?>
		</div>
	</div>

	<div class="row publication panel">
		<div class="large-12 columns">
			<div class="pblc-ttl">発行物</div>
		</div>
		<div class="large-6 columns item">
			<h3><?php echo $ci_bottom_left_ttl ?></h3>
			<div class="item-body">
				<?php echo $ci_bottom_left ?>
			</div>
		</div>
		<div class="large-6 columns item">
			<h3><?php echo $ci_bottom_right_ttl ?></h3>
			<div class="item-body">
				<?php echo $ci_right_left ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>