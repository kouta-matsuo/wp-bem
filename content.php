<article>
	<div <?php post_class(); ?>>                    
		<?php if ( has_post_thumbnail() ) : ?>                               
			<a class="page__area__blog-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
				<?php the_post_thumbnail( 'bulk-single' ); ?>
			</a>								               
		<?php endif; ?>	
		<div class="page__area__blog-content">
			<h2 class="page__area__blog-heading">                                
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>                            
			</h2>
			<div class="page__area__blog-meta">
				<?php bulk_time_link(); ?>
				<?php bulk_posted_on(); ?>
			</div><!-- .single-entry-summary -->
			<div class="page__area__blog-box">                                                      
				<div class="page__area__blog-text">
					<?php the_excerpt(); ?>
					<?php bulk_entry_footer(); ?>
				</div><!-- .single-entry-summary -->
				<a class="page__area__blog-more-btn" href="<?php the_permalink(); ?>" > 
					<?php esc_html_e( 'Read more', 'bulk' ) ?>
				</a>
			</div>                                                             
		</div>                   
	</div>
</article>
