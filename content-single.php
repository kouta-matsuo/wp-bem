<!-- start content container -->
<div class="row bulk__container">      
	<article class="col-md-<?php bulk_main_content_width_columns(); ?> bulk__container-box">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                         
				<div <?php post_class(); ?>>
					<div class="bulk__blog-box"> 
						<div class="bulk__blog-text">
							<?php the_content(); ?> 
						</div><!-- .single-entry-summary -->
						<?php wp_link_pages(); ?>                                                           
					</div>
					<div class="bulk__blog-footer row">
						<div class="col-md-4 bulk__blog-footer-box">
							<?php get_template_part( 'template-parts/template-part', 'postauthor' ); ?>
						</div>
						<div class="col-md-8 bulk__blog-border">
							<?php comments_template(); ?> 
						</div>
					</div>
				</div>        
			<?php endwhile; ?>        
		<?php else : ?>            
			<?php get_template_part( 'content', 'none' ); ?>        
		<?php endif; ?>    
	</article> 

	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->
