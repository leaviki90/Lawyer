<!-- Team item 1 -->
<div class="team-item">
    <div class="row">
        <!-- Col 1 starts -->
        <div class="col-12 col-sm-6">
            <article class="team-item-content h-100 d-flex flex-column">
                <h3 class="team-item-name">
                    <a href="<?php the_permalink(); ?>" class="text-primary"><?php the_title(); ?></a>
                </h3>
                <p class="short-bio">
                    <?php echo substr(get_the_content(), 0, 100); ?>
                </p>
                <a href="<?php the_field("team_member_link") ?>" target="_blank" class="fab fa-linkedin-in mt-auto"></a>
            </article>
        </div> <!-- Col 1 ends -->

        <!-- Col 2 starts -->
        <div class="col-12 col-sm-6">
            <a href="<?php the_permalink(); ?>" class="team-item-image d-block mb-0">
                <?php the_post_thumbnail("team-list"); ?>
            </a>
        </div><!-- Col 2 ends -->
    </div>
</div>
