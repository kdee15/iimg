
<!-- C.2.1. WE ARE OBJECTIVE -->                

<section class="section" id="section-our-vision">

    <div class="container">

        <!-- C.2.1.1. Page Title -->

        <section class="section-header">
            
            <h2>Our Vision</h2>
            
        </section>
        
        <?php
            $args = array(
                'post_type' => 'about',
            );
            $about = new WP_Query( $args );
            if( $about->have_posts() ) {
              while( $about->have_posts() ) {
                $about->the_post();
                ?>
            
                <section class="grid">

                    <figure class="figure__our-vision one-half">
                        <img src="<?php the_field('about_image') ?>" alt="Our Vision" />
                    </figure>

                    <aside class="our-vision one-half">

                        <?php the_field('about_copy') ?>

                    </aside>

                </section>
            
                <?php
              }
            }
        ?>
        
        
        
        
        
        

    </div>

    <div class="figure-teamBottom"></div>

</section>

<!-- C.2.1. END -->  