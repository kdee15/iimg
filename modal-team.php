<!-- C.3. ARTISTS MODAL WINDOWS -->

<section class="toggle-content modal" id="team<?php the_id(); ?>">

    <div class="container">
        
        <div class="modalClose toggle-div" name="team<?php the_id(); ?>">
            <span class="og-close">X</span>
        </div>
        
        <section class="modal__body v-align">
            
            <!-- C.3.1. The Content ------------------------ -->
            
            <img src="<?php the_field('photo') ?>" alt="<?php the_title(); ?>" class="modal_img" />
            <h2><?php the_field('name') ?></h2>

            <!-- C.3.1. END -------------------------------- --> 
            
        </section>
        
    </div>

</section>

<!-- C.3. END -->