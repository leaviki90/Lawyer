<?php

get_header();
?>
<main>
<?php
get_template_part("template-parts/lead-section");
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
get_template_part("template-parts/contact-data-flex");
?>
</main>

<?php get_footer(); 
