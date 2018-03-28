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

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->
	<section class="i9me">
		<div class="container">
			<div class="i9me__developer">
				<a href="http://www.i9me.com.br" target="_blank" title="Desenvolvido por I9ME Web &amp; Design">
					<img src=<?php echo get_stylesheet_directory_uri().'/assets/images/i9me-web-e-design.png'?> alt="Diogo Soares - Webmarketing" border="0">
				</a>
			</div>
		</div>
	</section>
	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
