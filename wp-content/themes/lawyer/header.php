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

        <link rel="icon" type="<?PHP echo get_template_directory_uri(); ?>/frontend/image/ico" href="favicon.ico">
            
       <?PHP wp_head(); ?>
       
     
    </head>
    <body <?PHP body_class(); ?>>

        <header class="py-1 py-md-3 py-lg-6">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="<?PHP echo get_home_url();  ?>">
                        <img src="<?PHP echo get_template_directory_uri(); ?>/frontend/img/logo.png" alt=""/>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="services.html">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.html">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.html">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

