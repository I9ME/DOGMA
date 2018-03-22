<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package storefront

 */

?>



		</div><!-- .col-full -->

	</div><!-- #content -->



	<?php do_action( 'storefront_before_footer' ); ?>



	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="col-full">

			

			<div class="session follow">

				<div class="header">

					<h5 class="title">DOGMA NAS REDES SOCIAIS</h5>

				</div>

				<div class="mainContent">

					<ul class="socialMedia">

						<li class="facebook"><a href="https://www.facebook.com/dogmastorebr" title="facebook" target="_blank"></a></li>

			<li class="instagram"><a href="https://instagram.com/dogma.store/" title="instagram" target="_blank"></a></li>

			<li class="youtube"><a href="https://www.youtube.com/channel/UCk8Wr6idc4AV_fzB91idBGw" title="youtube" target="_blank"></a></li>

			<li class="twitter"><a href="https://twitter.com/@dogmastorebr" title="twitter" target="_blank"></a></li>

			<li class="pinterest"><a href="https://br.pinterest.com/dogmastore/" title="pinterest" target="_blank"></a></li>

					</ul>

				</div>

			</div>

			

			<div class="session nav">

				<?php

					wp_nav_menu(

					array(

						'theme_location'	=> 'primary',

						'container_class'	=> 'primary-navigation',

						)

					);

				?>

			</div>

			<div class="session contacts">

				<ul class="listItem">

					<li class="item whatsapp">

						<span>(85) 98126-2984</span>

					</li>

					<li class="item whatsapp">

						<span>(85) 99748-7294</span>

					</li>

				</ul>

			</div>

			

			<div class="session newsletter">

				<div class="header">

					<h5 class="title">NEWSLETTER</h5>

				</div>

				<div class="mainContent">

					

					<!-- Begin MailChimp Signup Form -->



<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

<style type="text/css">

	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.

	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

</style>

<div id="mc_embed_signup">

<form action="//dogmastore.us12.list-manage.com/subscribe/post?u=b3cb4ca52469bdfa3e4b5839d&amp;id=7f2e3f3327" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

    <div id="mc_embed_signup_scroll">

<div class="mc-field-group">

	

	<input type="email" value="" name="EMAIL" placeholder="INSIRA SEU E-MAIL" class="required email" id="mce-EMAIL">

	<input type="submit" value="CADASTRAR-ME" name="subscribe" id="mc-embedded-subscribe" class="button">

</div>



	<div id="mce-responses" class="clear">

		<div class="response" id="mce-error-response" style="display:none"></div>

		<div class="response" id="mce-success-response" style="display:none"></div>

	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

    <div style="position: absolute; left: -5000px;" aria-hidden="true">

	<input type="text" name="b_b3cb4ca52469bdfa3e4b5839d_7f2e3f3327" tabindex="-1" value="">

    </div>



    </div>

</form>

</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<!--End mc_embed_signup-->





					

				</div>

			</div>

			<div class="session selos">

				<ul class="colls colls-2">

					<li class="coll seguranca">

						<div class="header">

							<span class="icon"></span>

							<h5 class="title">SEGURANÇA E CONFIANÇA</h5>

						</div>

						<div class="mainContent">

							<a id="seloEbit" href="http://www.ebit.com.br/#dogma-store" target="_blank" onclick="redir(this.href);"></a> 

							<script type="text/javascript" id="getSelo" src="https://imgs.ebit.com.br/ebitBR/selo-ebit/js/getSelo.js?74394"> 

							</script>

							<!--

							<img src="<?php //  echo get_template_directory_uri(); ?>/images/selo_ebit.png" alt="Selo e-bit" border="0" />

							-->

						</div>

					</li>

					<li class="coll pagamento">

						<div class="header">

							<span class="icon"></span>

							<h5 class="title">FORMAS DE PAGAMENTO</h5>

						</div>

						<div class="mainContent">

							<img class="selo_h" src="<?php echo get_template_directory_uri(); ?>/images/selo_pagSeguro_h.png" alt="Selo PagSeguro" border="0" />

							<img class="selo_v" src="<?php echo get_template_directory_uri(); ?>/images/selo_pagSeguro_v.png" alt="Selo PagSeguro" border="0" />

						</div>

					</li>

				</ul>

			</div>

			

			<div class="session afterFooter">

				<a class="developer" href="http://www.i9me.com.br" target="_blank" title="Desenvolvido por I9ME Web & Design">

					<img src="<?php echo get_template_directory_uri(); ?>/images/i9me-web-e-design.png" alt="Diogo Soares - Webmarketing" border="0" />

				</a>

				<p class="direitos">© DOGMA STORE 2016. TODOS OS DIREITOS RESERVADOS.</p>

			</div>





			<?php

			/**

			 * @hooked storefront_footer_widgets - 10

			 * @hooked storefront_credit - 20

			 */

			//do_action( 'storefront_footer' ); ?>



		</div><!-- .col-full -->

	</footer><!-- #colophon -->



	<?php do_action( 'storefront_after_footer' ); ?>



</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

