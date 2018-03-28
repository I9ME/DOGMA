<?php
/**
* Custom Post Types
* Desenvolvedor: Bruno Lima
* Email: brunolimadevelopment@gmail.com
*/


//=========================================================================================
// POST TYPE SLIDES
//=========================================================================================

// function post_type_slider_register() {
//     $labels = array(
//         'name' => 'Slider',
//         'singular_name' => 'Slider',
//         'menu_name' => 'Slider',
//         'add_new' => _x('Adicionar Slider', 'item'),
//         'add_new_item' => __('Adicionar Novo Slider'),
//         'edit_item' => __('Editar Slider'),
//         'new_item' => __('Novo Slider')
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => false,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'slider'),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-images-alt2',
//         'supports' => array('title', '', 'thumbnail', '','')
//     );
//     register_post_type('slider', $args);
// }
// add_action('init', 'post_type_slider_register');


//=========================================================================================
// POST TYPE ARTIGOS
//=========================================================================================

// function post_type_artigo_register() {
//     $labels = array(
//         'name' => 'Artigos',
//         'singular_name' => 'Artigo',
//         'menu_name' => 'Artigos',
//         'add_new' => _x('Adicionar Artigo', 'item'),
//         'add_new_item' => __('Adicionar Novo Artigo'),
//         'edit_item' => __('Editar Artigo'),
//         'new_item' => __('Novo Artigo')
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'artigo'),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-portfolio',
//         'supports' => array('title', 'editor', 'thumbnail', '','')
//     );
//     register_post_type('artigo', $args);
// }
// add_action('init', 'post_type_artigo_register');


// //=========================================================================================
// // POST TYPE GALERIA
// //=========================================================================================

// function post_type_galeria_register() {
//     $labels = array(
//         'name' => 'Galerias',
//         'singular_name' => 'Galeria',
//         'menu_name' => 'Galerias',
//         'add_new' => _x('Adicionar Galeria', 'item'),
//         'add_new_item' => __('Adicionar Nova Galeria'),
//         'edit_item' => __('Editar Galeria de Cursos'),
//         'new_item' => __('Novo Galeria Cursos')
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'galeria'),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-format-gallery',
//         'supports' => array('title', 'editor', 'thumbnail', '','')
//     );
//     register_post_type('galeria', $args);
// }
// add_action('init', 'post_type_galeria_register');


// //=========================================================================================
// // POST TYPE PRODUTOS
// //=========================================================================================

// function post_type_produto_certro_register() {
//     $labels = array(
//         'name' => 'Produto',
//         'singular_name' => 'Produto',
//         'menu_name' => 'Produtos',
//         'add_new' => _x('Adicionar Produto', 'item'),
//         'add_new_item' => __('Adicionar Novo Produto'),
//         'edit_item' => __('Editar Produto'),
//         'new_item' => __('Novo Produto')
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'produto-certro'),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-cart',
//         'supports' => array('title', 'editor', 'thumbnail', '','')
//     );
//     register_post_type('produto-certro', $args);
// }
// add_action('init', 'post_type_produto_certro_register');


// //=========================================================================================
// // POST TYPE CURSOS
// //=========================================================================================

// function post_type_curso_register() {
//      $labels = array(
//          'name' => 'Cursos',
//          'singular_name' => 'Curso',
//          'menu_name' => 'Cursos',
//          'add_new' => _x('Adicionar Curso', 'item'),
//          'add_new_item' => __('Adicionar Novo Curso'),
//          'edit_item' => __('Editar Cursos'),
//          'new_item' => __('Novos Cursos')
//      );

//      $args = array(
//          'labels' => $labels,
//          'public' => true,
//          'publicly_queryable' => true,
//          'show_ui' => true,
//          'show_in_menu' => true,
//          'query_var' => true,
//          'rewrite' => array('slug' => 'curso'),
//          'capability_type' => 'post',
//          'has_archive' => true,
//          'hierarchical' => true,
//          'menu_position' => 5,
//          'menu_icon' => 'dashicons-book',
//          'show_in_rest'       => true,
//          'supports' => array('title', 'editor', 'thumbnail', '','')

//      );
//      register_post_type('curso', $args);
//  }
//  add_action('init', 'post_type_curso_register');


