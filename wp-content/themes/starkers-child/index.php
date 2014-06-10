<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum ligula in erat malesuada, a tincidunt ligula pharetra. Sed varius est facilisis, luctus nunc id, ornare lectus. Cras tincidunt id mi sed vulputate. Phasellus semper a risus vitae tempor. Nullam aliquam in leo id sollicitudin. Mauris ut lacus placerat, aliquam turpis vel, ullamcorper nibh. Suspendisse eu purus condimentum, sollicitudin lectus at, blandit neque. Integer nec elit augue. Mauris pharetra, metus in porttitor tincidunt, tortor magna dapibus massa, sed tempor dui magna non tortor. Nulla facilisi. Aliquam erat volutpat. Sed non justo sit amet turpis volutpat semper. Curabitur venenatis, est et accumsan semper, tellus diam pulvinar enim, et rhoncus neque lacus vel felis. Nunc vel dapibus felis. Curabitur condimentum neque in suscipit ultrices.

Nulla lobortis molestie mi, in condimentum dui sodales vel. Nullam iaculis ipsum odio, quis imperdiet ligula vestibulum nec. Nulla facilisi. Nunc non eleifend eros. In eu fermentum odio, id ultricies lacus. Nullam ac nulla risus. Quisque vel egestas risus.

Cras in aliquam elit, id venenatis nisl. Nam a varius dui, in vehicula enim. Aliquam faucibus, quam sit amet accumsan bibendum, sapien diam volutpat diam, eu sagittis massa lectus in erat. Cras eu lectus tincidunt, volutpat ante nec, venenatis nulla. Nunc ac libero non ipsum ornare faucibus. Donec rhoncus nibh eu augue gravida, non tempor neque adipiscing. Suspendisse potenti. Fusce egestas sapien sed tellus semper bibendum. Mauris ut pharetra nisi, ac blandit nisl. Pellentesque ultrices, nisl ut convallis ullamcorper, quam turpis iaculis magna, at dictum elit nisi quis lorem. Sed nec commodo felis. Nulla a blandit orci. Quisque a tellus sed nulla pulvinar pulvinar.

In vitae justo velit. Mauris tempus nulla id dui rutrum semper a sit amet urna. Sed ligula orci, luctus nec pretium in, adipiscing in erat. Mauris eleifend laoreet mauris vel pharetra. Aliquam feugiat a est vitae iaculis. Phasellus dictum lobortis libero sed pharetra. Proin non odio eu arcu luctus adipiscing. Maecenas et elit a enim placerat convallis. Nullam congue, ipsum vitae consectetur pellentesque, odio nulla congue eros, eu dictum nulla ante vel sapien. Curabitur imperdiet purus eget facilisis euismod.

Vivamus congue elit ac purus feugiat pharetra. Nunc ac sodales elit. Maecenas a ipsum tempus, sodales eros eget, gravida dolor. Nulla luctus dignissim mauris vel imperdiet. Donec congue odio sit amet ipsum cursus, nec consequat erat hendrerit. Proin sit amet tellus ligula. Fusce diam odio, porttitor vestibulum ante ac, vehicula cursus augue. Fusce consectetur ligula nec leo laoreet, ac consectetur velit aliquam.

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>