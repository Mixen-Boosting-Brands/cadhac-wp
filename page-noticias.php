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
   Categorías base (HOME)
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

        <div class="row">
            <div class="col-12"><hr /></div>
        </div>

        <!-- TAB CONTENT -->
        <div class="tab-content">

<?php
$i = 0;

foreach ($cats as $cat):

    $active = $i === 0 ? "show active" : "";

    /* =========================
       CACHE + QUERY
    ========================= */

    $cache_key = "page_news_cat_" . $cat->term_id;

    $post_ids = get_transient($cache_key);

    if ($post_ids === false) {
        $q = new WP_Query([
            "post_type" => "post",
            "posts_per_page" => 5,
            "cat" => $cat->term_id,
            "no_found_rows" => true,
            "fields" => "ids", // ⚡ solo IDs
        ]);

        $post_ids = $q->posts;

        set_transient($cache_key, $post_ids, HOUR_IN_SECONDS * 6);
    }

    /* Convertir IDs → posts reales */
    $posts = [];

    if (!empty($post_ids)) {
        foreach ($post_ids as $id) {
            $posts[] = get_post($id);
        }
    }
    ?>

    <div
        class="tab-pane fade <?php echo $active; ?>"
        id="tab-<?php echo esc_attr($cat->slug); ?>"
        data-cat="<?php echo esc_attr($cat->term_id); ?>"
    >

        <?php if ($i === 0 && !empty($posts)):
            // Pasar posts al template
            set_query_var("news_posts", $posts);

            get_template_part("template-parts/noticias/layout", "mixed");
        endif; ?>

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
