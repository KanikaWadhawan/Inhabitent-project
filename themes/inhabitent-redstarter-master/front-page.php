<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('about'); ?>

	

		


		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

		


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

 

		<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="home-hero">
			<img src='images/logos/inhabitent-logo-full.svg' alt='Inhabitent logo'>
		</section>

		

		<div class="entry-content">
		<section class="journal-info">

		<?php
   $args = array(
	    'post_type' => 'post',
		'orderby' => array(
			'date' => 'DESC',
			),
		'posts_per_page'=>3,
	);
   $journals = get_posts( $args ); // instantiate our object
  
?>
<h2 class="post-title">Inhabitent Journal </h2>
<div class="post-container">

<?php foreach ($journals as $journal): setup_postdata($journal); ?>
<?php $post_date =$journal-> post_date;
	 $post_title= $journal-> post_title;
	 $post_comment =$journal-> comment_count;
	 $post_comment_pemalink =$journal-> guid;

?>
<div class="post-items">
	<div class="post-item-image">
       <?php echo get_the_post_thumbnail($journal->ID); ?>
	</div>
	<div class="post-item-date-comment">
	   <?php echo $post_date; ?> / <?php echo  $post_comment ?>
	</div>
	<div class="post-item-title">
	   <a href="<?php echo  $post_comment_pemalink ?> "><?php echo $post_title ?>
		</a>
		
	</div>
	<a href="<?php echo  $post_comment_pemalink ?>"> 
    <button class="button-read-entry">Read Entry</button>	
	</a>
	

	</div>
<?php endforeach ?>
<?php wp_reset_postdata() ?>
</div>

</section>



      <div class="products_info">
  <h2> Shop Stuff</h2>

  <div class="product-container">
  <?php 
   
   $termArgs=[
	   'taxonomy'=>'product-type',
	   'hide_empty' => true,
   ];

   $terms =get_terms($termArgs);
   foreach ( $terms as $term ) {


   $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';

   
   echo '<img src="' . $icon . '" />';
   echo $term->name;
   echo $term->description;
//    echo get_term_link($term);
}


 ?>

</div>



<?php
 $adventure_list = array(
	'post_type' => 'adventure',
	
	'posts_per_page'=>4,
	'order' => 'ASC',
);
$adventures = get_posts( $adventure_list );

?>

<div class="post-adventure">
<h2>Latest Adventure</h2>
<?php foreach ($adventures as $adventure): setup_postdata($adventure); ?>
<?php 
	 $post_title= $adventure-> post_title;
	 
	 $post_permalink =$adventure-> guid;

?>

<div class="adventure-image">
       <?php echo get_the_post_thumbnail($adventure->ID); ?>
</div>

<div class="adventure-title">
       <?php echo  $post_title; ?>
</div>

<div class="adventure-link">
<a href="<?php echo  $post_permalink ?>"> 
    <button class="button-read-more">Read More</button>	
	</a>


</div>


<?php endforeach ?>
<?php wp_reset_postdata() ?>
<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">
<button>More Adventures </button>
</a>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
