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

<?php get_footer(); ?>
