<!-- C.2.0. WE ARE DIFFERENT -->

<section class="section-home">
        
    <div class="jcarousel-wrapper home-carousel">
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

                    <li>
                        <figure class="carousel-pic" id="pic<?php the_id() ?>">
                            <img src="<?php the_field('carousel_image') ?>" alt="carousel image" class="image" />
                        </figure>
                        <style>
                            #pic<?php the_id() ?> .set-left { margin-left: <?php the_field('image_shift') ?>; }
                            #pic<?php the_id() ?> .set-top { margin-top: <?php the_field('shift_top') ?>; }
                        </style>
                        <aside class="carousel-text" style="<?php the_field('v_position') ?>: <?php the_field('v_value') ?>; <?php the_field('h_position') ?>: <?php the_field('v_value') ?>;">
                            <h3 class="text"><?php the_title() ?></h3>
                            <h5 class="text"><?php the_field('tagline') ?></h5>
                        </aside>
                    </li>

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