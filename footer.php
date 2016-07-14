<!-- C.2.8. FOOTEND OF PAGE -->

<footer id="footend">
    
    <div class="container">
        
        <a href="#page-home" class="bob-backUp">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/bob-footerArrow.png" alt="back to top" class="bob-footerArrow">
            </figure>
        </a>
        <section class="form">
            <h3>Let us contact you</h3>
            <?php dynamic_sidebar( 'contact-widget' ); ?>
        </section>
        <h6>&copy; Copyright 2016 IIMG. Site by <a href="http://www.kdee.co.za" target="_blank">KDee</a>.</h6>
        
    </div>
    
</footer>

<!-- C.2.8. END --> 