<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <!--Navbar Mobile-->
            <nav class="navbar navbar-light light-blue lighten-4">
                <!-- Collapse button -->
                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><?php get_template_part('menu'); ?></button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <?php wp_list_pages('&title_li='); ?>
                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
            <div class="site-name">
                <?php get_template_part('logo'); ?>
                <a class="name-txt" href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>

        </div>
    </div>
    <div class="nav-bar">
        <div class="container">
            <nav class="blog-nav-item">
                <?php wp_list_pages('&title_li='); ?>
            </nav>
        </div>
    </div>


    <div class="container">
