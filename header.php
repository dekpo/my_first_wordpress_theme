<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Wordpress Theme</title>
<?php wp_head() ?>
</head>
<body class="is-preload homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">

                <!-- Logo -->
                <div id="logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                    <span>by HTML5 UP</span>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'container'       => false,
                            'theme_location' => 'primary'
                        )
                    );
                    ?>
                </nav>
            </header>
        </div>