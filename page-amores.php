<?php
/*
Template Name: AMORES
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_amores",
]); ?>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1
                    class="lh-1"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <span class="highlighted-amores">Un caminar</span
                    ><br />
                    <span>compartido</span>
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    AMORES es un grupo de mujeres que se organiza para
                    enfrentar la desaparición de sus seres queridos de
                    manera colectiva.
                    <strong
                        >Es un espacio de encuentro, cuidado y acción
                        ciudadana</strong
                    >
                    donde las mujeres fortalecen su voz, su autonomía y
                    su capacidad de incidencia.
                </p>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <strong
                        >Surge de la necesidad de no caminar solas
                        frente a la desaparición.</strong
                    >
                </p>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    A través del encuentro entre mujeres, se construye
                    un espacio de apoyo mutuo, aprendizaje y
                    organización que, con el tiempo, se fortalece y se
                    mantiene activo hasta hoy.
                </p>
            </div>
            <div class="col-lg-6">
                <div
                    class="arrow-right home-image container-image bp-center rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-caminar.png&quot;);
                    "
                    data-aos="fade-up"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                ></div>
            </div>
        </div>
    </div>
</section>

<section
    class="cta py-60"
    style="
        background-image: url(&quot;<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/bg-cta-amores.png&quot;);
    "
>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="w-100 arrow-right p-5 text-center"">
                    <h1>
                        La organización<br />
                        entre <span class="highlighted serif" data-aos="fade-in" data-aos-duration="1000">mujeres</span
                        ><br />
                        transforma el dolor en<br />
                        <span class="highlighted" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">fuerza colectiva.</span
                        >
                    </h1>
                    <p>
                        <i
                            class="fa-solid fa-star-of-life highlighted"
                        ></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="timeline" class="pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    <span>El camino</span><br />
                    <span class="highlighted-amores">de AMORES</span>
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
                <div
                    id="row-1"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5"
                    >
                        <h2>
                            2011 · El inicio del encuentro
                        </h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p>
                            Mujeres que buscan a sus seres queridos comienzan a reunirse para acompañarse, compartir experiencias y no enfrentar solas la desaparición.
                        </p>
                    </div>
                </div>

                <div
                    id="row-2"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2>
                            2012–2013 · Organización y acompañamiento
                        </h2>
                    </div>
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1"
                    >
                        <p>
                            El grupo se fortalece como espacio de apoyo mutuo y comienza su caminar acompañado por CADHAC, construyendo procesos colectivos de cuidado, búsqueda y exigencia de justicia.
                        </p>
                    </div>
                </div>

                <div
                    id="row-3"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5"
                    >
                        <h2>
                            2014–2016 · Voz pública e incidencia
                        </h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p>
                            AMORES participa activamente en espacios de diálogo con autoridades y en acciones públicas para visibilizar la desaparición y exigir respuestas del Estado.
                        </p>
                    </div>
                </div>

                <div
                    id="row-4"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2>
                            2017–2019 · Fortalecimiento colectivo
                        </h2>
                    </div>
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1"
                    >
                        <p>
                            El grupo consolida su organización, comparte aprendizajes con otras familias y se posiciona como un referente en la lucha contra la desaparición en Nuevo León y a nivel nacional.
                        </p>
                    </div>
                </div>

                <div
                    id="row-5"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5"
                    >
                        <h2>
                            2020–2022 · Resistencia y memoria
                        </h2>
                    </div>
                    <div class="col-md-6 my-md-auto px-md-5">
                        <p>
                            A pesar de contextos adversos, AMORES mantiene su organización, el cuidado entre mujeres y la construcción de memoria colectiva como forma de resistencia.
                        </p>
                    </div>
                </div>

                <div
                    id="row-6"
                    class="row my-3 my-md-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div class="col-md-6 my-md-auto px-md-5 order-md-2">
                        <h2>
                            2023–Hoy · Continuidad del camino
                        </h2>
                    </div>
                    <div
                        class="col-md-6 text-md-end my-md-auto px-md-5 order-md-1"
                    >
                        <p>
                            AMORES continúa organizándose, acompañándose y exigiendo verdad y justicia, reafirmando que la búsqueda es colectiva y que la dignidad se defiende juntas.
                        </p>
                    </div>
                </div>
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
