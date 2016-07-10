<!-- C.2.4. SERVICES -->                    

<section class="section" id="section-services">

    <div class="container">

        <!-- C.2.4.1. Page Title -->

        <section class="section-header">
            <h2>services</h2>
            <p>Big House voices is Voice Over agency based in Cape Town. We offer voice over solutions for TV, Radio and Film.</p>
        </section>


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
            
                <li class="grid-item one-quarter">
                    
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