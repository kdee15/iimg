
<!-- C.2.6. MEET THE TEAM -->

<section class="section" id="section-team">
    
    <div class="container">

        <!-- C.2.6.1. Page Title -->

        <section class="section-header">
            <h2>Meet The Team</h2>
        </section>

        <!-- C.2.6.2. Team List -->
        
        <ul class="team-list grid">

        <?php
            $args = array(
                'post_type' => 'team',
                'posts_per_page' => '20',
            );
            $team = new WP_Query( $args );
            if( $team->have_posts() ) {
              while( $team->have_posts() ) {
                $team->the_post();
                ?>
            
                <li class="one-quarter team-item">
                    
                    <img src="<?php the_field('photo') ?>" alt="pic" class="toggle-div pic" name="team<?php the_id() ?>" />
                    <img src="<?php the_field('photo_highlight') ?>" alt="pic" class="toggle-div pic-hover" name="team<?php the_id() ?>" />
                    <h3 class="team-text"><?php the_title() ?></h3>
                    <h4 class="team-text"><?php the_field('title') ?></h4>
                    
                    <?php get_template_part( 'modal-team' ); ?>
                    
                </li>
            
                <?php
              }
            }
        ?>

        </ul>
        
        <!-- C.2.6.2. Teram Carousel List -->
        
        <div class="jcarousel-wrapper team-carousel">
            <div class="jcarousel">

                <!-- C.2.6.2. CAROUSEL LIST -->

                <ul>

                <?php
                    $args = array(
                        'post_type' => 'team_carousel',
                    );
                    $carousel = new WP_Query( $args );
                    if( $carousel->have_posts() ) {
                      while( $carousel->have_posts() ) {
                        $carousel->the_post();
                        ?>

                        <li><img src="<?php the_field('photo') ?>" alt="carousel image" class="carousel-pic" /></li>

                        <?php
                      }
                    }
                ?>

                </ul>

            </div>

            <p class="jcarousel-pagination"></p>

        </div>

    </div>                 

</section>

<!-- C.2.6. END -->