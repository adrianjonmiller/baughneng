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

	<div class="col-2-3">
		<div class="module semi-transparent-bg">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div> <!-- Close Grid -->



<div class="grid"> <!-- Open New grid -->
	<div class="col-2-3">
		<ul class="products">
			<?php
			$args = array( 'post_type' => 'application', 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
			<li class="product">
				<a href="<?php echo get_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="product-thumbnail">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<?php	} ?>
					<h3 class="heading-large">
						<?php the_title(); ?>
					</h3>
					<?php the_excerpt(); ?>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>