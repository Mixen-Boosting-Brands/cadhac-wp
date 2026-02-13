<?php
/*
Template Name: AMORES
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_amores",
]); ?>

<?php
/* ==========================================================
   CF → pagina_amores / bloque_2
========================================================== */

$pagina_amores = get_field("pagina_amores", "option");

if (!$pagina_amores) {
    return;
}

$bloque = $pagina_amores["bloque_2"] ?? null;

if (!$bloque) {
    return;
}

/* ==========================================================
   Subfields
========================================================== */

$titulo = $bloque["texto_superior"] ?? "";
$contenido = $bloque["texto_inferior"] ?? "";
$imagen = $bloque["imagen"] ?? "";

/* Imagen → URL compatible */
$img_url = is_array($imagen) ? $imagen["url"] : $imagen;
$img_alt = is_array($imagen) ? $imagen["alt"] ?? "" : "";
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">

        <div class="row">

            <!-- =====================================================
                 Columna izquierda
            ====================================================== -->
            <div class="col-lg-6">

                <?php if ($titulo): ?>
                    <h1
                        class="lh-1"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                <?php echo wp_kses_post($titulo); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($contenido): ?>
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                <?php echo wp_kses_post($contenido); ?>
                    </div>
                <?php endif; ?>

            </div>

            <!-- =====================================================
                 Imagen derecha
            ====================================================== -->
            <div class="col-lg-6">

                <?php if ($img_url): ?>

                    <div
                        class="arrow-right home-image container-image bp-center rounded-5 p-4"
                        style="background-image:url('<?php echo esc_url(
                            $img_url,
                        ); ?>');"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        role="img"
                        aria-label="<?php echo esc_attr($img_alt); ?>"
                    ></div>

                <?php endif; ?>

            </div>

        </div>

    </div>
</section>

<?php
/* ==========================================================
   CF → pagina_amores / banner_amores
========================================================== */

$pagina_amores = get_field("pagina_amores", "option");

if (!$pagina_amores) {
    return;
}

$banner = $pagina_amores["banner_amores"] ?? null;

if (!$banner) {
    return;
}

/* ==========================================================
   Subfields
========================================================== */

$texto = $banner["texto"] ?? "";
$imagen = $banner["imagen"] ?? "";

/* Imagen → URL compatible */
$img_url = is_array($imagen) ? $imagen["url"] : $imagen;
$img_alt = is_array($imagen) ? $imagen["alt"] ?? "" : "";
?>

<section
    class="cta py-60"
    <?php if ($img_url): ?>
        style="background-image:url('<?php echo esc_url($img_url); ?>');"
    <?php endif; ?>
>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <div class="w-100 arrow-right p-5 text-center">

                    <?php if ($texto): ?>

                        <?php echo wp_kses_post($texto); ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>

    </div>
</section>

<?php
/* =========================
   CF → pagina_amores → timeline
   (OPTIONS PAGE)
========================= */

$pagina_amores = get_field("pagina_amores", "option");

if (!$pagina_amores || !isset($pagina_amores["timeline"])) {
    return;
}

$timeline = $pagina_amores["timeline"];

/* =========================
   Texto superior (WYSIWYG)
========================= */

$texto_superior = isset($timeline["texto_superior"])
    ? $timeline["texto_superior"]
    : "";

/* =========================
   Helper seguro
========================= */

function tl_val($arr, $key)
{
    return isset($arr[$key]) ? $arr[$key] : "";
}

$t1 = tl_val($timeline, "titulo_1");
$p1 = tl_val($timeline, "texto_1");

$t2 = tl_val($timeline, "titulo_2");
$p2 = tl_val($timeline, "texto_2");

$t3 = tl_val($timeline, "titulo_3");
$p3 = tl_val($timeline, "texto_3");

$t4 = tl_val($timeline, "titulo_4");
$p4 = tl_val($timeline, "texto_4");

$t5 = tl_val($timeline, "titulo_5");
$p5 = tl_val($timeline, "texto_5");

$t6 = tl_val($timeline, "titulo_6");
$p6 = tl_val($timeline, "texto_6");
?>

<section id="timeline" class="pt-60 pb-30">

    <div class="container">
        <div class="row mb-4">
            <div class="col-12">

                <h1 data-aos="fade-up" data-aos-duration="1000">
                    <?php echo wp_kses_post($texto_superior); ?>
                </h1>

            </div>
        </div>
    </div>

    <div class="container position-relative">

        <div
            class="vertical-line"
            data-aos="zoom-in"
            data-aos-duration="3000"
            data-aos-delay="500"
        ></div>

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- ROW 1 -->
                <div id="row-1" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="col-md-6 text-md-end my-md-auto px-md-5">
                        <h2><?php echo esc_html($t1); ?></h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p><?php echo esc_html($p1); ?></p>
                    </div>
                </div>

                <!-- ROW 2 -->
                <div id="row-2" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2><?php echo esc_html($t2); ?></h2>
                    </div>
                    <div class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1">
                        <p><?php echo esc_html($p2); ?></p>
                    </div>
                </div>

                <!-- ROW 3 -->
                <div id="row-3" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="col-md-6 text-md-end my-md-auto px-md-5">
                        <h2><?php echo esc_html($t3); ?></h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p><?php echo esc_html($p3); ?></p>
                    </div>
                </div>

                <!-- ROW 4 -->
                <div id="row-4" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2><?php echo esc_html($t4); ?></h2>
                    </div>
                    <div class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1">
                        <p><?php echo esc_html($p4); ?></p>
                    </div>
                </div>

                <!-- ROW 5 -->
                <div id="row-5" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="col-md-6 text-md-end my-md-auto px-md-5">
                        <h2><?php echo esc_html($t5); ?></h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p><?php echo esc_html($p5); ?></p>
                    </div>
                </div>

                <!-- ROW 6 -->
                <div id="row-6" class="row my-3 my-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2><?php echo esc_html($t6); ?></h2>
                    </div>
                    <div class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1">
                        <p><?php echo esc_html($p6); ?></p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<?php
/* =========================
   CF → pagina_amores
========================= */

$pagina_amores = get_field("pagina_amores", "option");

if (!$pagina_amores) {
    return;
}

$tarjetas = $pagina_amores["tarjetas"] ?? null;

if (!$tarjetas) {
    return;
}

/* Textos */
$texto_superior = $tarjetas["texto_superior"] ?? "";
$texto_inferior = $tarjetas["texto_inferior"] ?? "";

/* Tarjetas */
$items = [];

for ($i = 1; $i <= 5; $i++) {
    if (!empty($tarjetas["tarjeta_" . $i])) {
        $items[] = $tarjetas["tarjeta_" . $i];
    }
}

if (empty($items)) {
    return;
}
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12 text-center">
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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5">

            <?php
            $delay = 100;

            foreach ($items as $item):

                $icono = $item["icono"] ?? "";
                $texto = $item["texto"] ?? "";
                ?>

                <div class="col">

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
                                        <strong>
                                            <?php echo wp_kses_post($texto); ?>
                                        </strong>
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
