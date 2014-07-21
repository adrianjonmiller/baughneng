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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2 class="semi-transparent-bg"><?php the_title(); ?></h2>
	<?php
		$categories = get_the_category();
		$separator = ',';
		$output = '';
		if($categories){
			foreach($categories as $category) {
				if($category->term_id != 1 && $category->term_id != 11) {
					$output .= $category->term_id.$separator;
				}
			}
		$output= trim($output, $separator);
		}
	?>
<?php endwhile; ?>

<div class="white-bg">

<div class="flexslider" data-behavior="flexslider_thumbnails">
	<ul class="slides" id="banner">
		<?php
		$args = array( 'post_type' => 'banner', 'order' => 'ASC', 'orderby' => 'menu_order', 'posts_per_page' => -1, 'category__in' => $output );
		$loop = new WP_Query( $args );?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
		<?php
			$post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		?>
		<li class="grid" data-thumb="<?php echo $post_thumbnail_url; ?>">
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


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="content-wrapper">
	<?php the_content(); ?>
</div>
<?php endwhile; ?>

</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>