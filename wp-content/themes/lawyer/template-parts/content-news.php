<!-- Article 1 starts here -->
<article class="news-item animation slideUp" data-animation="slideUp">
    <div class="row justify-content-between align-items-start">
        <!-- Col 1 starts -->
        <div class="col-12 col-md-7 col-lg-6 mb-4 mb-md-0">
            <h2 class="news-item-title mb-3"> 
                <a href="<?php the_permalink(); ?>" class="d-block">
                    <?PHP the_title(); ?>
                </a>
            </h2>
            <p class="news-item-desc mb-3">
               <?php the_field("blog_short_description"); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="read-more text-primary text-uppercase"><?php printf(__("read more", "lawyer")); ?></a>
        </div> <!-- Col 1  -->

        <!-- Col 2 starts -->
        <div class="col-12 col-md-5">
            <a href="<?php the_permalink(); ?>" class="d-block news-item-image image-placeholder ">
                <?php the_post_thumbnail("blog-thumb"); ?>
            </a> 
        </div>
    </div> <!-- Row ends -->
</article> <!-- Article 1 ends here -->

