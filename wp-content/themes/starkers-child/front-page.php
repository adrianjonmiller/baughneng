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



<div class="grid flexslider" data-behavior="flexslider">
	<ul class="slides" id="banner">
		<?php
		$args = array( 'post_type' => 'banner', 'order' => 'ASC', 'orderby' => 'menu_order' );
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


<div class="col-1-">
	<div class="module featured-items">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>