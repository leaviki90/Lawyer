<?php

/*
 * Template Name: Page with sidebar
 */

get_header();
?>
<main>
 <?php
if(have_posts()){
    while(have_posts()){
        the_post();
        ?>

    <?PHP get_template_part("template-parts/lead-section"); ?>

            <!-- Page-content starts here -->
            <section class="page-content">
                <div class="container">
                    <!-- Row starts here -->
                    <div class="row justify-content-between align-items-start">
                        <!-- Col 1 starts -->
                        <div class="col-12 col-md-5 mb-4 mb-md-0">
                            <figure class="page-image h-100 animation slideRight" data-animation="slideRight">
                                <img src="<?PHP the_field("sidebar_image"); ?>" alt=""/>
                            </figure>
                            
                        </div><!-- Col 1 ends -->
                        <!-- Col 2 starts -->
                        <div class="col-12 col-md-6">
                            <aside>
                                <article class="page-item h-100 animation slideLeft" data-animation="slideLeft">
                                            <?PHP the_content(); ?> 
                                        </article>
<!--                                <form method="get" action="<?php echo home_url(); ?>">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name = "s" id="s" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-outline-secondary" type="submit" id="basic-addon2"><span class="fas fa-search"></span></button>
                                                </div>
                                            </div>
                                        </form>-->
                                <?php //get_sidebar(); ?>
                            </aside>
       
                        </div>
                    </div>
                </div>
            </section><!-- Page-content ends here -->

        <?php
    }//end while
}//end if


?>
</main>

<?php get_footer();

