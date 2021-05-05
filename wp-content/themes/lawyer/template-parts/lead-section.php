<!-- Hero starts -->
            <section class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url($post -> ID); ?>)">
                <div class="container">
                    <article class='hero-content animation slideRight' data-animation="slideRight">
                        <h1 class='hero-title'><?php the_field("lead_subtitle"); ?></h1>
                        <?PHP 
                        if(!empty(get_field("lead_description"))){
                            ?>
                        <p class="hero-description mb-5">  <?php the_field("lead_description"); ?></p>
                        <?php
                        }             
                        ?>
                    </article>
                </div>
            </section><!-- Hero ends -->
