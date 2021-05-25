<?php

/*
 * Template Name: Contact Page
 */

get_header();
?>
<main>
    <!-- Hero starts -->
    <section class="hero mb-5" style="background-image: url('<?php the_post_thumbnail_url(get_the_ID()); ?>')">
                <div class="container">
                    <article class='hero-content animation slideRight' data-animation="slideRight">
                        <h1 class='hero-title'><?php the_field("lead_subtitle"); ?></h1>
                        <?php get_template_part("template-parts/contact-data"); ?>
                    </article>
                </div>
            </section><!-- Hero ends -->
            <!-- Contact section starts -->
            <section class="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-11 col-md-10 col-lg-6">
                            <form class="contact-form text-center" method="post" action="">
                                <?php the_content(); ?>                               
                            </form>
                        </div>
                    </div>
                </div>
            </section><!-- Contact section ends -->
    <!-- Contact-map starts here -->
            <section class="contact-map">
                <div class="ratio ratio-21x9">
                    <?php the_field("contact_map"); ?>
                </div>
            </section><!-- Contact-map ends here -->
</main>
<?php
get_footer();

