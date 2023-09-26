


<!DOCTYPE html>
<html lang="en" class="httmmll">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ravagh-studio</title>
    <link rel="icon" href="img/Fevicon.png" type=" image/png">

   <?php wp_head(); ?>
</head>
<body>
<!--================Header Menu Area =================-->


    <section class="top-nav">

        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button'> </div>
        </label>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'top menu',
                    'menu_class' => 'top-bar'
                )
            );
            ?>


    </section>

<!--================Header Menu Area =================-->

<main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner">
                <div class="hero-banner__content">

                    <h1>Architecture & interior Designer</h1>
                    <h4>perfect Designer</h4>
                </div>
            </div>
        </div>
    </section>
</main>

