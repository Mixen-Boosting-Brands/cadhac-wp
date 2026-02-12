<?php
/*
Template Name: Noticias
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_noticias",
]); ?>

<?php
/* =========================
   Categorías del HOME
========================= */

$cat_ids = [34, 86, 92, 12, 10, 11];

$cats = get_categories([
    "include" => $cat_ids,
    "orderby" => "name",
    "order" => "ASC",
]);
?>

<section class="tabulador pt-60 pb-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row" data-aos="fade-up" data-aos-duration="1000">

            <div class="col-6 my-auto">
                <h1>Noticias</h1>
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
                                data-bs-target="#tab-<?php echo esc_attr(
                                    $cat->slug,
                                ); ?>"
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

        <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="col-12"><hr /></div>
        </div>

        <div class="tab-content">

            <?php
            $i = 0;
            foreach ($cats as $cat):

                $active = $i === 0 ? "show active" : "";

                /* ========= CACHE ========= */

                $cache_key = "page_news_cat_" . $cat->term_id;
                $posts = get_transient($cache_key);

                if ($posts === false) {
                    $q = new WP_Query([
                        "post_type" => "post",
                        "posts_per_page" => 5,
                        "cat" => $cat->term_id,
                        "no_found_rows" => true,
                    ]);

                    $posts = $q->posts;

                    set_transient($cache_key, $posts, HOUR_IN_SECONDS * 6);
                }
                ?>

            <div
                class="tab-pane fade <?php echo $active; ?>"
                id="tab-<?php echo esc_attr($cat->slug); ?>"
            >

                <div class="row">

                    <?php if (!empty($posts)): ?>

                        <?php
                        foreach ($posts as $index => $post):

                            setup_postdata($post);
                            $image = get_post_card_image(get_the_ID());

                            /* ========= Layout mapping ========= */

                            if ($index < 3) {
                                $col = "col-lg-4";
                                $variant = "standard";
                            } elseif ($index === 3) {
                                $col = "col-12";
                                $variant = "horizontal";
                            } else {
                                $col = "col-lg-6";
                                $variant = "standard";
                            }
                            ?>

                        <div class="<?php echo $col; ?>">

                            <?php if ($variant === "horizontal"): ?>

                                <!-- Horizontal -->
                                <div class="card rounded-5 mb-4">
                                    <div class="row g-0">

                                        <div class="col-md-4">
                                            <a href="<?php the_permalink(); ?>">
                                                <img
                                                    src="<?php echo esc_url(
                                                        $image,
                                                    ); ?>"
                                                    class="img-fluid rounded-start"
                                                    alt="<?php the_title_attribute(); ?>"
                                                />
                                            </a>
                                        </div>

                                        <div class="col-md-8">
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
                                                        28,
                                                    ); ?>
                                                </p>

                                                <div class="text-end">
                                                    <a href="<?php the_permalink(); ?>" class="btn-card">
                                                        <i class="fas fa-arrow-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php else: ?>

                                <!-- Standard -->
                                <div class="card rounded-5 mb-4">

                                    <?php if ($image): ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img
                                                src="<?php echo esc_url(
                                                    $image,
                                                ); ?>"
                                                class="card-img-top rounded-5"
                                                alt="<?php the_title_attribute(); ?>"
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
                                            <a href="<?php the_permalink(); ?>" class="btn-card">
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            <?php endif; ?>

                        </div>

                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>

                    <?php endif; ?>

                </div>

                <!-- CTA -->
                <div class="row">
                    <div class="col-12 text-center">

                        <a
                            class="btn btn-primary btn-lg rounded-pill"
                            href="<?php echo esc_url(
                                get_category_link($cat->term_id),
                            ); ?>"
                        >
                            Ver más
                        </a>

                    </div>
                </div>

            </div>

            <?php $i++;
            endforeach;
            ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
