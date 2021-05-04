<!doctype html>
<html lang="<?PHP bloginfo("language"); ?>">
    <head>
        <title><?PHP bloginfo("name"); ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content='Violeta Petrović'>
        <meta name="description" content='Lawyer Project'>
        <meta name="keywords" content='lawyer, bootstrap, responsive'>

        <!-- IOS compatibility -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?PHP bloginfo("name"); ?>">
        <link rel="apple-touch-icon" href="<?PHP echo get_template_directory_uri(); ?>/frontend/apple-icon-144x144.png">

        <!--        Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="aplication-name" content="<?PHP bloginfo("name"); ?>">
        <link rel="icon" type="image/png" href="<?PHP echo get_template_directory_uri(); ?>/frontend/android-icon-192x192.png">

        <link rel="icon" type="image/ico" href="<?PHP echo get_template_directory_uri(); ?>/frontend/favicon.ico">
            
       <?PHP wp_head(); ?>
       
     
    </head>
    <body <?PHP body_class(); ?>>

        <header class="py-1 py-md-3 py-lg-6">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                   <?php get_template_part("template-parts/main-menu");  ?>
                    </div>
                </div>
            </nav>
        </header>

