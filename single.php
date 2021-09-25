<?php get_header(); ?>

<div class="page__area-top">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="page__area-top-img">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
	<?php endif; ?>
	<header class="page__area__header-title">
		<h1 class="page__area__header-text">                                
			<?php the_title(); ?>                          
		</h1>
		<div class="page__area__header-meta">
			<?php bulk_time_link(); ?>
			<?php bulk_posted_on(); ?>
			<?php bulk_entry_footer(); ?>
		</div>
		<?php do_action( 'bulk_after_post_meta' ); ?>
	</header>
</div>
<?php get_template_part( 'template-parts/template-part', 'content' ); ?>

<?php get_template_part( 'content', 'single' ); ?>

<?php get_footer(); ?>
