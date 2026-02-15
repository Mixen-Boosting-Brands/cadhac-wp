<?php
/*
Template Name: Mediateca
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_mediateca",
]); ?>

<?php /* =========================
   Categorías Mediateca
========================= */

$cats = get_categories([
    "taxonomy" => "category",
    "include" => [32, 93], // Publicaciones / Videos
    "orderby" => "include",
    "hide_empty" => true,
]); ?>

<section class="tabulador pt-60 pb-30">
<div class="container-fluid">

<!-- HEADER -->
<div class="row" data-aos="fade-up" data-aos-duration="1000">

    <div class="col-6 my-auto">
        <h1>Mediateca</h1>
    </div>

    <div class="col-6 my-auto text-end">
        <ul class="nav nav-pills mb-0" role="tablist">

        <?php
        $i = 0;
        foreach ($cats as $cat):
            $active = $i === 0 ? "active" : ""; ?>

            <li class="nav-item">
                <button
                    class="nav-link rounded-pill <?php echo $active; ?>"
                    data-bs-toggle="pill"
                    data-bs-target="#tab-<?php echo esc_attr($cat->slug); ?>"
                    type="button"
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
    <div class="col-12"><hr /></div>
</div>

<!-- TAB CONTENT -->
<div class="tab-content">

<?php
$i = 0;

foreach ($cats as $cat):

    $active = $i === 0 ? "show active" : "";

    /* =========================
       QUERY + CACHE
    ========================= */

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
    id="tab-<?php echo esc_attr($cat->slug); ?>"
>

<div class="row">

<?php if (!empty($posts)): ?>

<?php
foreach ($posts as $post):

    setup_postdata($post);

    $image = get_post_card_image(get_the_ID());
    $pdf_url = get_field("pdf_file");

    // CF por post
    ?>

<div class="col-lg-4 mb-4">

    <div class="card rounded-5 h-100">

        <?php if ($image): ?>
            <a href="<?php the_permalink(); ?>">
                <img
                    src="<?php echo esc_url($image); ?>"
                    class="card-img-top rounded-5"
                    alt="<?php the_title_attribute(); ?>"
                    loading="lazy"
                    decoding="async"
                />
            </a>
        <?php endif; ?>

        <div class="card-body d-flex flex-column">

            <date class="card-date">
                <?php echo get_the_date("d M Y"); ?>
            </date>

            <a href="<?php the_permalink(); ?>">
                <h1 class="card-title">
                    <?php the_title(); ?>
                </h1>
            </a>

            <p class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
            </p>

            <!-- CTA -->
            <div class="mt-auto text-end">

            <?php /* =========================
               BOTÓN DINÁMICO
            ========================= */

            if ($cat->slug === "publicaciones" && $pdf_url): ?>

                <a
                    href="<?php echo esc_url($pdf_url); ?>"
                    class="btn btn-primary rounded-pill"
                    download
                >
                    <i class="fa-solid fa-file-pdf"></i>
                    Descargar PDF
                </a>

            <?php else: ?>

                <a
                    href="<?php the_permalink(); ?>"
                    class="btn btn-primary rounded-pill"
                >
                    <i class="fa-solid fa-play"></i>
                    Ver video
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

<?php endif; ?>

</div>
</div>

<?php $i++;
endforeach;
?>

</div>
</div>
</section>

<?php get_footer(); ?>
