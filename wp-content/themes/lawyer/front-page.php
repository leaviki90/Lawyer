<?php

get_header();
?>
<main>
    <?PHP get_template_part("template-parts/lead-section"); ?>
    
    <?php 
       $servicesTitle = get_field("homepage_services_title", get_option("page_on_front"));
       $numberOfServices = get_field("number_of_services", get_option("page_on_front"));
       $arg = array(
                "post_status" => "publish",
                "post_type" => "our-services",
                "posts_per_page" => $numberOfServices,
                "order" => "DESC",
                "orderby" => "date"
            );
            $services = new WP_Query($arg); 
           if($services ->have_posts()){
               ?>
     <!-- Services starts here -->
            <section class="services">
                <div class="container">
                    <h2 class="section-title text-center"><?php echo $servicesTitle?></h2>
                    <div class="services-list">
                        <div class="row justify-content-center">
                            <?php
                            
                            while($services ->have_posts()){
                   $services -> the_post();
                   get_template_part("template-parts/content-service");
               }
                            ?>
                            </div>
                    </div>
                </div>
            </section><!-- Services ends here -->
    <?php
               
           }
    
            wp_reset_postdata();
    ?>
            
            <?php 
            $teamTitle = get_field("homepage_team_title", get_option("page_on_front"));
            $numberOfMembers = get_field("number_of_members", get_option("page_on_front"));
            $homepageAllTeamLink = get_field("homepage_all_team_link", get_option("page_on_front"));
            $homepageAllTeamLinkText = get_field("homepage_all_team_link_text", get_option("page_on_front"));
            $teamarg = array(
                "post_status" => "publish",
                "post_type" => "team-members",
                "posts_per_page" => $numberOfMembers,
                "order" => "DESC",
                "orderby" => "date"
            );
            $teamMembers = new WP_Query($teamarg); 
            
            if($teamMembers ->have_posts()){
                ?>
             <!-- Team section starts here -->
            <section class="team bg-light">
                <div class="container">
                    <div class="section-header d-flex flex-wrap align-items-center justify-content-between mb-5">
                        <h2><?php echo $teamTitle; ?></h2>
                        <a href="<?php echo $homepageAllTeamLink ?>" class="text-primary text-uppercase fw-bold mb-5"><?php echo $homepageAllTeamLinkText ?></a>
                    </div> 
                    <div class="team-slider owl-carousel owl-theme">
                        <?php
                        while($teamMembers ->have_posts()){
                            $teamMembers ->the_post();
                            get_template_part("template-parts/content-team-slider");
                        }             
                        ?>
                     </div> <!-- Team-slider ends -->
                </div> <!-- Container ends -->
            </section> <!-- Team ends -->   
                        
            
            <?php
            }
            
            
            wp_reset_postdata();
            
            ?>
     <?php       get_template_part("template-parts/contact-data-flex");  ?>
</main>
<?php
get_footer();

