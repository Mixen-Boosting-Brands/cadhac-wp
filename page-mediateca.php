<?php
/*
Template Name: Mediateca
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_mediateca",
]); ?>

<?php $cats = get_categories([
    "taxonomy" => "category",
    "include" => [32, 93], // Publicaciones, Videos
    "orderby" => "include",
    "hide_empty" => false,
]); ?>

<section class="tabulador pt-60 pb-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1>Mediateca</h1>
            </div>

            <div class="col-6 my-auto text-end">
                <ul class="nav nav-pills mb-0" role="tablist">
                    <?php
                    $i = 0;
                    foreach ($cats as $cat): ?>
                        <li class="nav-item">
                            <button
                                class="nav-link rounded-pill <?php echo $i === 0
                                    ? "active"
                                    : ""; ?>"
                                data-bs-toggle="pill"
                                data-bs-target="#cat-<?php echo $cat->term_id; ?>"
                                type="button"
                            >
                                <?php echo esc_html($cat->name); ?>
                            </button>
                        </li>
                    <?php $i++;endforeach;
                    ?>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="tab-content">

<?php
$i = 0;

foreach ($cats as $cat):

    $active = $i === 0 ? "show active" : "";

    $cache_key = "mediateca_cat_" . $cat->term_id;

    $posts = get_transient($cache_key);

    if ($posts === false) {
        $q = new WP_Query([
            "post_type" => "post",
            "posts_per_page" => 6,
            "cat" => $cat->term_id,
            "no_found_rows" => true,
            "update_post_meta_cache" => false,
            "update_post_term_cache" => false,
        ]);

        $posts = $q->posts;

        set_transient($cache_key, $posts, HOUR_IN_SECONDS * 6);
    }
    ?>

    <div
        class="tab-pane fade <?php echo $active; ?>"
        id="cat-<?php echo $cat->term_id; ?>"
    >
        <div class="row">

        <?php if (!empty($posts)): ?>

            <?php
            foreach ($posts as $post):

                setup_postdata($post);

                $image = get_post_card_image(get_the_ID());

                // Detectar categoría real del post
                $is_publicacion = has_category(32, $post->ID);
                $is_video = has_category(93, $post->ID);

                // CF PDF
                $pdf = get_field("pdf_file", $post->ID);
                ?>

                <div class="col-lg-4">
                    <div class="card rounded-5 mb-4">

                        <?php if ($image): ?>
                            <a href="<?php the_permalink(); ?>">
                                <img
                                    src="<?php echo esc_url($image); ?>"
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
                                <?php echo get_the_date("d M Y"); ?>
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

                                <?php if ($is_publicacion && $pdf): ?>

                                    <!-- BOTÓN PDF -->
                                    <a
                                        href="<?php echo esc_url($pdf); ?>"
                                        class="btn btn-primary rounded-pill"
                                        download
                                    >
                                        <i class="fa-solid fa-file-pdf"></i>
                                        Descargar PDF
                                    </a>

                                <?php elseif ($is_video): ?>

                                    <!-- BOTÓN VIDEO -->
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="btn btn-primary rounded-pill"
                                    >
                                        <i class="fa-solid fa-play"></i>
                                        Ver video
                                    </a>

                                <?php else: ?>

                                    <!-- FALLBACK -->
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="btn-card"
                                    >
                                        <i class="fas fa-arrow-right"></i>
                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>

            <?php
            endforeach;
            wp_reset_postdata();
            ?>

        <?php else: ?>

            <!-- TAB VACÍO -->
            <div class="col-12 text-center py-5">
                <p class="mb-0">Próximamente contenido en esta categoría.</p>
            </div>

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
