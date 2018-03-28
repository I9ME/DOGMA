<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	
	<?php do_action( 'storefront_before_header' ); ?>

	<div class="header-bar">
		<div class="container">
			<div class="header-bar__nav">
				<div class="redes">
					<ul class="redes__lista">
						<li><a href="https://www.facebook.com/dogmastorebr" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/dogma.store/" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCk8Wr6idc4AV_fzB91idBGw" title="Youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li><a href="https://twitter.com/@dogmastorebr" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://br.pinterest.com/dogmastore/" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="opcoes-bar">
					<ul class="opcoes-bar__lista">
						<li><a href="#">Sobre Nós</a></li>
						<li><a href="#">Atendimento</a></li>
						<li><a href="#">Login/Cadastro</a></li>
					</ul>
				</div>
				<div class="contatos">
					<ul class="contatos__lista">
						<li><a href="https://api.whatsapp.com/send?phone=5585981262984" title="Whatsapp" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>(85) 98126-2984</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header header" role="banner" style="<?php storefront_header_styles(); ?>">
			
		<?php do_action( 'storefront_header' ); ?>

		<div class="container">
			
				
				<?php do_action( 'storefront_site_branding', 20 ); ?>
				

				<?php do_action( 'storefront_primary_navigation', 50 ); ?>
		
				
				<!-- componente carrinho -->
				<?php do_action( 'storefront_header', 'storefront_header_cart', 60 ); ?>
					
		
		</div>
	</header>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
