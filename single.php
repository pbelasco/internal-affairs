<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="main" class="<?php echo (isset($_GET['mailing']) ? 'twelve' : 'eight'); ?> columns clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?php //the_post_thumbnail( 'wpbs-featured' ); 
								//the_post_thumbnail('bones-thumb-300');
							?>
							
							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							
														<p class="meta"><?php _e("Publicado em", "bonestheme"); ?> <time datetime="<?php echo the_time('j \d\e m \d\e Y'); ?>" pubdate><?php echo the_time('j\/m\/Y'); ?></time>  <?php _e("em", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">

							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ' ', '</p>'); ?>
							<a class="tags-title" href="<?php the_permalink(); ?>&mailing=1">Mailing</a>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php if(!isset($_GET['mailing'])) { get_sidebar(); } // sidebar 1 ?>
    	
			</div> <!-- end #content -->

<?php get_footer(); ?>