<!-- C.2.4. SERVICES -->                    

<section class="section" id="section-services">

    <div class="container">

        <!-- C.2.4.1. Page Title -->

        <section class="section-header">
            <h2>What We Offer</h2>
        </section>

        <!-- C.2.6.2. SERVICES DATA -->

        <?php
            $args = array(
                'post_type' => 'services',
            );
            $services = new WP_Query( $args );
            if( $services->have_posts() ) {
              while( $services->have_posts() ) {
                $services->the_post();
                ?>

                <p><?php the_field('intro') ?></p>

                <section class="services grid">
                    
                    <aside class="service one-half">
                        <h1><?php the_field('title_1') ?></h1>
                        <figure class="figure__image">
                            <img src="<?php the_field('image_1') ?>" alt="service image" class="service-imgae" />
                        </figure>
                        <section class="service-info">
                            <div class="wrapper">
                                <?php the_field('detail_1') ?>
                            </div>
                        </section>
                    </aside>

                    <aside class="service one-half">
                        <h1><?php the_field('title_2') ?></h1>
                        <figure class="figure__image">
                            <img src="<?php the_field('image_2') ?>" alt="service image" class="service-imgae" />
                        </figure>
                        <section class="service-info">
                            <div class="wrapper">
                                <?php the_field('detail_2') ?>
                            </div>
                        </section>
                    </aside>

                    <aside class="service one-half">
                        <h1><?php the_field('title_3') ?></h1>
                        <figure class="figure__image">
                            <img src="<?php the_field('image_3') ?>" alt="service image" class="service-imgae" />
                        </figure>
                        <section class="service-info">
                            <div class="wrapper">
                                <?php the_field('detail_3') ?>
                            </div>
                        </section>
                    </aside>

                    <aside class="service one-half">
                        <h1><?php the_field('title_4') ?></h1>
                        <figure class="figure__image">
                            <img src="<?php the_field('image_4') ?>" alt="service image" class="service-imgae" />
                        </figure>
                        <section class="service-info">
                            <div class="wrapper">
                                <?php the_field('detail_4') ?>
                            </div>
                        </section>
                    </aside>

                </section>

                <section class="key-words">
                    <?php the_content() ?>
                </section>

                <?php
              }
            }
        ?>

        <!-- C.2.6.2. Team List -->
        
        <ul class="grid">

        <?php
            $args = array(
                'post_type' => 'logos',
            );
            $logos = new WP_Query( $args );
            if( $logos->have_posts() ) {
              while( $logos->have_posts() ) {
                $logos->the_post();
                ?>
            
                <li class="grid__logos one-quarter">
                    
                    <img src="<?php the_field('client_logo') ?>" alt="client logo" class="mainImg" />
                    
                </li>
            
                <?php
              }
            }
        ?>

        </ul>                    

    </div>

</section>

<!-- C.2.4. END -->