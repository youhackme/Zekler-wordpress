<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<header class="container-fluid navigation-block">
    <div class="row">
        <div class="logo-block col-md-2 col-md-offset-1">
            <a href="<?php echo get_home_url(); ?>">
                <img class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/build/img/logo.png"
                     alt="darktips.com logo">
            </a>
        </div>
        <div class="col-md-9">
            <div class="search-block pull-right">
                <form method="post">
                    <label for="search">
                        <span class=" icon-search" aria-hidden="true"> </span>
                    </label>
                    <input id="search" name="search" placeholder="Search.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <hr>
</header>