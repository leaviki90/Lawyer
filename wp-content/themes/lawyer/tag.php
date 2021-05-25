<?php

get_header();
?>
<main>
    <section class="hero" style="background-image: url(<?php the_field("taxonomy_image", get_queried_object()); ?>); min-height: 500px;">
        <div class='container'> 
            <h1 class='hero-title text-uppercase'><?php printf(__("Tag:", "lawyer")) ?> <?php single_tag_title(); ?></h1>
        </div>
    </section>
<?php
if (have_posts()):
    ?>
    <!-- News section starts here -->
            <section class="news">
                <div class="container">
    <?php
    while (have_posts()): the_post();
     get_template_part("template-parts/content-news");     
    endwhile;
    ?>
                    <?php get_template_part("template-parts/list-pagination"); ?>  
                    <?php //the_posts_pagination(array(
                   //   'screen_reader_text' => " ",
                   //   "mid_size" => 2,
                    //  "prev_text" => "&lang;",
                   //   "next_text" => "&rang;"
               //    )); ?> 
     
       </div> <!-- Container ends -->
    </section> <!-- News section ends  -->
   <?php
   else: get_template_part("template-parts/content-none");   
endif;
get_template_part("template-parts/info-section");
?>
</main>

<?php get_footer(); 
