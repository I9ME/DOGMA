<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>

<?php if ( is_home() ) : ?>
		
		<?php echo do_shortcode("[metaslider id=265]"); ?>
		
		<ul class="blocksHome">
			<li class="block frete">
				<a href="<?php echo esc_url( home_url( '/frete' ) ); ?>">
					<h4 class="title">FRETE <br/>GRÁTIS</h4>
				</a>
			</li>
			<li class="block troca">
				<a href="<?php echo esc_url( home_url( '/trocas-e-devolucoes' ) ); ?>">
					<h4 class="title">TROCA <br />GARANTIDA</h4>
				</a>
			</li>
			<li class="block seguranca">
				<a href="<?php echo esc_url( home_url( '/seguranca' ) ); ?>">
					<h4 class="title">SUA COMPRA <br />MAIS SEGURA</h4>
				</a>
			</li>
			<li class="block atendimento">
				<a href="<?php echo esc_url( home_url( '/atendimento' ) ); ?>">
					<h4 class="title">CENTRAL DE <br />ATENDIMENTO</h4>
				</a>
			</li>
		</ul>
		<div class="content content_1">
			<header class="headerSession">
				<h1 class="title">RECOMENDAMOS</h1>
				<br />
				<p class="legend">APROVEITE NOSSAS SUGESTÕES</p>
			</header>
			
			<div class="mainContent featured_products">
				<?php // echo do_shortcode("[featured_products per_page='5' columns='3' orderby='date' order='desc']"); ?>
				<?php echo do_shortcode("[yith_wc_productslider id=289]"); ?>
				<a class="linkSession" href="<?php echo esc_url( home_url( '/loja' ) ); ?>">VER MAIS</a>
				
				
			</div>
			
		</div>
		<div class="content content_2 blog">
				<header class="headerSession">
				<h1 class="title">BLOG</h1>
				<br />
				<p class="legend">DA DOGMA</p>
			</header>
				
			<div class="mainContent">
				<ul class="items">
				<?php
				$aRecentPosts = new WP_Query("showposts=3"); // 5 é o número de posts recentes que você deseja mostrar
				while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
				if ( has_post_thumbnail() ) :
				?>
				<li class="item">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?> " rel="bookmark">
						<h3 class="title"><?php the_title();?></h3>
						<?php the_post_thumbnail(); ?>
					</a>
				</li>

				<?php
				endif;
				endwhile;
				?>
				</ul>
				
				<a class="linkSession" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">VER MAIS</a>
				
			</div>
		</div>
		
		<div class="content content_3 instagram">
				<header class="headerSession">
				<h1 class="title">#INSTAGRAM</h1>
				<br />
				<p class="legend">SIGA O @DOGMASTORE</p>
			</header>
				
			<div class="mainContent">
				
				<?php echo do_shortcode('[instagram-feed]'); ?>
				
				<a class="linkSession" href="https://instagram.com/dogma.store/" target="_blank">VER MAIS</a>
				
				
			</div>
		</div>

		
		<?php else: ?>
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		
		
		
			<?php if ( have_posts() ) : ?>

				<?php get_template_part( 'loop' ); ?>
	
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
		
		

		</main><!-- #main -->
	</div><!-- #primary -->
	
	

<?php do_action( 'storefront_sidebar' ); ?>

<?php endif; ?>

<?php get_footer(); ?>
