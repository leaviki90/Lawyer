<?php
/*
 * Template Name: Services Page
 */

get_header();
?>
<main>
    <?PHP get_template_part("template-parts/lead-section"); ?>
    <!-- Services starts here -->
    <section class="services bg-info">
        <div class="container">
            <?php
            the_content();
            $arg = array(
                "post_status" => "publish",
                "post_type" => "our-services",
                "posts_per_page" => -1,
                "order" => "DESC",
                "orderby" => "date"
            );
            $services = new WP_Query($arg);

            if ($services->have_posts()) {
                ?>
                <div class="services-list">
                    <div class="row justify-content-center">
                        <?PHP
                        while ($services->have_posts()) {
                            $services->the_post();
                            get_template_part("template-parts/content-service");
                        }
                        ?>
                    </div>
                    </section><!-- Services ends here -->
                    <?PHP
                } else {
                    get_template_part("template-parts/content-none");
                }

                wp_reset_postdata();
                ?>
                </main>

                <?php get_footer(); ?>