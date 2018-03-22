<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69208818-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Hotjar Tracking Code for http://www.dogmastore.com.br -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:142880,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1552802225014191');
fbq('track', "PageView");

<?php

if ( is_product() ) {
  echo "fbq('track', 'ViewContent')";
} elseif ( is_search() ) {
   echo "fbq('track', 'Search');";
} elseif ( is_cart() ) {
  echo "fbq('track', 'AddToCart');";
} elseif (is_checkout() ) {
   echo "fbq('track', 'InitiateCheckout');";
} elseif (is_wc_endpoint_url( 'add-payment-method' ) ) {
   echo "fbq('track', 'AddPaymentInfo');";
} elseif (is_wc_endpoint_url( 'add-payment-method' ) ) {
   echo "fbq('track', 'AddPaymentInfo');";
} else {
  echo "fbq('track', 'Other');";
}

?>
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1552802225014191&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

<script>
	
	jQuery(window).scroll(function (event) {
		
    var scroll = jQuery(window).scrollTop();
		var topBar = jQuery('.topBar').height();
    // Do something
    
    if ( scroll > topBar ) {
      jQuery('body').addClass('scrollOn');
	  jQuery('body').removeClass('scrollOff');
	  //jQuery('.scrollOn header#header').addClass('fixed');
    } else {
		jQuery('body').removeClass('scrollOn');
		jQuery('body').addClass('scrollOff');
	}	
	});
	
