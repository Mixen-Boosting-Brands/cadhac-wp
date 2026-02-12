<?php
/*
Template Name: Prensa
*/
get_header(); ?>

<?php
$pagina_prensa = get_field("pagina_prensa", "option");

if (!$pagina_prensa) {
    return;
}

/* =====================================================
   BANNER
===================================================== */

$banner = $pagina_prensa["banner"] ?? null;

$banner_texto_superior = $banner["texto_superior"] ?? "";
$banner_texto_inferior = $banner["texto_inferior"] ?? "";
$banner_imagen = $banner["imagen"] ?? "";
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <!-- =========================
             BANNER TEXTOS
        ========================== -->
        <div class="row mb-4">
            <div class="col-12">

                <?php if ($banner_texto_superior): ?>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($banner_texto_superior); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($banner_texto_inferior): ?>
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($banner_texto_inferior); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- =========================
             BANNER IMAGEN
        ========================== -->
        <?php if ($banner_imagen): ?>
            <div class="row mb-5">
                <div class="col-12">
                    <img
                        src="<?php echo esc_url($banner_imagen); ?>"
                        class="img-fluid rounded-5 w-100"
                        alt="Banner prensa"
                        loading="eager"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    />
                </div>
            </div>
        <?php endif; ?>

        <?php
        /* =====================================================
           TARJETAS — TEXTOS SUPERIORES
        ===================================================== */

        $tarjetas_group = $pagina_prensa["tarjetas"] ?? null;

        if (!$tarjetas_group) {
            return;
        }

        $texto_sup = $tarjetas_group["texto_superior"] ?? "";
        $texto_inf = $tarjetas_group["texto_inferior"] ?? "";
        ?>

        <!-- =========================
             PRESS KIT INTRO
        ========================== -->
        <div class="row mb-4">
            <div class="col-12">

                <?php if ($texto_sup): ?>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($texto_sup); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($texto_inf): ?>
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inf); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <?php
        $logos_group = $pagina_prensa["logos"] ?? null;

        if ($logos_group):
            $logos = [
                $logos_group["logo_1"] ?? "",
                $logos_group["logo_2"] ?? "",
                $logos_group["logo_3"] ?? "",
                $logos_group["logo_4"] ?? "",
            ];

            $logos = array_filter($logos);

            if (!empty($logos)): ?>

                <div class="row mb-5">

                    <?php
                    $delay = 100; // Delay inicial

                    foreach ($logos as $logo): ?>

                        <div
                            class="col-lg-3 col-md-4 col-6 mb-4 text-center"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo esc_attr($delay); ?>"
                        >
                            <img
                                src="<?php echo esc_url($logo); ?>"
                                class="img-fluid prensa-logo"
                                alt="Logotipo"
                                loading="lazy"
                                decoding="async"
                            />
                        </div>

                    <?php $delay += 100;endforeach;

                // Incremento igual que cards
                ?>

                </div>

        <?php endif;
        endif;
        ?>

        <?php
        /* =====================================================
           CARDS PRESS KIT
        ===================================================== */

        $cards = [
            $tarjetas_group["tarjeta_1"] ?? null,
            $tarjetas_group["tarjeta_2"] ?? null,
            $tarjetas_group["tarjeta_3"] ?? null,
            $tarjetas_group["tarjeta_4"] ?? null,
            $tarjetas_group["tarjeta_5"] ?? null,
        ];

        $cards = array_filter($cards);

        if (!empty($cards)): ?>

            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5"
            >

                <?php
                $delay = 100;

                foreach ($cards as $card):

                    $icono = $card["icono"] ?? "";
                    $texto = $card["texto"] ?? "";
                    $archivo = $card["archivo"] ?? "";
                    ?>

                    <div class="col">
                        <div
                            class="card card-ico-center rounded-5 h-100"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo esc_attr($delay); ?>"
                        >
                            <div>

                                <?php if ($icono): ?>
                                    <img
                                        src="<?php echo esc_url($icono); ?>"
                                        class="ico"
                                        alt=""
                                        loading="lazy"
                                    />
                                <?php endif; ?>

                                <div class="card-body">

                                    <?php if ($texto): ?>
                                        <div class="card-text mb-3">
                                            <?php echo wp_kses_post($texto); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($archivo): ?>
                                        <a
                                            class="btn btn-primary rounded-pill"
                                            href="<?php echo esc_url(
                                                $archivo,
                                            ); ?>"
                                            download
                                        >
                                            <i class="fa-solid fa-circle-arrow-down"></i>
                                            Descargar
                                        </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php $delay += 100;
                endforeach;
                ?>

            </div>

        <?php endif;
        ?>

        <!-- =========================
             CTA
        ========================== -->
        <div class="row">
            <div class="col-12 text-center">
                <a
                    class="btn btn-primary btn-lg rounded-pill"
                    href="<?php echo esc_url(get_category_link(86)); ?>"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Ver más comunicados
                </a>
            </div>
        </div>

    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h1
                    class="lh-1"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Contacto <span>para</span><br />
                    medios
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Para solicitudes de entrevista, información
                    adicional o aclaraciones, favor de contactar a:
                </p>
                <?php get_template_part(
                    "template-parts/contact/card-contact",
                ); ?>
            </div>
            <div class="col-lg-6">
                <div
                    class="arrow-right home-image container-image bp-center rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-prensa.png&quot;);
                    "
                    data-aos="fade-up"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                ></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
