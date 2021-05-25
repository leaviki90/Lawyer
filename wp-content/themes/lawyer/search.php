<?php

get_header();
?>
<main>
    <section class="hero" style="background-image: url(<?php the_field("taxonomy_image", get_queried_object()); ?>); min-height: 500px;">
        <div class='container'> 
            <h1 class='hero-title text-uppercase'><?php printf(__("Search Result For:", "lawyer")) ?> <?php echo get_search_query(); ?></h1>
        </div>
    </section>
<div class="container">
    <form method="get" action="<?php echo home_url(); ?>">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name = "s" id="s" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-outline-secondary" type="submit" id="basic-addon2"><span class="fas fa-search"></span></button>
                                                </div>
                                            </div>
                                        </form>
</div>
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
?>
</main>

<?php get_footer(); 

