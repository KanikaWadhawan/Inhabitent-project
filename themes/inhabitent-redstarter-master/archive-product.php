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
			<h2>Shop Stuff</h2>

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
		//   while ( have_posts() ) : the_post();
			 ?> 
		
			<?php
   $args = array(
	    'post_type' => 'product',
		'order' => 'ASC',
		'posts_per_page'=>-1,
	);
        $images = get_posts( $args );
	?>

	
<?php foreach ($images as $image): setup_postdata($image); ?>
<?php 
 echo get_the_post_thumbnail($image->ID);
echo ($image->post_title);
echo '.................';
echo '$'.CFS()-> get('product_price');
echo get_post_permalink($image->ID);

 ?>

<?php endforeach ?>
<?php wp_reset_postdata() ?>

			<?php
			//  endwhile; 
			?> 

		

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
