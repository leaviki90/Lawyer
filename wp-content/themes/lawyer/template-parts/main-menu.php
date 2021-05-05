<?PHP
if (has_custom_logo()):
    the_custom_logo();
else:
    ?>
    <a class="navbar-brand" href="<?PHP echo get_home_url(); ?>">
        <img src="<?PHP echo get_template_directory_uri(); ?>/frontend/img/logo.png" alt=""/>
    </a>
<?PHP
endif;
?>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
</button>
<div class="collapse navbar-collapse" id="main-menu">
    <?php
//                              wp_nav_menu(array(
//                                 "theme_location" => "main-menu",
//                                  "container" => "",
//                                  "menu_class" => "navbar-nav ms-auto mb-2 mb-md-0",
//                                  "depth" => 2
//                               ));      kad imamo samo jedan meni, bez podmenija

    $menuLocations = get_nav_menu_locations();
    $topMenuID = $menuLocations["main-menu"];
    $topMenuItems = wp_get_nav_menu_items($topMenuID);

    if (!empty($topMenuItems)):
        ?>
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <?PHP
            $currentUrl = home_url($wp->request) . "/";
            foreach ($topMenuItems as $topMenuItem) {
                //active class

                $activeClass = "";
                if ($currentUrl == $topMenuItem->url) {
                    $activeClass = "active";
                }
                if ($topMenuItem->menu_item_parent == 0) {
                    $topMenuItemID = $topMenuItem->ID;
                    //   var_dump($topMenuItemID);
                    $subItems = array();
                    foreach ($topMenuItems as $subItem) {
                        if ($topMenuItemID == $subItem->menu_item_parent) {
                            $subItems[] = $subItem;
                            if ($currentUrl == $subItem->url) {
                                $activeClass = "active";
                            }
                        }
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?PHP echo $activeClass; ?>" href="<?PHP echo $topMenuItem->url; ?>">
                            <?PHP echo $topMenuItem->title; ?>
                            <?PHP
                            if (!empty($subItems)) {
                                ?>
                                <span class="fas fa-plus"></span>
                                <?PHP
                            }
                            ?>
                        </a>
                        <?PHP
                        if (!empty($subItems)) {
                            ?>
                            <ul class="submenu">
                                <?PHP
                                foreach ($subItems as $subMenuItem) {
                                    ?>    
                                    <li>
                                        <a class="<?PHP echo $activeClass; ?>" href="<?PHP echo $subMenuItem->url; ?>"><?PHP echo $subMenuItem->title; ?></a>

                                    </li>
                                    <?PHP
                                }
                                ?>
                            </ul>
                            <?PHP
                        }
                        ?>
                    </li>
                    <?PHP
                }
            }
            ?>
        </ul>
        <?php
    endif;
    
?>
</div>
