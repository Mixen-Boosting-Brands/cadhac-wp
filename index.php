<?php get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_home",
]); ?>

<?php $cats = get_categories([
    "taxonomy" => "category",
    "hide_empty" => true,
]); ?>

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
                        $active = $i === 0 ? "show active" : ""; ?>
                        <div
                            class="tab-pane fade <?php echo $active; ?>"
                            id="pills-<?php echo esc_attr($cat->slug); ?>"
                            role="tabpanel"
                        >
                            <div class="row">
                                <?php
                                $q = new WP_Query([
                                    "post_type" => "post",
                                    "posts_per_page" => 3,
                                    "cat" => $cat->term_id,
                                ]);

                                if ($q->have_posts()):
                                    while ($q->have_posts()):
                                        $q->the_post(); ?>

                                        <div class="col-lg-4">
                                            <div class="card rounded-5 mb-4 mb-lg-0">
                                                <?php if (
                                                    has_post_thumbnail()
                                                ): ?>
                                                    <img
                                                        src="<?php echo esc_url(
                                                            get_the_post_thumbnail_url(
                                                                get_the_ID(),
                                                                "large",
                                                            ),
                                                        ); ?>"
                                                        class="card-img-top rounded-5"
                                                        alt="<?php echo esc_attr(
                                                            get_the_title(),
                                                        ); ?>"
                                                        loading="lazy"
                                                    />
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
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
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

<?php
$pagina_home = get_field("pagina_home", "option");

$imagen_descanso = $pagina_home["imagen_de_descanso"] ?? "";
?>

<?php if (!empty($imagen_descanso)): ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img
                    class="img-fluid rounded-5"
                    src="<?php echo esc_url($imagen_descanso); ?>"
                    alt="Imagen de descanso CADHAC"
                    loading="lazy"
                    decoding="async"
                >
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$pagina_home = get_field("pagina_home", "option");

$bloque_2 = $pagina_home["bloque_2"] ?? null;

if (!$bloque_2) {
    return;
}

$texto_superior = $bloque_2["texto_superior"] ?? "";
$texto_inferior = $bloque_2["texto_inferior"] ?? "";

$imagen_1 = $bloque_2["imagen_1"] ?? "";
$imagen_2 = $bloque_2["imagen_2"] ?? "";
?>

<section id="comunidad" class="py-30">
    <div class="container-fluid">
        <!-- Título -->
        <?php if (!empty($texto_superior)): ?>
            <div class="row mb-4">
                <div class="col-12">

                    <h1
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>

                </div>
            </div>
        <?php endif; ?>

        <div class="row mb-4">
            <!-- Imagen 1 -->
            <?php if (!empty($imagen_1)): ?>
                <div class="col-lg-4 my-auto">

                    <img
                        id="thumb-comunidad-1"
                        class="img-fluid mb-3 mb-lg-0"
                        src="<?php echo esc_url($imagen_1); ?>"
                        alt="Comunidad CADHAC"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                        loading="lazy"
                        decoding="async"
                    >

                </div>
            <?php endif; ?>

            <!-- Texto -->
            <?php if (!empty($texto_inferior)): ?>
                <div class="col-lg-4 my-auto">

                    <div
                        data-aos="fade-in"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </div>

                </div>
            <?php endif; ?>

            <!-- Imagen 2 -->
            <?php if (!empty($imagen_2)): ?>
                <div class="col-lg-4 my-auto text-end">

                    <img
                        id="thumb-comunidad-2"
                        class="img-fluid"
                        src="<?php echo esc_url($imagen_2); ?>"
                        alt="Comunidad CADHAC"
                        data-aos="fade-down"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                        loading="lazy"
                        decoding="async"
                    >

                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 text-end arrow-right">
                <a href="<?php echo esc_url(get_permalink(373)); ?>">
                    <h2>
                        Conoce nuestra historia
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </h2>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
