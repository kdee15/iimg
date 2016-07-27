<?php
/* template name: Posts by Category! */
get_header(); ?>

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
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

    <?php 

        // Willem se kak
        if (is_category( )) {
            $cat = get_query_var('cat');
            $yourcat = get_category ($cat);
        }

        // Make a header for the cateogry
        echo "<h3 class='category-title'>".$yourcat->name."</h3>";

        // create a custom wordpress query
        query_posts("cat=$cat&posts_per_page=100");




            // start the wordpress loop!
            if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php // create our link now that the post is setup ?>

                <?php the_title() ?>

            <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>


	


<?php get_footer(); ?>