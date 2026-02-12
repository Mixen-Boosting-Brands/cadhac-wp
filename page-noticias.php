<?php
/*
Template Name: Noticias
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_noticias",
]); ?>

<?php $cats = get_categories([
    "taxonomy" => "category",
    "include" => [34, 86, 92, 12, 10, 11],
    "orderby" => "name",
    "order" => "ASC",
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
