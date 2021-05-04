<?php
$menuLocations = get_nav_menu_locations();
$socialMenuID = $menuLocations["social"];
$socialMenuItems = wp_get_nav_menu_items($socialMenuID);
if (!empty($socialMenuItems)) {
    ?>
    <div class="social text-center">
        <?php
        foreach ($socialMenuItems as $socialMenuItem) {
            ?>

            <a href="<?php echo $socialMenuItem->url; ?>" target="_blank" class="fab fa-<?php echo strtolower($socialMenuItem->title); ?>"></a>
            <?php
        }
        ?>
    </div>
    <?PHP
}

