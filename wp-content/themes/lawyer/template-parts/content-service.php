<!-- Col 1 -->
<div class="col-12 col-sm-6 col-lg-5 mb-4 animation slideUp" data-animation="slideUp">
    <article class="service-item h-100">
        <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">
            <figure class="service-icon mb-0">
                <img src="<?php the_field("service_icon"); ?>" alt="alt"/>
            </figure>
            <h3 class="service-title mb-0"><?php the_title(); ?></h3>
        </a>
        <p class='service-desc'><?php the_field("service_description"); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class='read-more text-uppercase text-primary'><?php printf(__("read more", "lawyer")); ?></a>
    </article>
</div> <!-- Col 1 -->

