<?php get_header(); ?>

<div class="page__area-header">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="page__areasingle-image">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif; ?>
	<header class="page__area-header-container">
		<h1 class="page__area-header-text">                                
			<?php the_title(); ?>                          
		</h1>
		<?php do_action( 'bulk_after_page_title' ); ?>
	</header>
</div>

<?php get_template_part( 'template-parts/template-part', 'content' ); ?>
<!-- start content container -->
<?php get_template_part( 'content', 'page' ); ?>
<!-- end content container -->

<?php get_footer(); ?>
