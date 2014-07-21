<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<div class="flexslider semi-transparent-bg" data-behavior="flexslider">
	<ul class="slides" id="banner">
		<?php
		$args = array( 'post_type' => 'banner', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'home' );
		$loop = new WP_Query( $args );?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<li class="grid">
			<div class="col-1-2">
			<?php
				if ( has_post_thumbnail() ) { ?>
				<div class="banner-thumbnail">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
			<div class="col-1-2">
				<h3 class="heading-large"><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
			<?php	} 
			?>
		</li>
		<?php endwhile; ?>
	</ul>
</div>

<ul class="featured-items grid grid-pad" data-behavior="same_height">
	<?php
	$args = array( 'post_type' => array('application', 'banner'), 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => 4, 'category_name' => 'featured-home' );
	$loop = new WP_Query( $args );?>
	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
	<li class="col-1-2 featured-item">
		<a href="<?php echo get_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="featured-thumbnail">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
			<?php	} ?>
			<h3 class="heading-grande">
				<?php the_title(); ?>
			</h3>
			<?php the_excerpt(); ?>
		</a>
	</li>
	<?php endwhile; ?>
</ul>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>