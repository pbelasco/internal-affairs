<?php
/*
Template Name: Salas de imprensa
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="eight columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h1><?php the_title(); ?></h1>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Não encontrado</h1>
					    </header>
					    <section class="post_content">
					    	<p>Desculpe mas o que você procura não foi encontrado neste endereço.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<div id="sidebar-salas-de-imprensa" class="sidebar four columns" role="complementary">

					<div class="panel">
				
						<?php if ( is_active_sidebar( 'sidebar-salas-de-imprensa' ) ) : ?>

							<?php dynamic_sidebar( 'sidebar-salas-de-imprensa' ); ?>

						<?php else : ?>
							<!-- This content shows up if there are no widgets defined in the backend. -->
							
							<div class="alert-box">Nenhum Widget ativo.</div>

						<?php endif; ?>

					</div>

				</div>
			</div> <!-- end #content -->

<?php get_footer(); ?>