<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
	if( is_woocommerce() ) :
	
	dynamic_sidebar( 'sidebar-loja' );
	
	else:
	
	dynamic_sidebar( 'sidebar-1' );
	
	endif;
	?>
	
		
</div><!-- #secondary -->
