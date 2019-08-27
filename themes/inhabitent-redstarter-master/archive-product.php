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
			<h1>Shop Stuff</h1>

			</header><!-- .page-header -->

			<div class="shop-container">
				<ul>
				<?php 
   
  			 $namesArgs=[
			   'taxonomy'=>'product-type',
	  		   'hide_empty' => true,
	  		   'order' => 'ASC',
 					  ];

 			  $names =get_terms($namesArgs);
  				 foreach ( $names as $name ) {
	   
	
	 			 echo "<li><a href=". get_term_link($name). ">" .$name->name."</a></li>"; 
	 
	  
       

 					  } ?>
				</ul>

			</div>



				<?php /* Start the Loop */ ?>
				 <?php
			
				 ?> 
		<div class="product-grid">
			<?php
  			 $args = array(
		    'post_type' => 'product',
			'order' => 'ASC',
			'posts_per_page'=>16,
				);
       		 $images = get_posts( $args );
			?>

	        
			<?php foreach ($images as $image): setup_postdata($image); ?>
				<?php 
			
				echo '<div class="product-grid-item">';
				echo '<div class="grid-thumbnail">';
				echo "<a href=".get_post_permalink($image->ID). ">";

				echo get_the_post_thumbnail($image->ID);
				echo '</a>';
				echo '</div>';
				echo '<div class="product-info">';
				echo '<div class="product-info-title">';
				
				echo ($image->post_title);
				
				echo '</div>';
				echo '<div class="dots"></div>'; 

			
				echo '<div class="product-info-price">';
				echo '$'.CFS()-> get('product_price');
				echo '</div>';

				
				
				echo '</div>';
            	echo '</div>';
				 ?>
		
			<?php endforeach ?>
			
			<?php wp_reset_postdata() ?> 
		</div><!--grid-->
	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
