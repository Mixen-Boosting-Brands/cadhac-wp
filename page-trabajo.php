<?php
/*
Template Name: Trabajo
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_trabajo",
]); ?>

<?php
/* =========================
   CF → pagina_trabajo
========================= */

$pagina_trabajo = get_field("pagina_trabajo", "option");

if (!$pagina_trabajo) {
    return;
}

$tarjetas = $pagina_trabajo["tarjetas"] ?? null;

if (!$tarjetas) {
    return;
}

/* =========================
   Textos
========================= */

$texto_superior = $tarjetas["texto_superior"] ?? "";
$texto_inferior = $tarjetas["texto_inferior"] ?? "";

/* =========================
   Tarjetas
========================= */

$items = [
    $tarjetas["tarjeta_1"] ?? null,
    $tarjetas["tarjeta_2"] ?? null,
    $tarjetas["tarjeta_3"] ?? null,
    $tarjetas["tarjeta_4"] ?? null,
];

/* Filtrar vacías */
$items = array_filter($items);

if (empty($items)) {
    return;
}
?>

<section class="pt-60 pb-30">

    <div class="container-fluid">

        <!-- =========================
             Header
        ========================== -->
        <div class="row mb-4">

            <div class="col-12 text-center">

                <?php if ($texto_superior): ?>
                    <h1
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($texto_inferior): ?>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </p>
                <?php endif; ?>

            </div>

        </div>

        <!-- =========================
             Cards
        ========================== -->
        <div class="row mb-5">

            <?php
            $delay = 100;

            foreach ($items as $item):

                $icono = $item["icono"] ?? "";
                $texto = $item["texto"] ?? "";
                ?>

                <div class="col-md-6 col-lg-3">

                    <div
                        class="card card-ico-center rounded-5 mb-4 mb-lg-0"
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
                                    decoding="async"
                                />
                            <?php endif; ?>

                            <?php if ($texto): ?>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php echo wp_kses_post($texto); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php $delay += 100;
            endforeach;
            ?>

        </div>

    </div>

</section>

<?php
/* =========================
   CF → pagina_trabajo
========================= */

$pagina_trabajo = get_field("pagina_trabajo", "option");

if (!$pagina_trabajo) {
    return;
}

$bloque_2 = $pagina_trabajo["bloque_2"] ?? null;

if (!$bloque_2) {
    return;
}

/* =========================
   Textos superiores
========================= */

$texto_superior = $bloque_2["texto_superior"] ?? "";
$texto_inferior = $bloque_2["texto_inferior"] ?? "";

/* =========================
   Tarjetas
========================= */

$tarjetas = [
    $bloque_2["tarjeta_1"] ?? null,
    $bloque_2["tarjeta_2"] ?? null,
    $bloque_2["tarjeta_3"] ?? null,
    $bloque_2["tarjeta_4"] ?? null,
];

/* Filtrar vacías */
$tarjetas = array_filter($tarjetas);

if (empty($tarjetas)) {
    return;
}
?>

<section class="py-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">

                <?php if ($texto_superior): ?>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($texto_inferior): ?>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>

        <!-- Cards -->
        <div class="row mb-5">

            <?php
            $delay = 0;

            foreach ($tarjetas as $tarjeta):

                $imagen = $tarjeta["imagen"] ?? "";
                $titulo = $tarjeta["titulo"] ?? "";
                $texto = $tarjeta["texto"] ?? "";
                $texto_bottom = $tarjeta["texto_inferior"] ?? "";
                $icono = $tarjeta["icono"] ?? "";
                ?>

                <div class="col-12">

                    <div
                        class="card card-ico-horizontal rounded-5 mb-4"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo esc_attr($delay); ?>"
                    >
                        <div class="row g-0">

                            <!-- Imagen -->
                            <div class="col-md-4 card-img-col">

                                <?php if ($imagen): ?>
                                    <img
                                        src="<?php echo esc_url(
                                            $imagen["url"],
                                        ); ?>"
                                        class="card-img-left rounded-start"
                                        alt="<?php echo esc_attr(
                                            $imagen["alt"] ?: $titulo,
                                        ); ?>"
                                        loading="lazy"
                                        decoding="async"
                                    />
                                <?php endif; ?>

                            </div>

                            <!-- Content -->
                            <div class="col-md-8">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-10 my-auto">

                                            <?php if ($titulo): ?>
                                                <h1 class="card-title">
                                                    <?php echo wp_kses_post(
                                                        $titulo,
                                                    ); ?>
                                                </h1>
                                            <?php endif; ?>

                                        </div>

                                        <div class="col-2 my-auto text-end">

                                            <?php if ($icono): ?>
                                                <img
                                                    src="<?php echo esc_url(
                                                        $icono["url"],
                                                    ); ?>"
                                                    class="ico"
                                                    alt="<?php echo esc_attr(
                                                        $icono["alt"] ?:
                                                        $titulo,
                                                    ); ?>"
                                                    loading="lazy"
                                                    decoding="async"
                                                />
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                    <?php if ($texto): ?>
                                        <p>
                                            <?php echo wp_kses_post($texto); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($texto_bottom): ?>
                                        <hr />
                                        <p class="text-tertiary">
                                            <strong>
                                                <?php echo wp_kses_post(
                                                    $texto_bottom,
                                                ); ?>
                                            </strong>
                                        </p>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            <?php $delay += 100;
            endforeach;
            ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>
