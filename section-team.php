
<!-- C.2.6. MEET THE TEAM -->

<section class="section" id="section-team">
    
    <div class="figure-teamTop"><span></span></div>

    <div class="container">

        <!-- C.2.6.1. Page Title -->

        <section class="section-header">
            <h2>meet the team</h2>
            <span></span>
        </section>

        <!-- C.2.6.2. Team List -->
        
        <ul class="grid-group">

        <?php
            $args = array(
                'post_type' => 'team',
            );
            $team = new WP_Query( $args );
            if( $team->have_posts() ) {
              while( $team->have_posts() ) {
                $team->the_post();
                ?>
            
                <li class="grid-item view view-tenth">
                    
                    <img src="<?php the_field('photo') ?>" alt="client logo" class="mainImg" />
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <p class="card-title"><?php the_field('title') ?></p>
                    
                    <div class="mask">
                        <div class="foil">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    
                </li>
            
                <?php
              }
            }
        ?>

        </ul>
        
        <!-- C.2.6.2. Teram Carousel List -->
        
        
        <div class="jcarousel-wrapper">
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