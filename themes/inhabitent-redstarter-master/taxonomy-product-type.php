<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-grid">
			
			
                <?php
				echo '<div class="product-grid-item">';
				echo '<div class="grid-thumbnail">';
			?>
               
				<?php if ( has_post_thumbnail() ) : ?>
				
			<?php echo	"<a href=".esc_url( get_permalink()). ">"; ?>
				<?php the_post_thumbnail( 'large' ); ?>
				<?php echo '</a>'?>
				<?php endif; ?>

			<?php	echo '</a>';
				echo '</div>';
				echo '<div class="product-info">';
				echo '<div class="product-info-title">'; ?>
				
				
				<?php the_title( ); ?>
			  
				<?php
				echo '</div>';
				echo '<div class="dots"></div>'; 

				// echo '.................';
				echo '<div class="product-info-price">';
				echo '$'.CFS()-> get('product_price');
				echo '</div>';

				
				
				echo '</div>';
            	echo '</div>';


             ?>
				
		 	<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
