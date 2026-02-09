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
                            <a href="#"
                                >Noticias</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                >Historia</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                >Trabajo</a
                            >
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(2214),
                            ); ?>">Amores</a>
                        </li>
                        <li>
                            <a href="#"
                                >Mediateca</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                >Vacantes</a
                            >
                        </li>
                        <li>
                            <a href="#">Prensa</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(
                                get_permalink(5334),
                            ); ?>"
                                >Contacto</a
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
                            <a class="rounded-pill" href="#" target="_blank">
                                <i class="fa-solid fa-heart"></i> Necesito ayuda
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="rounded-pill" href="#" target="_blank">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                                Quiero ayudar
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
                        <div class="col-6 col-lg-9 my-auto text-end">
                            <nav class="d-none d-lg-block" role="navigation">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a class="<?php if (
                                            is_home()
                                        ): ?>active<?php endif; ?> rounded-pill" href="<?php echo esc_url(
     home_url(),
 ); ?>"
                                            >Inicio</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Noticias</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Historia</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Trabajo</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="<?php if (
                                            is_page(2214)
                                        ): ?>active bg-highlighted<?php endif; ?>rounded-pill" href="<?php echo esc_url(
    get_permalink(2214),
); ?>"
                                            >Amores</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Mediateca</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Vacantes</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="rounded-pill" href="#"
                                            >Prensa</a
                                        >
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="<?php if (
                                            is_page(5334)
                                        ): ?>active<?php endif; ?> rounded-pill" href="<?php echo esc_url(
     get_permalink(5334),
 ); ?>"
                                            >Contacto</a
                                        >
                                    </li>
                                </ul>
                            </nav>
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
            </section>
        </header>
