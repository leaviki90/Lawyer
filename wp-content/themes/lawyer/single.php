<?php

get_header();
?>
<main>

<?php
//single.php

if (have_posts()):
    while (have_posts()): the_post();
        ?>
         <!-- Hero starts -->
         <section class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_option("page_for_posts")); ?>')">
                <div class="container">
                    <article class='hero-content animation slideRight' data-animation="slideRight">
                        <div class="news-info d-flex flex-wrap align-items-center mb-2">
                            <div class="news-categories">
                                <?php the_category(" | "); ?>
                            </div>
                            <span> | </span>
                            <p class="news-date mb-0"><?php the_date(); ?></p>
                        </div>
                        <h1 class='hero-title'><?php the_title(); ?></h1>
                        <p class='hero-description mb-5'><?php the_field("blog_short_description"); ?></p>
                        
                    </article>
                </div>
            </section><!-- Hero ends -->
     <!-- Single-news section starts here -->
            <section class="single-news">
                <div class="container">
                    <article class="single-news-content">
                        <?php the_content(); ?>
                         <?php $tags = get_the_tags();
                          if(!empty($tags)){
                              ?>
                        <div class="tags">
                            <p class="tags-label text-primary fw-bold"><?php printf(__("Tags:", "lawyer"));  ?></p>
                            <div class="tag-list">
                                <?php
                                   foreach ($tags as $tag){
                                       ?>
                                <a href="<?php echo get_tag_link($tag -> term_id); ?>" class="btn btn-light text-primary text-lowercase fw-normal"><?php echo $tag -> name ?></a>
                                <?php
                               }
                             ?>    
                             </div>
                        </div> <!-- Tags ends -->
                        <?php
                        }    
                      ?>        
                    </article> <!-- Single-news-content ends -->
                </div> <!-- Container ends -->
            </section><!-- Single-news section ends here -->
    
    
    
        <?php
    endwhile;
endif;
?>
<?PHP get_template_part("template-parts/info-section"); ?>
</main>

<?php get_footer();