<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddieblack
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<div class="entry-content">

	<!-- If there is flexible content, let's see it -->
	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
	  // If it’s a header, go through the data
	  if( get_row_layout() == 'header' ): ?>

	  	<!-- Header Component -->
	  <?php get_template_part( 'template-parts/content-header' ); ?>
	</a>
	<a name="scroll"></a>

	<!-- if it’s an intro text component, show us the data -->
	<?php elseif( get_row_layout() == 'intro_text' ): ?>

		<!-- Intro Text Component -->
	  <?php get_template_part( 'template-parts/content-introtext' ); ?>

	<!-- if it’s a text component, show us the data -->
	<?php elseif( get_row_layout() == 'text_block' ): ?>

		<!-- Basic text component -->
	  <?php get_template_part( 'template-parts/content-text' ); ?>

	  	  	<!-- if it’s a quote component, show us the data -->
	<?php elseif( get_row_layout() == 'quote' ): ?>

		<!-- Quote component -->
	  <?php get_template_part( 'template-parts/content-quote' ); ?>

	<?php elseif( get_row_layout() == 'gallery' ): ?>
		<!-- Image Gallery Component  -->
		<?php get_template_part( 'template-parts/content-gallery' ); ?>

		<?php endif; 
		endwhile; endif; ?>

		<!-- Scroll to Top Button -->
		<!-- <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="<?php bloginfo('template_directory');?>/images/uparrow.png"></button> -->

		<!-- <script>
			mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}


			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0; // For Safari
			  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
			}	

		</script> -->
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- "Explore" footer component -->
		<?php get_template_part( 'template-parts/content-explore' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->













