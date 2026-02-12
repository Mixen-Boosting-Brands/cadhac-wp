<?php
/*
Template Name: Prensa
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_prensa",
]); ?>

<?php
$pagina_prensa = get_field("pagina_prensa", "option");

if (!$pagina_prensa) {
    return;
}

/* =========================
   Banner
========================= */

$banner = $pagina_prensa["banner"] ?? [];
$banner_top = $banner["texto_superior"] ?? "";
$banner_bottom = $banner["texto_inferior"] ?? "";
$banner_img = $banner["imagen"] ?? "";

/* =========================
   Logos
========================= */

$logos_group = $pagina_prensa["logos"] ?? [];

$logos = array_filter([
    $logos_group["logo_1"] ?? "",
    $logos_group["logo_2"] ?? "",
    $logos_group["logo_3"] ?? "",
    $logos_group["logo_4"] ?? "",
]);

/* =========================
   Tarjetas
========================= */

$tarjetas_group = $pagina_prensa["tarjetas"] ?? [];

$tarjetas = [];

for ($i = 1; $i <= 5; $i++) {
    $t = $tarjetas_group["tarjeta_" . $i] ?? null;

    if (!$t) {
        continue;
    }

    if (empty($t["icono"]) && empty($t["texto"]) && empty($t["archivo"])) {
        continue;
    }

    $tarjetas[] = $t;
}
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">

        <!-- =========================
             Header / Banner
        ========================= -->

        <div class="row mb-4">
            <div class="col-12">

                <?php if ($banner_top): ?>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($banner_top); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($banner_bottom): ?>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($banner_bottom); ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>

        <!-- =========================
             Logos
        ========================= -->

        <?php if (!empty($logos)): ?>

            <div class="row">

                <?php foreach ($logos as $logo): ?>

                    <div class="col-lg-3 mb-4 text-center">
                        <img
                            src="<?php echo esc_url($logo); ?>"
                            class="img-fluid"
                            alt="Logotipo"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <!-- =========================
             Tarjetas Press Kit
        ========================= -->

        <?php if (!empty($tarjetas)): ?>

            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5"
            >

                <?php foreach ($tarjetas as $index => $t):

                    $icono = $t["icono"] ?? "";
                    $texto = $t["texto"] ?? "";
                    $archivo = $t["archivo"] ?? "";
                    ?>

                    <div class="col">
                        <div
                            class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="<?php echo ($index + 1) * 100; ?>"
                        >
                            <div>

                                <?php if ($icono): ?>
                                    <img
                                        src="<?php echo esc_url($icono); ?>"
                                        class="ico"
                                        alt="Recurso de prensa"
                                        loading="lazy"
                                    />
                                <?php endif; ?>

                                <div class="card-body">

                                    <?php if ($texto): ?>
                                        <p class="card-text">
                                            <?php echo wp_kses_post($texto); ?>
                                        </p>
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
                <?php
                endforeach; ?>
            </div>

        <?php endif; ?>

        <!-- =========================
             Botón Comunicados
        ========================= -->

        <div class="row">
            <div class="col-12 text-center">
                <a
                    class="btn btn-primary btn-lg rounded-pill"
                    href="<?php echo esc_url(get_category_link(86)); ?>"
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
