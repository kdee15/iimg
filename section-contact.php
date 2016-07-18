<!-- C.2.7. CONTACT US -->

<section class="section" id="section-contact">

    <div class="container">

        <!-- C.2.7.1. Page Title -->

        <section class="section-header">
            <h2>Talk to Us</h2>
        </section>                          

        <!-- C.2.7.2. branch List -->
        
        <section class="section__branches">
            
            <?php
                $args = array(
                    'post_type' => 'branches',
                );
                $branch = new WP_Query( $args );
                if( $branch->have_posts() ) {
                  while( $branch->have_posts() ) {
                    $branch->the_post();
                    ?>

                    <aside class="branch grid">
                        
                        <figure class="figure__image one-half">
                            <img src="<?php the_field('photo') ?>" alt="branch image" class="branch-imgae" />
                        </figure>

                        <div class="branch-info one-half">
                            
                            <div class="wrapper">
                            
                                <h3 class="city"><?php the_field('city') ?></h3>
                                <h4 class="country"><?php the_field('country') ?></h4>
                                <div class="content"><?php the_content() ?></div>
                                <p class="branch-item tel"><?php the_field('telephone') ?></p>
                                <p class="branch-item email">
                                    <a href="<?php the_field('email') ?>"><?php the_field('email') ?></a>
                                </p>
                                <p class="branch-item address"><?php the_field('address') ?></p>
                            
                            </div>
                        
                        </div>

                    </aside>

                    <?php
                  }
                }
            ?>
        
        </section>

    </div>                 

</section>

<!-- C.2.7. END -->