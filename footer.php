<!-- C.2.8. FOOTEND OF PAGE -->

<footer id="footend">
    
    <div class="container">
        
        <a href="#form" class="email-us">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon--email.svg" alt="Let us contact you" class="icon">
        </a>
        <section class="form" id="form">
            <aside class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon--email.svg" alt="Let us contact you" class="form-logo">
            </aside>
            <aside class="contact-form">
                <h3>Let us contact you</h3>
                <?php dynamic_sidebar( 'contact-widget' ); ?>
            </aside>

        </section>
        <h6>&copy; Copyright 2016 IIMG. Site by <a href="http://www.kdee.co.za" target="_blank">KDee</a>.</h6>
        
    </div>
    
</footer>

<!-- C.2.8. END --> 