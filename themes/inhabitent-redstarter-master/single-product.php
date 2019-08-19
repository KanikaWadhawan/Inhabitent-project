<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
	
		<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	      <header class="entry-header">
		 
			  <div class ="thumbnail-wrapper">
		  <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		  <?php endif; ?>
			</div>

			</header><!-- .entry-header -->

			<div class ="content-wrapper">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); 
         
          
          ?>
          <div class="product_price">
         $<?php  echo CFS()->get( 'product_price' );?>
         </div>

		 
	      

	      <div class="entry-content">
		  <?php the_content(); ?>
		  <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		  ?>
		  </div>
		   
		  <?php get_template_part( 'template-parts/content', 'social'); ?>
	      </div><!-- .entry-content -->
  
	    
        </article><!-- #post-## -->

            
	

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
