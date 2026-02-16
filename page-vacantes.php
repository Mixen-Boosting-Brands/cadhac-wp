<?php
/*
Template Name: Vacantes
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_vacantes",
]); ?>

<?php
/* =========================
   CF → pagina_vacantes
========================= */

$pagina_vacantes = get_field("pagina_vacantes", "option");

if (!$pagina_vacantes) {
    return;
}

$tarjetas = $pagina_vacantes["tarjetas"] ?? null;

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

 /* =========================================
   QUERY → Vacantes
========================================= */<?php $q = new WP_Query([
    "post_type" => "post",
    "posts_per_page" => 2,
    "cat" => 94,
    "no_found_rows" => true,
]); ?>

<?php if ($q->have_posts()): ?>

<section id="listado-vacantes" class="pt-30 pb-60">
    <div class="container-fluid">

        <div class="row">

            <?php
            while ($q->have_posts()):

                $q->the_post();

                /* ================================
                   CF
                ================================ */
                $ubicacion = get_field("ubicacion") ?: "";

                /* ================================
                   Imagen fallback
                ================================ */
                if (has_post_thumbnail()) {
                    $image = get_the_post_thumbnail_url(get_the_ID(), "large");
                } else {
                    // Buscar primera imagen del contenido
                    preg_match(
                        '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
                        get_the_content(),
                        $matches,
                    );

                    $image =
                        $matches[1] ??
                        get_template_directory_uri() .
                            "/assets/images/vacantes/thumb-card.png";
                }
                ?>

            <!-- Full Width Card -->
            <div class="col-12">
                <div class="card rounded-5 mb-4">

                    <div class="row g-0">

                        <!-- Image -->
                        <div class="col-md-4">
                            <img
                                src="<?php echo esc_url($image); ?>"
                                class="img-fluid rounded-start"
                                alt="<?php echo esc_attr(get_the_title()); ?>"
                                loading="lazy"
                                decoding="async"
                            />
                        </div>

                        <!-- Content -->
                        <div class="col-md-8">
                            <div class="card-body">

                                <?php if ($ubicacion): ?>
                                    <span>
                                        <?php echo esc_html($ubicacion); ?>
                                    </span>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>">
                                    <h1 class="card-title">
                                        Vacante - <span><?php the_title(); ?></span>
                                    </h1>
                                </a>

                                <p class="card-text">
                                    <?php echo wp_trim_words(
                                        get_the_excerpt(),
                                        150,
                                    ); ?>
                                </p>

                                <div class="text-end">
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="btn-card"
                                    >
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>

        <!-- CTA -->
        <div class="row">
            <div class="col-12 text-center">

                <?php $cat_link = get_category_link(94); ?>

                <a
                    class="btn btn-primary rounded-pill"
                    href="<?php echo esc_url($cat_link); ?>"
                    target="_blank"
                >
                    Ver más vacantes
                </a>

            </div>
        </div>

    </div>
</section>

<?php endif; ?>

<?php
$pagina_vacantes = get_field("pagina_vacantes", "option");
$banner_vacantes = $pagina_vacantes["banner_vacantes"] ?? null;
?>

<?php if ($banner_vacantes): ?>

    <?php
    $texto = $banner_vacantes["texto"] ?? "";
    $imagen = $banner_vacantes["imagen"] ?? "";
    ?>

    <?php if (!empty($imagen)): ?>
        <section
            class="cta-vacantes py-60"
            style="background-image:url('<?php echo esc_url($imagen); ?>');"
        >
    <?php else: ?>
        <section class="cta py-60">
    <?php endif; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 arrow-right p-5 text-center">
                        <?php if (!empty($texto)): ?>
                            <h1>
                                <?php echo wp_kses_post($texto); ?>
                            </h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
