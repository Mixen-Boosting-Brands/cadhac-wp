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
/* ==========================================================
   CF → pagina_trabajo / bloque_2
========================================================== */

$pagina_trabajo = get_field("pagina_trabajo", "option");

if (!$pagina_trabajo) {
    return;
}

$bloque = $pagina_trabajo["bloque_2"] ?? null;

if (!$bloque) {
    return;
}

/* ==========================================================
   Textos
========================================================== */

$texto_superior = $bloque["texto_superior"] ?? "";
$texto_inferior = $bloque["texto_inferior"] ?? "";

/* ==========================================================
   Tarjetas
========================================================== */

$tarjetas = [];

for ($i = 1; $i <= 4; $i++) {
    if (!empty($bloque["tarjeta_" . $i])) {
        $tarjetas[] = $bloque["tarjeta_" . $i];
    }
}

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
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- Cards -->
        <div class="row mb-5">

            <?php
            $delay = 100;

            foreach ($tarjetas as $tarjeta):

                /* ==================================================
                   IMAGENES (URL return compatible)
                ================================================== */

                $img = $tarjeta["imagen"] ?? "";
                $ico = $tarjeta["icono"] ?? "";

                // Soporta URL o Array (future proof)
                $img_url = is_array($img) ? $img["url"] : $img;
                $img_alt = is_array($img) ? $img["alt"] ?? "" : "";

                $ico_url = is_array($ico) ? $ico["url"] : $ico;
                $ico_alt = is_array($ico) ? $ico["alt"] ?? "" : "";

                /* ================================================== */

                $titulo = $tarjeta["titulo"] ?? "";
                $texto = $tarjeta["texto"] ?? "";
                $texto_inf = $tarjeta["texto_inferior"] ?? "";
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

                                <?php if ($img_url): ?>
                                    <img
                                        src="<?php echo esc_url($img_url); ?>"
                                        class="card-img-left rounded-start"
                                        alt="<?php echo esc_attr($img_alt); ?>"
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
                                            <?php if ($ico_url): ?>
                                                <img
                                                    src="<?php echo esc_url(
                                                        $ico_url,
                                                    ); ?>"
                                                    class="ico"
                                                    alt="<?php echo esc_attr(
                                                        $ico_alt,
                                                    ); ?>"
                                                    loading="lazy"
                                                    decoding="async"
                                                />
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    <?php if ($texto): ?>
                                        <div>
                                            <?php echo wp_kses_post($texto); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($texto_inf): ?>

                                        <hr />

                                        <div class="text-tertiary">
                                            <?php echo wp_kses_post(
                                                $texto_inf,
                                            ); ?>
                                        </div>

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
