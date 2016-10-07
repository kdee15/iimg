<?php get_template_part( 'inc/page-header' ); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.2. SITE MAST ----------------------------------------------------------------------------------------------- -->

<section class="mast" id="page-<?php the_id(); ?>">
    
    <div class="container">
        
        <!-- C.2.1. BLOG ARTICLE AREA ----------------- -->
        
        <h1><?php the_title(); ?></h1>
        
        <section class="articles grid">
            
            <?php 
                // the query to set the posts per page to 3
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 8, 
                    'paged' => $paged 
                );
                query_posts($args);
            ?>
            
            <!-- the loop -->
            <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
            
                <!-- rest of the loop -->
                <!-- the title, the content etc.. -->
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

            <?php endwhile; ?>
            
            <!-- C.2.2. PAGER ----------------------------- -->
            <ul class="pager">
                <li><?php next_posts_link(); ?></li>
                <li><?php previous_posts_link(); ?></li>
            </ul>
            
            
            
            <!-- C.2.2. END ------------------------------- -->
            
            <?php else : ?>
            <!-- No posts found -->
            
            <?php endif; ?>
            
        </section>
    
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