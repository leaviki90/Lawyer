<?php

get_header();

?>
<main>
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
    <!-- single-team section starts here -->
            <section class="single-team">
                <div class="container">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <p class="team-member-position text-primary"><?php the_field("team_member_position"); ?></p>
                    <!-- Row starts -->
                    <div class="row align-items-start">
                        <!-- Col 1 starts -->
                        <div class="col-12 col-md-6 mb-4 mb-md-0">
                            <article class="team-member-bio h-100 pe-md-2">
                                <?php the_content(); ?>
                            </article>
                        </div><!-- Col 1 ends -->
                        <!-- Col 2 starts -->
                        <div class="col-12 col-md-6">
                            <figure class="image-placeholder size-3by4 h-100">
                                <?php the_post_thumbnail("full"); ?>
                            </figure>
                        </div>
                    </div><!-- Row ends -->
                </div><!-- Container ends -->
            </section> 
    <?php
        }
        get_template_part("template-parts/single-pagination");
    }else {
        get_template_part("template-parts/content-none");
    }
    
    
    
    ?>
     
           <?PHP get_template_part("template-parts/info-section"); ?>
</main>
<?php
get_footer();


