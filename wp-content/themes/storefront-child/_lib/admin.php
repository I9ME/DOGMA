<?php
/*
* Admin Style functions
* Desenvolvedor: Bruno Lima
* Email: brunolimadevelopment@gmail.com
*/

add_action('login_head', 'custom_login_logo');
function custom_login_logo() {

$background         = '#aaa';
$nocolor            = 'rgba(0,0,0,0)';
$bg_color           =  '#000'; 
$lb_color           = '#172347'; //COR DOS LABEL'S DO FORM

$in_focus_shadow    = '#c5e92e'; //COR DA SOMBRA DOS CAMPOS (FOCUS)
$in_focus_border    = '#ccc'; //COR DA BORDA DOS CAMPOS (FOCUS)

$lg_text_color      = '#fff';    //COR DO TEXTO DO BOTÃO PRIMRÁRIO
$lg_text_color_h    = '#fff';    //COR DO TEXTO DO BOTÃO PRIMRÁRIO (HOVER)
$lg_color           = '#172347'; //COR DO BOTÃO PRIMÁRIO
$lg_color_hover     = '#21346d'; //COR DA BOTÃO PRIMÁRIO HOVER
$lg_color_shadow    = $nocolor;  //COR DA SOMBRA DO BOTÃO PRIMRÁRIO
$lg_color_shadow_h  = $nocolor;  //COR DA SOMBRA DO BOTÃO PRIMRÁRIO (HOVER)
$lg_border_color    = $nocolor;  //COR DA BORDA DO BOTÃO PRIMRÁRIO
$lg_border_color_h  = $nocolor;  //COR DA BORDA DO BOTÃO PRIMRÁRIO (HOVER)

$bt_color           = '#fff'; //COR DO BOTÃO SECUNDÁRIO
$bt_color_h         = '#c7c7c7'; //COR DO BOTÃO SECUNDÁRIO (HOVER)
$bt_text_color      = '#172347';    //COR DO TEXTO DO BOTÃO SECUNDÁRIO (HOVER)
$bt_text_color_h    = '#000';    //COR DO TEXTO DO BOTÃO SECUNDÁRIO (HOVER)

$logow              = '174px';   //DIMENSÕES DO LOGO - LARGURA
$logoh              = '107px';    //DIMENSÕES DO LOGO - ALTURA

echo '
<style type="text/css">

body.login {background: '.$bg_color.' !important;background-repeat: no-repeat!important;background-position: right!important;background-size: 30% !important;}
.wp-core-ui .button-primary:hover, .login #backtoblog:hover, .login #nav:hover {
  transition: background .25s ease-in-out;
  -moz-transition: background .25s ease-in-out;
  -webkit-transition: background .25s ease-in-out;
}

#loginform {
    /*background: '.$background.' !important;*/
}

h1 a {
  background-image: url('.get_bloginfo('template_directory').'/_lib/_admin/logo.png) !important;
  background-size: contain !important;
  height: '.$logoh.' !important;width: '.$logow.' !important;
  padding-bottom: 25px;
}

#loginform input:focus {
  box-shadow: 0px 0px 2px '.$in_focus_shadow.';
  border-color: '.$in_focus_border.';
}

.login label {color: '.$lb_color.' !important;font-weight: bold;}
#login_error, .login .message {display: none;}

.wp-core-ui .button-primary {
  background: '.$lg_color.' !important;color: '.$lg_text_color.' !important;
  border-color: '.$lg_border_color.' !important;
  box-shadow: 0 1px 0 '.$lg_color_shadow.' !important;
  text-shadow: none;
}

.wp-core-ui .button-primary:hover {
    background: '.$lg_color_hover.' !important;color: '.$lg_text_color_h.' !important;
    border-color: '.$lg_border_color_h.' !important;box-shadow: 0 1px 0 '.$lg_color_shadow_h.' !important;
}

.login #backtoblog, .login #nav {
  color: '.$bt_text_color.' !important;
  background: '.$bt_color.';
  border-radius: 5px;
  float: left;
  margin: 15px 0 0px !important;
  padding: 10px 0px !important;
  text-align: center;
  width: 100%;
}
.login #backtoblog:hover, .login #nav:hover {
    background: '.$bt_color_h.' !important;
    color: '.$bt_text_color_h.' !important;
}
.login #backtoblog a, .login #nav a {color: inherit !important;}

</style>';
}