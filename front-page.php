<?php get_header(); ?>
	<div id="content">
<?php
	$orbit_slider = of_get_option('orbit_slider');
	if ($orbit_slider){
?>
<div id="panel" class="twelve columns clearfix" role="main">

<header>
	<div id="featured">
		<!-- 970x365 imagem de fundo -->
		<?php
			// global $post;
			// $tmp_post = $post;
			// $args = array( 'numberposts' => 5 );
			// $myposts = get_posts( $args );
			// foreach( $myposts as $post ) :	setup_postdata($post); 
			// 	$post_thumbnail_id = get_post_thumbnail_id();
			// 	$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );


			global $post;
			$tmp_post = $post;
			$args = array(  'post_type' => 'highlight', 'numberposts' => 20 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); 
				$post_thumbnail_id = get_post_thumbnail_id();
				$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );
		?>
		<div>

<!--   <div data-caption="#caption_<?php the_ID(); ?>">
    <h4><?php the_title(); ?></h4>
    <p><?php the_excerpt(); ?></p>
  </div> 
   -->
			<?php if(has_post_thumbnail()) :?>
			<?php 
				the_post_thumbnail('wpf-home-featured', "") ?>
			
	</div>				
			<?php endif; ?> 
		<!-- 
					<?php the_excerpt(); ?>

					<p style="clear:both"><a href="<?php the_permalink(); ?>" class="button nice radius" style="float: right;">Leia mais »</a></p>
		</div> -->
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</div>
	
</header>

</div>
<script type="text/javascript">
   $(window).load(function() {
       $('#featured').orbit({ 
       	fluid: '16x6',
       	pauseOnHover: 'true',
       	advanceSpeed: '8000'
       });
   });
</script>

<?php } ?>


<div id="main" class="row" role="main">
	
		<h1>Serviços</h1>

		<?php
			global $post;
			$tmp_post = $post;
			$args = array(  'post_type' => 'servico', 'numberposts' => 20 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); 
				$post_thumbnail_id = get_post_thumbnail_id();
				$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );
		?>


		<div class="six columns"> 
			<div class="panel servico-panel">
				<h4><?php the_title();?></h4>
				<?php the_post_thumbnail(array(80,80)); ?>
					<p>	
						<?php the_excerpt(); ?>
					</p>
					<p>
						<a class="button" href="<?php the_permalink(); ?>"> Saiba mais »</a>
					</p>
			</div>
		</div>
		
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>

<!-- 

	<h1>Serviços</h1>
	<p>A Printec tem x anos de presença no mercado, e oferece uma ampla gama de serviços para clientes x, y e z</p>
	<div class="six columns"> 
		<div class="panel">
		
			<ul>
				<li>Assessoria de imprensa</li>
				<li>Media training</li>
				<li>Publicações customizadas</li>
				<li>Lançamentos de produtos e serviços</li>
				<li>Relacionamento com a comunidade, parceiros e clientes</li>
			</ul>

			<p>Saiba porque a printec tem todo o <i>know-how</i> e entende o que o seu negócio precisa para comunicar da forma certa.</p>
			<div class="button">Saiba mais</div>
		</div>
	</div>

	<div class="six columns"> 
		<div class="panel">
			<h4>Comunicação Interna</h4>
			<ul>
				<li>Consultoria</li>
				<li>Mural</li>
				<li>Jornais, revistas, intranet</li>
				<li>Campanhas motivacionais</li>
				<li>Estrategia de comunicação</li>
				<li>Gerenciamento de crise</li>
			</ul>
			<p>Conheça alguns casos de sucesso, histórias de clientes e o que pensamos a respeito.</p>
			<div class="button">Saiba mais</div>
		</div>
	</div>
 -->
</div>
<!-- end #main -->

		<?php //get_sidebar(); // sidebar 1 ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>