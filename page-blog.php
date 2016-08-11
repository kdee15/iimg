<?php get_template_part( 'inc/page-header' ); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.2. SITE MAST ----------------------------------------------------------------------------------------------- -->

<section class="mast" id="page-<?php the_id(); ?>">
    
    <div class="container">
        
        <!-- C.2.1. BLOG ARTICLE AREA ----------------- -->
        
        <h1>PR &amp; Marketing</h1>
        
        <section class="articles grid">

            <?php
                $args=array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'caller_get_posts'=> 1
                );
                $my_query = null;
                $my_query = new WP_Query($args);

                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <article class="one-quarter article">
                    <a class="blog card" href="<?php the_permalink() ?>">
                        <figure class="figure__image">
                            <img src="<?php the_field('blog_pic') ?>" alt="<?php the_title() ?>" class="blog-image" />
                        </figure>
                        <section class="blog-info">
                            <h2><?php the_title() ?></h2>
                            <span class="excerpt"><?php the_excerpt() ?></span>
                        </section>
                    </a>
                </article>

                <?php
                  endwhile;
                }

                wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        
        </section>
        
        <!-- C.2.1. END ------------------------------- -->
        
        <!-- C.2.2. PAGER ----------------------------- -->
        
        <div class="blog-pager">

            <?php /* Display navigation to next/previous pages when applicable */ ?>
                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <div id="nav-below" class="navigation">
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'matty' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'matty' ) ); ?></div>
                    </div><!-- #nav-below -->
                <?php endif; ?>

        </div>
        
        <!-- C.2.2. END ------------------------------- -->
    
    </div>
    
</section>

<!-- C.2. END ----------------------------------------------------------------------------------------------------- -->

<!-- C.3. FOOTER -------------------------------------------------------------------------------------------------- -->

<?php get_template_part( 'inc/page-footer' ); ?>
        
<!-- C.3. END ----------------------------------------------------------------------------------------------------- -->

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->