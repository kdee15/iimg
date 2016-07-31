<?php get_template_part( 'inc/page-header' ); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->


                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <h1>Blog Archive!!!!!!!!!!!!!!!!!!</h1>

						<?php

							// get all the categories from the database
							$cats = get_categories(); 

							// loop through the categries
							foreach ($cats as $cat) {

								// setup the cateogory ID
								$cat_id= $cat->term_id;

								// Make a header for the cateogry
								echo "<h3 class='category-title'>".$cat->name."</h3>";

								// create a custom wordpress query
								query_posts("cat=$cat_id&posts_per_page=100");

								// start the wordpress loop!
								if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php // create our link now that the post is setup ?>

									<?php the_title() ?>

								<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>

							<?php } // done the foreach statement 

						?>

<?php get_footer(); ?>
<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->