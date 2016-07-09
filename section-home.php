
<!-- C.2.0. WE ARE DIFFERENT -->

<section class="section-home">
        
    <div class="jcarousel-wrapper">
        <div class="jcarousel">

            <!-- C.2.6.2. CAROUSEL LIST -->

            <ul>

            <?php
                $args = array(
                    'post_type' => 'carousel',
                );
                $carousel = new WP_Query( $args );
                if( $carousel->have_posts() ) {
                  while( $carousel->have_posts() ) {
                    $carousel->the_post();
                    ?>

                    <li><img src="<?php the_field('carousel_image') ?>" alt="carousel image" class="carousel-pic" /></li>

                    <?php
                  }
                }
            ?>

            </ul>

        </div>

        <p class="jcarousel-pagination"></p>

    </div>

</section>

<!-- C.2.0. END -->  