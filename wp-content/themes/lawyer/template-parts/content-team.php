<!-- Col 1 starts -->
<div class="col-12 col-xm-6 col-md-4 col-lg-3 mb-7">
    <article class="team-member-item h-100">
        <figure class="position-relative">
            <a href="<?php the_permalink();?>" class="image-placeholder size-3by4">
                <?php the_post_thumbnail("team-list"); ?>
            </a>
            <a href="<?php the_field("team_member_link"); ?>" target="_blank" class="linkedin fab fa-linkedin-in text-white"></a>
        </figure>
        <h2 class="team-member-name">
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h2>
        <p class="team-member-position text-primary"><?php the_field("team_member_position"); ?></p>
    </article>
</div> <!-- Col 1 ends -->

