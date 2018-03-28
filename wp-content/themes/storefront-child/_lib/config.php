<?php
/*
* Configurações do Tema
* Desenvolvedor: Bruno Kiedis
* Email: bruno@i9me.com.br
*/

//=========================================================================================
// INCLUDE FUNCTIONS
//=========================================================================================

//===================================Painel================================================
require_once locate_template('/_lib/dashboard.php');
//================================Funções Dashboard========================================
require_once locate_template('/_lib/admin.php');//..................STYLE LOGIN/ADMIN
require_once locate_template('/_lib/filtros.php');//................FILTROS FIELDS
//===================================Features==============================================
require_once locate_template('/_lib/_features/social.php');//.......SOCIAL FIELDS
require_once locate_template('/_lib/_features/blog.php');//.........BLOG FUNCTIONS
require_once locate_template('/_lib/_features/remove.php');//.......CLEAN FUNCTIONS
require_once locate_template('/_lib/_features/excerpt.php');//......EXCERPT FUNCTIONS
require_once locate_template('/_lib/_features/share.php');//........SHARE FUNCTIONS
require_once locate_template('/_lib/_features/bem.php');//..........MENU BEM CSS
require_once locate_template('/_lib/_features/breadcrumbs.php');//..BREADCRUMBS
require_once locate_template('/_lib/_features/cforms.php');//.......CF7 SELECTS
require_once locate_template('/_lib/_features/dataformat.php');//...DATA FORMAT EVENTOS
// require_once locate_template('/_lib/_features/select.php');//....SELECT AJAX
require_once locate_template('/_lib/_features/pagnav.php');//.......PAGINATION

//===================================Backend===============================================
require_once locate_template('/_lib/posts.php');//..................POST TYPE FUNCTIONS
require_once locate_template('/_lib/taxonomies.php');//.............TAXONOMIES FUNCTIONS
require_once locate_template('/_lib/thumbs.php');//.................THUMBNAIL FUNCTIONS
require_once locate_template('/_lib/shortcodes.php');//.............SHORTCODES FUNCTIONS
//===================================Tema==================================================
require_once locate_template('/_lib/scripts.php');//................SCRIPTS E CSS
require_once locate_template('/_lib/ajax.php');//...................FUNÇÕES AJAX

//=========================================================================================
// ADICIONANDO FAVICON
//=========================================================================================
function blog_favicon() {
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/_lib/_admin/favicon.png" />';
}
add_action('wp_head', 'blog_favicon');




//=========================================================================================
// CONFIGURAÇÕES DO TEMA - Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
//=========================================================================================
function tema_setup() {
  register_nav_menus(array(
    'menu_1' => 'Menu Principal',
    'menu_2' => 'Menu Footer',
    
  ));
  
  add_editor_style('/assets/css/editor-style.css');//..Tell the TinyMCE editor to use a custom stylesheet
  add_theme_support('post-thumbnails');//..............Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  set_post_thumbnail_size(1200, 0, true);
}
add_action('after_setup_theme', 'tema_setup');


/**========== COMPONENTES DO HEADER - STOREFRONT ===========
/*
  * @hooked storefront_skip_links                       - 0
  * @hooked storefront_social_icons                     - 10
  * @hooked storefront_site_branding                    - 20
  * @hooked storefront_secondary_navigation             - 30
  * @hooked storefront_product_search                   - 40
  * @hooked storefront_primary_navigation_wrapper       - 42
  * @hooked storefront_primary_navigation               - 50
  * @hooked storefront_header_cart                      - 60
  * @hooked storefront_primary_navigation_wrapper_close - 68
*/

// ZERANDO OS COMPONENTES DO STOREFRONT.
add_action( 'init' , 'sf_change_header_position' , 10 );
function sf_change_header_position() {
  remove_action( 'storefront_header', 'storefront_product_search', 40 );
  remove_action( 'storefront_header', 'storefront_header_cart', 60 );
  remove_action( 'storefront_header', 'storefront_site_branding', 20 );
  remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
  remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
  remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
  remove_action( 'storefront_header', 'storefront_skip_links', 0 );

}

// COMPONENTE CARRINHO
function carrinho() {
  add_action( 'storefront_header', 'storefront_header_cart', 60 );
}
add_action( 'storefront_header', 'carrinho',60);

function menu() {
  add_action( 'storefront_header', 'storefront_primary_navigation', 50 );
}
add_action( 'storefront_header', 'menu',50);

function logo() {
  add_action( 'storefront_header', 'storefront_site_branding', 20 );
}
add_action( 'storefront_header', 'logo',50);








