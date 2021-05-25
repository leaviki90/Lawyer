<?PHP 

if(is_home() && get_option("page_for_posts")){ //blog page
     $leadTitle = get_field("lead_subtitle", get_option("page_for_posts"));
    $leadDescription = get_field("lead_description", get_option("page_for_posts"));
    $leadImage = get_the_post_thumbnail_url(get_option("page_for_posts"));
} else { //page
    $leadTitle = get_field("lead_subtitle");
    $leadDescription = get_field("lead_description");
    $leadImage = get_the_post_thumbnail_url(get_the_ID());
}


?>

<!-- Hero starts -->
            <section class="hero" style="background-image: url(<?php echo $leadImage; ?>)">
                <div class="container">
                    <article class='hero-content animation slideRight' data-animation="slideRight">
                        <h1 class='hero-title'><?php echo $leadTitle; ?></h1>
                        <?PHP 
                        if(!empty($leadDescription)){
                            ?>
                        <p class="hero-description mb-5">  <?php echo $leadDescription; ?></p>
                        <?php
                        }             
                        ?>
                        <?php
                      if(get_field("has_link")){
                          ?>
                      <a href='<?php the_field("lead_link")?>' class='btn btn-primary rounded-pill'><?php the_field("lead_link_text")?></a>
                          
                       <?PHP
                       } 
                        
                        ?>
                    </article>
                </div>
            </section><!-- Hero ends -->
<?php 

