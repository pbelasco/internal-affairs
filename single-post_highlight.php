<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="eight columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header class="twelve columns">
							
							<h1><?php the_title(); ?></h1>
					
						</header> <!-- end article header -->
					
						<section class="post_content clearfix twelve columns">
	
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tags', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>
							
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
					    	<p>Desculpe, o conteúdo que voce procura não está neste endereço.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar1(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>