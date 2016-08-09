<?php
/* template name: Posts by Category! */
get_header(); ?>

    <?php

    // Willem se kak
    if (is_category( )) {
        $monthnum = get_query_var('monthnum');
        $year = get_query_var('year');
    }

    // Make a header for the Date Archive
    $date = strtotime($year . '-' . $monthnum . '-01 00:00:00');
    $monthname = date('F', $date);

    echo "<h3 class='category-title'>".$monthname."</h3>";

    // create a custom wordpress query
    query_posts("monthnum=$monthnum&year=$year&posts_per_page=100");

    // start the wordpress loop!
    if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php // create our link now that the post is setup ?>

        <?php the_title() ?>

    <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>

<?php get_footer(); ?>