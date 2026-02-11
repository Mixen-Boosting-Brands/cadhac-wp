		<?php if (is_home()): ?>
            <?php
            $pagina_home = get_field("pagina_home", "option");
            $tarjetas = $pagina_home["tarjetas"] ?? null;
            ?>

            <?php if ($tarjetas): ?>

                <?php
                $texto_superior = $tarjetas["texto_superior"] ?? "";
                $texto_inferior = $tarjetas["texto_inferior"] ?? "";

                $t1 = $tarjetas["tarjeta_1"] ?? null;
                $t2 = $tarjetas["tarjeta_2"] ?? null;
                $t3 = $tarjetas["tarjeta_3"] ?? null;
                $t4 = $tarjetas["tarjeta_4"] ?? null;
                ?>

                <section class="pt-30 pb-60">
                    <div class="container-fluid">

                        <!-- Intro -->
                        <div class="row mb-4">
                            <div class="col-12">

                                <?php if (!empty($texto_superior)): ?>
                                    <h1 data-aos="fade-up" data-aos-duration="1000">
                                        <?php echo wp_kses_post(
                                            $texto_superior,
                                        ); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if (!empty($texto_inferior)): ?>
                                    <div
                                        data-aos="fade-up"
                                        data-aos-duration="1000"
                                        data-aos-delay="100"
                                    >
                                        <?php echo wp_kses_post(
                                            $texto_inferior,
                                        ); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>

                        <!-- Tarjetas -->
                        <div class="row mb-5">
                            <?php
                            $cards = [$t1, $t2, $t3, $t4];
                            $delay = 100;
                            ?>

                            <?php foreach ($cards as $card): ?>
                                <?php if ($card): ?>
                                    <div class="col-md-6 col-lg-3">
                                        <div
                                            class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                                            data-aos="fade-up"
                                            data-aos-duration="1000"
                                            data-aos-delay="<?php echo esc_attr(
                                                $delay,
                                            ); ?>"
                                        >
                                            <div>

                                                <?php if (
                                                    !empty($card["icono"])
                                                ): ?>
                                                    <img
                                                        src="<?php echo esc_url(
                                                            $card["icono"],
                                                        ); ?>"
                                                        class="ico"
                                                        alt=""
                                                        loading="lazy"
                                                        decoding="async"
                                                    />
                                                <?php endif; ?>

                                                <?php if (
                                                    !empty($card["texto"])
                                                ): ?>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <?php echo esc_html(
                                                                $card["texto"],
                                                            ); ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php $delay += 100; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="row">
                            <div class="col-12 text-end arrow-right">
                                <a href="#">
                                    <h2>
                                        Conoce nuestro trabajo
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (is_home()): ?>
            <?php $banner_amores = get_field("banner_amores", "option"); ?>

            <?php if ($banner_amores): ?>

                <?php
                $texto = $banner_amores["texto"] ?? "";
                $imagen = $banner_amores["imagen"] ?? "";
                ?>

                <?php if (!empty($imagen)): ?>
                    <section
                        class="cta py-60"
                        style="background-image:url('<?php echo esc_url(
                            $imagen,
                        ); ?>');"
                    >
                <?php else: ?>
                    <section class="cta py-60">
                <?php endif; ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100 arrow-right p-5 text-center">

                                        <?php if (!empty($texto)): ?>
                                            <div class="cta-text">
                                                <?php echo wp_kses_post(
                                                    $texto,
                                                ); ?>
                                            </div>
                                        <?php endif; ?>

                                        <a href="<?php echo esc_url(
                                            get_permalink(2214),
                                        ); ?>">
                                            <h2>
                                                Conoce más
                                                <i class="fa-solid fa-arrow-right-long"></i>
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php endif; ?>
        <?php endif; ?>

        <?php get_template_part("template-parts/components/necesitas-ayuda"); ?>

        <footer class="pt-60 pb-30">
            <div class="container-fluid">
                <div class="row mb-3 mb-md-5">
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        La comunidad <span>organizada</span><br />
                        transforma realidades
                    </h1>
                </div>
                <div class="row mb-3 mb-md-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="col-md-7 mb-2 mb-md-0">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-2 mb-md-4">Menú</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <nav>
                                            <ul
                                                class="list-unstyled mb-0 mb-md-4"
                                            >
                                                <li>
                                                    <a href="<?php echo esc_url(
                                                        home_url(),
                                                    ); ?>">Inicio</a>
                                                </li>
                                                <li>
                                                    <a href="#">Noticias</a>
                                                </li>
                                                <li>
                                                    <a href="#">Historia</a>
                                                </li>
                                                <li>
                                                    <a href="#">Trabajo</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_url(
                                                        get_permalink(2214),
                                                    ); ?>">Amores</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-6">
                                        <nav>
                                            <ul class="list-unstyled mb-md-0">
                                                <li>
                                                    <a href="#">Mediateca</a>
                                                </li>
                                                <li>
                                                    <a href="#">Vacantes</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_url(
                                                        get_permalink(8693),
                                                    ); ?>">Prensa</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_url(
                                                        get_permalink(5334),
                                                    ); ?>">Contacto</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 offset-md-2">
                                <h5 class="mb-2 mb-md-4">Contacto</h5>
                                <?php get_template_part(
                                    "template-parts/contact/footer-contact",
                                ); ?>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-5 text-center text-md-end align-self-end mb-3 mb-md-0"
                    >
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                class="logo-footer img-fluid"
                                alt=""
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-footer-light@2x.png"
                                data-theme-light="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-footer-light@2x.png"
                                data-theme-dark="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/logo-footer-dark@2x.png"
                            />
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            <small>
                                <a href="<?php echo esc_url(
                                    get_permalink(2931),
                                ); ?>">Aviso de Privacidad</a> | Design by:
                                <a href="https://mixen.mx/" target="_blank"
                                    >Mixen</a
                                >
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

        <script src="<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/js/app.bundle.js" defer></script>
    </body>
</html>
