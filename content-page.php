<!-- start content container -->
<div class="row bulk__container">   
	<article class="col-md-<?php bulk_main_content_width_columns(); ?> bulk__container-box">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                          
				<div <?php post_class(); ?>>
					<div class="bulk__container-box2">                
						<div class="bulk__container-box3">                              
							<?php the_content(); ?>                            
						</div>                               
						<?php wp_link_pages(); ?>                                                                                     
						<?php comments_template(); ?>
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
