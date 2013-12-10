<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="eight columns clearfix" role="main">
				
					<div class="row ">
						<div class="three columns">
							<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"></img>
						</div>
						<div class="nine columns panel">

							<?php if (is_category()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("", "bonestheme"); ?></span> <?php single_cat_title(); ?>
								</h1>
							<?php } elseif (is_tag()) { ?> 
								<h1 class="archive_title h2">
									<span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
								</h1>
							<?php } elseif (is_author()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>
							<?php } elseif (is_month()) { ?>
							    <h1 class="archive_title h2">
							    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
							    </h1>
							<?php } elseif (is_year()) { ?>
							    <h1 class="archive_title h2">
							    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
							    </h1>
							<?php } ?>

							<p>
								<?php echo category_description(); ?>
							</p>
						</div>
					</div>


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta"><?php _e("Publicado em", "bonestheme"); ?> <time datetime="<?php echo the_time('j \d\e m \d\e Y'); ?>" pubtime></time> <?php echo the_time('j\/m\/Y'); ?>  <span class="amp"></span> <?php _e("em", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
						
							<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
						
							<?php the_excerpt(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Mais antigas', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Mais recentes &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Nenhuma publicação ainda.", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Desculpe. O conteo que você procura não está aqui.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>