/**
 * Button NAV DropDown
 */
	
	jQuery(function(){
		
	jQuery('.mNavButton').click(function( e ){
		e.stopPropagation();
		jQuery('.MmainNav, .mNavButton').toggleClass('toggleOn');
	});
	
	jQuery('#buttonSearch').click(function( e ){
		e.stopPropagation();
		jQuery('.searchContainer, #buttonSearch').toggleClass('toggleOn');
	});
	
	
	});
	
	
	//ScrollOn END
	
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<?php
	//do_action( 'storefront_before_header' ); ?>
	
	<div class="searchContainer">
		<form role="search" method="get" class="woocommerce-product-search" action="<?php echo get_home_url(); ?>">
			<input placeholder="O que você procura?" type="search" class="search-field" name="s"/>
			<input type="submit" VALUE="" class="submit" />
			<input name="post_type" value="product" type="hidden">
		</form>

	</div>
	
	
	<nav class="MmainNav">
		<ul class="navItems vMiddle">
				<?php
						$menu_name = 'mNav';
						$menu = wp_get_nav_menu_object($menu_name);
						$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					?>
				 <?php

				    foreach( $menuitems as $item ):
		        // set up title and url
		        $title = $item->title;
				    $link = $item->url;
						$classCSS = $item->classes[0];

					?>
					<li class="item subHover<?php if($classCSS) { echo ' ' . $classCSS; } ?>">
					  <a href="<?php echo $link; ?>" class="title"><span><?php echo $title; ?></span></a>
					</li>                           					
							<?php  endforeach; ?>
			</ul>
	</nav>
	
	<div class="topBar">
	
		<nav class="socialMedia navSocialMedia">
			<ul class="nav vMiddle">
				
				<?php
						$menu_name = 'navSocialMedia';
						$menu = wp_get_nav_menu_object($menu_name);
						$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					?>
				 <?php
				   
		
				    foreach( $menuitems as $item ):
		        // set up title and url
		        $title = $item->title;
				    $link = $item->url;
						$classCSS = $item->classes[0];

					?>
					<li class="item<?php if($classCSS) { echo ' icon ' . $classCSS; } ?>">
					  <a target="_blank" href="<?php echo $link; ?>" class="title"><span><?php echo $title; ?></span></a>
					</li>                           					
							<?php  endforeach; ?>
				
			</ul>
		</nav>
		
	<nav class="topNav">
			<ul class="nav vMiddle">
				<?php
						$menu_name = 'topNav';
						$menu = wp_get_nav_menu_object($menu_name);
						$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					?>
				 <?php
				   
		
				    foreach( $menuitems as $item ):
		        // set up title and url
		        $title = $item->title;
				    $link = $item->url;
						$classCSS = $item->classes[0];

					?>
					<li class="item<?php if($classCSS) { echo ' ' . $classCSS; } ?>">
					  <a href="<?php echo $link; ?>" class="title"><span><?php echo $title; ?></span></a>
					</li>                           					
							<?php  endforeach; ?>
				</ul>
			</nav>
	
		<nav class="atendimento contacts">	
			<ul class="nav vMiddle">
				<?php
						$menu_name = 'contacts';
						$menu = wp_get_nav_menu_object($menu_name);
						$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					?>
				 <?php

				    foreach( $menuitems as $item ):
		        // set up title and url
		        $title = $item->title;
				    $link = $item->url;
						$classCSS = $item->classes[0];

					?>
					<li class="item<?php if($classCSS) { echo ' icon ' . $classCSS; } ?>">
					  <div><span><?php echo $title; ?></span></div>
					</li>                        					
							<?php  endforeach; ?>
			</ul>
		</nav>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="colls-header">
			<div class="logo coll">
				<h1 class="site-title">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_dogma_store.png" alt="DOGMA STORE" boder="0" /></a>
				</h1>
			</div>
	
			<nav class="mainNav coll">
				<a class="mNavButton" href="javascript:;"><span></span></a>
			<ul class="navItems vMiddle">
				<?php
						$menu_name = 'mainNav';
						$menu = wp_get_nav_menu_object($menu_name);
						$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
					?>
				 <?php

				    foreach( $menuitems as $item ):
		        // set up title and url
		        	$title = $item->title;
				    $link = $item->url;
					$classCSS = $item->classes[0];

					// item does not have a parent so menu_item_parent equals 0 (false)
        			if ( !$item->menu_item_parent ):

        			// save this id for later comparison with sub-menu items
        			$parent_id = $item->ID;

					?>
					<li class="item<?php if($classCSS) { echo ' ' . $classCSS; } ?>">
					  <a href="<?php echo $link; ?>" class="title level-1"><span><?php echo $title; ?></span></a>
					</li>

					<?php else: ?>

					<li class="item subHover<?php if($classCSS) { echo ' ' . $classCSS; } ?>">
					  <a href="<?php echo $link; ?>" class="title level-1"><span><?php echo $title; ?></span></a>
					  <ul class="subItems">
							<li class="subItem"><a href="#">SUBMENU MENU ITEM</a></li>
							<li class="subItem"><a href="#">SUBMENU MENU ITEM</a></li>
							<li class="subItem"><a href="#">SUBMENU MENU ITEM</a></li>
							<li class="subItem"><a href="#">SUBMENU MENU ITEM</a></li>
						</ul>
					</li>

					<?php endif; ?>



							<?php  endforeach; ?>
			</ul>
			</nav>
			
			<div class="search coll">
				<a id="buttonSearch" href="javascript:;"><span></span></a>
			</div>
			<div class="cart coll">
				<a id="buttonCart" href="<?php echo get_home_url(); ?>/carrinho/"><span></span></a>
			</div>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">


		<?php if ( !is_home() ) : ?>

		<?php

		if ( has_post_thumbnail() ) {

			$image_id = get_post_thumbnail_id();
			//storefront_post_thumbnail( 'full' );
			$sizeThumbs = 'full';


			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

		?>

		<?php

		if ( is_shop() ) :

		?>

		<div class="headerPage storePage">
			<header class="contentHeaderPage">
				<h1 class="entry-title" itemprop="name">
					<!--<div id="diamond"><div class="icon"></div></div>-->
					<span>LOJA</span>
				</h1>
			</header>
		</div>

		<?php elseif(  is_product_category() ) : ?>

		<?php



    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	}


		?>

		<div class="headerPage storePage" <?php if ( $image ) { echo 'style="background:url(' . $image . ') no-repeat center top fixed;"'; } ?>>
			<header class="contentHeaderPage">
				<h1 class="entry-title" itemprop="name"><span><?php single_cat_title(); ?></span></h1>
			</header>
		</div>

		<?php elseif(  is_product() ) : ?>

		<div class="headerPage storePage">
			<header class="contentHeaderPage">
				<!--<h1 class="entry-title" itemprop="name"><span>PRODUTO</span></h1>-->
				<ul class="blocksHome">
			<li class="block frete">
				<a href="<?php echo esc_url( home_url( '/frete-gratis' ) ); ?>">
					<h4 class="title">FRETE <br/>GRÁTIS</h4>
				</a>
			</li>
			<li class="block troca">
				<a href="<?php echo esc_url( home_url( '/trocas-devolucoes-e-garantia' ) ); ?>">
					<h4 class="title">TROCA <br />GARANTIDA</h4>
				</a>
			</li>
			<li class="block seguranca">
				<a href="<?php echo esc_url( home_url( '/politica-de-privacidade-e-seguranca' ) ); ?>">
					<h4 class="title">SUA COMPRA <br />MAIS SEGURA</h4>
				</a>
			</li>
			<li class="block atendimento">
				<a href="<?php echo esc_url( home_url( '/atendimento' ) ); ?>">
					<h4 class="title">CENTRAL DE <br />ATENDIMENTO</h4>
				</a>
			</li>
		</ul>
			</header>
		</div>

		<?php else : ?>

		<div class="headerPage" style="background:url(<?php echo $urlThumbnail; ?>) no-repeat center top fixed;">
			<header class="contentHeaderPage">
				<?php the_title( '<h1 class="entry-title" itemprop="name"><span>', '</span></h1>' ); ?>
			</header>
		</div>


		<?php

		endif;

		} else {

		}
		endif;

	?>




		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
		?>


