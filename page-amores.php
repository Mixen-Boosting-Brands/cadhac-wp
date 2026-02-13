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
========================= */

$timeline = get_field("timeline");

if (!$timeline || !is_array($timeline)) {
    return;
}

/* =========================
   Texto superior
========================= */

$texto_superior = "";
if (isset($timeline["texto_superior"])) {
    $texto_superior = $timeline["texto_superior"];
}

/* =========================
   Helper
========================= */

function tl_item($timeline, $i)
{
    $titulo = "";
    $texto = "";

    if (isset($timeline["titulo_$i"])) {
        $titulo = $timeline["titulo_$i"];
    }

    if (isset($timeline["texto_$i"])) {
        $texto = $timeline["texto_$i"];
    }

    return [
        "titulo" => $titulo,
        "texto" => $texto,
    ];
}

$items = [
    tl_item($timeline, 1),
    tl_item($timeline, 2),
    tl_item($timeline, 3),
    tl_item($timeline, 4),
    tl_item($timeline, 5),
    tl_item($timeline, 6),
];
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

                <?php
                $row = 1;
                foreach ($items as $item):

                    if (!$item["titulo"] && !$item["texto"]) {
                        $row++;
                        continue;
                    }

                    $is_even = $row % 2 === 0;
                    $delay = $is_even ? 200 : 100;
                    ?>

                <div
                    id="row-<?php echo $row; ?>"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="<?php echo $delay; ?>"
                >

                    <?php if (!$is_even): ?>

                        <div class="col-md-6 text-md-end my-md-auto px-md-5">
                            <h2><?php echo esc_html($item["titulo"]); ?></h2>
                        </div>

                        <div class="col-md-6 my-md-auto px-md-5">
                            <p><?php echo esc_html($item["texto"]); ?></p>
                        </div>

                    <?php else: ?>

                        <div class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1">
                            <p><?php echo esc_html($item["texto"]); ?></p>
                        </div>

                        <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                            <h2><?php echo esc_html($item["titulo"]); ?></h2>
                        </div>

                    <?php endif; ?>

                </div>

                <?php $row++;
                endforeach;
                ?>

            </div>
        </div>

    </div>

</section>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    Acompañamiento<br />
                    <span class="highlighted-gray">de</span> <span class="highlighted-light-purple">CADHAC</span>
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    CADHAC acompaña a AMORES desde un enfoque integral que combina el apoyo jurídico, psicosocial, la documentación de casos y la incidencia pública, respetando siempre la autonomía, el liderazgo y las decisiones del grupo.
                </p>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <strong>Acompañar es caminar juntas, sin reemplazar la voz de las mujeres.</strong>
                </p>
            </div>

        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5">
            <div class="col">
                <div
                    class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/acompanamiento/ico-1@2x.png"
                            class="ico"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Incidencia en políticas públicas relacionadas con la desaparición</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/acompanamiento/ico-2@2x.png"
                            class="ico"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Participación activa en espacios de diálogo institucional</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <div>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/acompanamiento/ico-3@2x.png"
                            class="ico"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Fortalecimiento de procesos de búsqueda y exigencia de justicia</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <div>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/acompanamiento/ico-4@2x.png"
                            class="ico"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Construcción de memoria colectiva</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="500"
                >
                    <div>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/acompanamiento/ico-5@2x.png"
                            class="ico"
                            alt=""
                        />
                        <div class="card-body">
                            <p class="card-text">
                                <strong>Reconocimiento como grupo referente a nivel nacional</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Noticias -->
<section class="tabulador pt-60 pb-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1>Noticias</h1>
            </div>

            <div class="col-6 my-auto text-end">
                <ul class="nav nav-pills mb-0" id="pills-noticias" role="tablist">
                    <?php
                    $i = 0;
                    foreach ($cats as $cat):
                        $active = $i === 0 ? "active" : ""; ?>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link rounded-pill <?php echo $active; ?>"
                                id="pills-<?php echo esc_attr(
                                    $cat->slug,
                                ); ?>-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-<?php echo esc_attr(
                                    $cat->slug,
                                ); ?>"
                                type="button"
                                role="tab"
                            >
                                <?php echo esc_html($cat->name); ?>
                            </button>
                        </li>

                    <?php $i++;
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="col-12">
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p>
                    Descubre relatos, aprendizajes y voces que mantienen
                    viva la memoria y fortalecen nuestra comunidad.
                </p>

                <div class="tab-content" id="pills-noticiasContent">
                    <?php
                    $i = 0;
                    foreach ($cats as $cat):

                        $active = $i === 0 ? "show active" : "";

                        // CACHE KEY
                        $cache_key = "home_news_cat_" . $cat->term_id;

                        // Intentar obtener caché
                        $posts = get_transient($cache_key);

                        if ($posts === false) {
                            $q = new WP_Query([
                                "post_type" => "post",
                                "posts_per_page" => 3,
                                "cat" => $cat->term_id,

                                // Performance flags
                                "no_found_rows" => true,
                                "update_post_meta_cache" => false,
                                "update_post_term_cache" => false,
                            ]);

                            $posts = $q->posts;

                            // Guardar caché 6 horas
                            set_transient(
                                $cache_key,
                                $posts,
                                HOUR_IN_SECONDS * 6,
                            );
                        }
                        ?>

                        <div
                            class="tab-pane fade <?php echo $active; ?>"
                            id="pills-<?php echo esc_attr($cat->slug); ?>"
                            role="tabpanel"
                        >
                            <div class="row">
                                <?php if (!empty($posts)): ?>
                                    <?php
                                    foreach ($posts as $post):

                                        setup_postdata($post);

                                        $image = get_post_card_image(
                                            get_the_ID(),
                                        );
                                        ?>

                                        <div class="col-lg-4">
                                            <div class="card rounded-5 mb-4 mb-lg-0">

                                                <?php if (!empty($image)): ?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img
                                                            src="<?php echo esc_url(
                                                                $image,
                                                            ); ?>"
                                                            class="card-img-top rounded-5"
                                                            alt="<?php echo esc_attr(
                                                                get_the_title(),
                                                            ); ?>"
                                                            loading="lazy"
                                                            decoding="async"
                                                        />
                                                    </a>
                                                <?php endif; ?>

                                                <div class="card-body">

                                                    <date class="card-date">
                                                        <?php echo get_the_date(
                                                            "d M Y",
                                                        ); ?>
                                                    </date>

                                                    <a href="<?php the_permalink(); ?>">
                                                        <h1 class="card-title">
                                                            <?php the_title(); ?>
                                                        </h1>
                                                    </a>

                                                    <p class="card-text">
                                                        <?php echo wp_trim_words(
                                                            get_the_excerpt(),
                                                            18,
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

                                    <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php $i++;
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
