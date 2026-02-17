<!doctype html>
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo("description"); ?>">

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name",
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo(
            "name",
        ); ?>" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url(),
                ); ?>">
                    <img
                        class="logo img-fluid"
                        alt=""
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-light="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-light@2x.png"
                        data-theme-dark="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/logo-dark@2x.png"
                    />
                </a>
                <nav role="navigation">
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a href="#"
                                >Inicio</a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(8862),
                            ); ?>"
                                ><?php echo esc_html(get_the_title(8862)); ?></a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(get_permalink(373)); ?>"
                                ><?php echo esc_html(get_the_title(373)); ?></a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(8900),
                            ); ?>"
                                ><?php echo esc_html(get_the_title(8900)); ?></a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(2214),
                            ); ?>"><?php echo esc_html(
    get_the_title(2214),
); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(9002),
                            ); ?>"
                                ><?php echo esc_html(get_the_title(9002)); ?></a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(4724),
                            ); ?>"
                                ><?php echo esc_html(get_the_title(4724)); ?></a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(8693),
                            ); ?>"><?php echo esc_html(
    get_the_title(8693),
); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(5334),
                            ); ?>"
                                ><?php echo esc_html(get_the_title(5334)); ?></a
                            >
                        </li>
                    </ul>
                </nav>
                <a href="<?php echo esc_url(
                    get_permalink(5334),
                ); ?>" class="anchor btn btn-primary rounded-pill mb-4"
                    >Contáctanos</a
                >
                <?php get_template_part(
                    "template-parts/contact/header-contact",
                ); ?>
            </div>
        </div>

        <header id="navbar">
            <section id="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-9">
                            <a class="rounded-pill" href="#necesitas-ayuda">
                                <i class="fa-solid fa-heart"></i> Necesito ayuda
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="rounded-pill" href="<?php echo esc_url(
                                get_permalink(5329),
                            ); ?>">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                                <?php if (is_home()): ?>
                                    Quiero ayudar
                                <?php else: ?>
                                    Donar
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-lg-3 my-auto">
                            <a href="<?php echo esc_url(home_url()); ?>">
                                <img
                                    id="logo-navbar"
                                    class="logo img-fluid"
                                    alt=""
                                    src="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/logo-light@2x.png"
                                    data-theme-light="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/logo-light@2x.png"
                                    data-theme-dark="<?php echo esc_url(
                                        get_template_directory_uri(),
                                    ); ?>/assets/images/logo-dark@2x.png"
                                />
                            </a>
                        </div>
                        <div class="col-6 col-lg-9 my-auto">
                            <div class="nav-wrapper d-flex align-items-center justify-content-end">
                                <!-- Navigation -->
                                <nav class="d-none d-lg-block" role="navigation">

                                    <?php wp_nav_menu([
                                        "theme_location" => "primary_menu",
                                        "container" => false,
                                        "menu_class" => "list-inline mb-0",
                                        "fallback_cb" => false,
                                        "walker" => new CADHAC_Header_Walker(),
                                    ]); ?>

                                </nav>

                                <!-- Search -->
                                <div class="header-search d-inline-block ms-3">

                                    <form
                                        role="search"
                                        method="get"
                                        class="search-form"
                                        action="<?php echo esc_url(
                                            home_url("/"),
                                        ); ?>"
                                    >

                                        <input
                                            type="search"
                                            class="search-field"
                                            placeholder="Buscar…"
                                            value="<?php echo get_search_query(); ?>"
                                            name="s"
                                        />

                                        <button type="submit" class="search-submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>

                                    </form>

                                </div>

                                <!-- Burger -->
                                <a
                                    id="mburger"
                                    class="d-lg-none"
                                    href="javascript:void(0)"
                                >
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
