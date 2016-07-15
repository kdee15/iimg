<!-- C.3. ARTISTS MODAL WINDOWS -->

<section class="toggle-content modal" id="team<?php the_id(); ?>">

    <div class="container">
        
        <div class="modalClose toggle-div" name="team<?php the_id(); ?>">
            <span class="og-close">X</span>
        </div>
        
        <section class="modal__body v-align">
            
            <!-- C.3.1. The Content ------------------------ -->
            
            <img src="<?php the_field('photo') ?>" alt="<?php the_title(); ?>" class="modal_img" />
            <h2><?php the_title() ?></h2>
            <h3><?php the_field('title') ?></h3>
            <div class="copy"><?php the_content() ?></div>
            
            <ul class="social-media">
                <li class="soc-med">
                    <a class="imgLink" href="mailto:<?php the_field('email') ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-twitter.svg" alt="Twitter" class="icon tw">
                    </a>
                </li>
                <li class="soc-med">
                    <a class="imgLink" href="<?php the_field('linkedin') ?>" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/icon-linkedIn.svg" alt="Linked In" class="icon li">
                    </a>
                </li>

            </ul>

            <!-- C.3.1. END -------------------------------- --> 
            
        </section>
        
    </div>

</section>

<!-- C.3. END -->