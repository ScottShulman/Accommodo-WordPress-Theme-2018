<?php
/*
 * Template Name: Canvas Home 
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<div id="page-content">
<?php if (have_posts()){ ?>
	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	
	<?php }else {
		echo esc_html__( 'Page Canvas For Page Builder', 'accommodo' );
	}?>
	</div>

<?php get_footer(); ?>