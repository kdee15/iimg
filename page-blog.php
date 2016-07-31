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

                <h1>Blog Page - Archive!!!!!!!!!!!!!!!!!!</h1>


                            <?php
                                $args=array(
                                  'post_type' => 'post',
                                  'post_status' => 'publish',
                                  'posts_per_page' => -3,
                                  'caller_get_posts'=> 1
                                );
                                $my_query = null;
                                $my_query = new WP_Query($args);

                                if( $my_query->have_posts() ) {
                                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    <?php the_title() ?>

                                    <?php
                                  //the_excerpt();
                                  endwhile;
                                }

                                wp_reset_query();  // Restore global post data stomped by the_post().
                            ?>
                            
                        </section>
                        
                        
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'matty' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'matty' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>     

<?php get_footer(); ?>
<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->