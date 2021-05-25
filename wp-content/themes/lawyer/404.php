<?php

get_header();
?>
<main>
    <section class="no-pages">
        <div class="container">
            <figure class="mb-4">
                <img src="<?PHP echo get_template_directory_uri(); ?>/frontend/img/404.jpg" alt=""/>
            </figure>
            <div class="text-center">
                <a class="btn btn-primary" href="<?php echo home_url(); ?>"><?php printf(__("Back to Home", "lawyer")); ?></a>
            </div>
        </div>
    </section>
    
</main>
<?php
get_footer();

