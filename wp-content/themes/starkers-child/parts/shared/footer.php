		</div> 	<!-- Grid -->
	</div> 		<!-- Container -->
</div> 			<!-- Main -->
<footer id="footer">
	<span id="phone-number">909-392-0933</span>
	<?php wp_nav_menu(array(
	  'container'=> 'nav',
	  'container_id' => 'footer-menu-container',
	  'menu_id' => 'footer-menu',
	  'menu_class' =>'menu-inline',
	  'theme_location' => 'secondary',
	  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
	)); ?>
	<div id="copyright">
		&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
	</div>
</footer>
