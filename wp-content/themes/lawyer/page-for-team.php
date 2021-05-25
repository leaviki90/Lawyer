<?php
/*
 * Template Name: Team Page
 */

get_header();
?>
<main>
    <?PHP get_template_part("template-parts/lead-section"); ?>
    <!-- Team-members section starts here -->
    <section class="team-members">
        <div class="container">
            <?php
            the_content();
            $arg = array(
                "post_status" => "publish",
                "post_type" => "team-members",
                "posts_per_page" => -1,
                "order" => "DESC",
                "orderby" => "date"
            );
            $teamMembers = new WP_Query($arg);
            if ($teamMembers->have_posts()) {
                ?>
                <div class="row">
                    <?php
                    while ($teamMembers->have_posts()) {
                        $teamMembers->the_post();
                        get_template_part("template-parts/content-team");
                    }
                    ?>
                </div>
                <?php
            } else {
                get_template_part("template-parts/content-none");
            }

            wp_reset_postdata();
            ?>
        </div> <!-- Container ends -->
    </section>
    <?PHP get_template_part("template-parts/contact-data-flex"); ?>
</main>

<?php get_footer(); ?>
