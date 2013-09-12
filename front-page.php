<?php get_header(); ?>

<?php
			global $post;
			$tmp_post = $post;
			$args = array(  'post_type' => 'post_highlight', 'numberposts' => 20 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); 
			?>
	<?php if (!true) { ?>

  <span class="orbit-caption" id="caption_<?php the_ID(); ?>">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p><?php the_excerpt(); ?></p>
  </span> 

<?php } ?>

<?php endforeach;?>

<?php
	$orbit_slider = of_get_option('orbit_slider');
	if ($orbit_slider){
?>
<div id="panel" class="twelve columns clearfix" role="main">

<header>
	<div id="featured">
		<!-- 970x365 imagem de fundo -->
		<?php
			// escreve os cabeçalhos
			global $post;
			$tmp_post = $post;
			$args = array(  'post_type' => 'post_highlight', 'numberposts' => 20 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); 
				$post_thumbnail_id = get_post_thumbnail_id();
				$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );
		?>
		<div data-caption="#caption_<?php the_ID(); ?>">
			<?php if(has_post_thumbnail()) :?>
			<a href="<?php the_permalink() ?>"><?php 
				the_post_thumbnail('wpf-home-featured', "") ?></a>
	</div>
			<?php endif; ?> 
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>
	</div>
	
</header>

</div>
<script type="text/javascript">
   $(window).load(function() {
       $('#featured').orbit({ 
       	fluid: '16x6',
       	// pauseOnHover: 'true',
       	advanceSpeed: '5000',
       	animation: 'fade',
       });
   });
</script>

<?php } ?>

<div id="content">
<div id="main" role="main">
	<!-- 
	<div class="twelve columns">
		<h1>Serviços</h1>
	</div>
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
			<div class="servico-panel">
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

-->

<!-- end of Services part -->
<div class="row">
	<div class="twelve columns">
	<h2> Últimas notícias </h2>


<ul class="block-grid three-up mobile-two-up"">

<!-- last news -->
		<?php
			global $post;
			$tmp_post = $post;
			$args = array(  'numberposts' => 6 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); 
				$post_thumbnail_id = get_post_thumbnail_id();
				$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpf-home-featured' );
		?>

		<li> 
			<div class="news-panel">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
				<i><?php the_category(); ?></i>
					<?php the_post_thumbnail(array(80,80), 'align:left'); ?>
					<p>	
						<?php the_excerpt(); ?>
					</p>
					<p>
						<a class="button small" href="<?php the_permalink(); ?>"> leia o release »</a>
					</p>
			</div>
		</li>
		
		<?php endforeach; ?>
		<?php $post = $tmp_post; ?>


</ul>
</div>
 </div>
<!-- end row -->
</div>



<!-- end #main -->

		<?php //get_sidebar(); // sidebar 1 ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>