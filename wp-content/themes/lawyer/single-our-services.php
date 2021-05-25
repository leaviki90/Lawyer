<?php

get_header();

?>
<main>
    <?php 
    if(have_posts()){
        ?>
    <!-- Hero starts -->
    <section class="hero" style="background-image: url('<?PHP echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
                <div class="container">
                    <article class='hero-content animation slideRight' data-animation="slideRight">
                        <h1 class='hero-title'><?php the_title(); ?></h1>
                        <p class='hero-description mb-5'><?php the_field("service_description"); ?>
                        </p>
                    </article>
                </div>
            </section><!-- Hero ends -->
    
    <?php
        while(have_posts()){
            the_post();
            ?>
    <!-- Page-content starts here -->
            <section class="page-content">
                <div class="container">
                    <!-- Row starts here -->
                    <div class="row justify-content-between align-items-start">
                        <!-- Col 1 starts -->
                        <div class="col-12 col-md-5 mb-4 mb-md-0">
                            <figure class="page-image h-100 animation slideRight" data-animation="slideRight">
                                <img src="<?php the_field("sidebar_image"); ?>" alt=""/>
                            </figure>
                        </div><!-- Col 1 ends -->
                        <!-- Col 2 starts -->
                        <div class="col-12 col-md-7 col-lg-6">
                            <article class="page-item h-100 animation slideLeft" data-animation="slideLeft">
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </div>
                </div>
            </section><!-- Page-content ends here -->

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


