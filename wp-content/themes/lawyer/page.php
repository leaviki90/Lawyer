<?php
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
                        <div class="col-12 col-md-7 col-lg-6">
                            <article class="page-item h-100 animation slideLeft" data-animation="slideLeft">
                                <?PHP the_content(); ?> 
                            </article>
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

