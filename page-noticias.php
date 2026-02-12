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

<!-- =========================
     HEADER
========================= -->
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
                    data-bs-target="#tab-<?php echo esc_attr($cat->slug); ?>"
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

<!-- =========================
     TAB CONTENT
========================= -->
<div class="tab-content">

<?php
$i = 0;

foreach ($cats as $cat):

    $active = $i === 0 ? "show active" : "";

    /* =========================
       QUERY (5 posts)
    ========================= */

    $q = new WP_Query([
        "post_type" => "post",
        "posts_per_page" => 5,
        "cat" => $cat->term_id,
        "no_found_rows" => true,
    ]);
    ?>

<div
    class="tab-pane fade <?php echo $active; ?>"
    id="tab-<?php echo esc_attr($cat->slug); ?>"
>

<?php if ($q->have_posts()): ?>

<?php $posts = $q->posts; ?>

<!-- =========================
     ROW 1 → 3 cards
========================= -->
<div class="row">

<?php
$first_three = array_slice($posts, 0, 3);

foreach ($first_three as $post):
    setup_postdata($post); ?>

<div
    class="col-lg-4 d-flex"
    data-aos="fade-up"
    data-aos-duration="1000"
>
    <div class="w-100">
        <?php get_template_part("template-parts/cards/post-card"); ?>
    </div>
</div>

<?php
endforeach;
?>

</div>

<!-- =========================
     ROW 2 → Horizontal
========================= -->
<?php
$horizontal = $posts[3] ?? null;

if ($horizontal):

    $post = $horizontal;
    setup_postdata($post);

    $image = get_post_card_image(get_the_ID());
    ?>

<div class="row">

    <div
        class="col-12"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-delay="100"
    >

        <div class="card rounded-5 mb-4">

            <div class="row g-0">

                <!-- Image -->
                <div class="col-md-4">

                    <?php if ($image): ?>
                        <a href="<?php the_permalink(); ?>">
                            <img
                                src="<?php echo esc_url($image); ?>"
                                class="img-fluid rounded-start"
                                alt="<?php the_title_attribute(); ?>"
                                loading="lazy"
                                decoding="async"
                            />
                        </a>
                    <?php endif; ?>

                </div>

                <!-- Content -->
                <div class="col-md-8">

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
                            <?php echo wp_trim_words(get_the_excerpt(), 28); ?>
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

</div>

<?php
endif;
?>

<!-- =========================
     ROW 3 → Remaining posts
     (Fix dinámico)
========================= -->
<?php
$remaining = array_slice($posts, 4);

if (!empty($remaining)): ?>

<div class="row">

<?php
$count = count($remaining);
$delay = 200;

foreach ($remaining as $post):

    setup_postdata($post);

    /*
     Layout inteligente:

     1 post → full
     2 posts → half / half
    */
    $col = $count === 1 ? "col-12" : "col-lg-6";
    ?>

<div
    class="<?php echo $col; ?> d-flex"
    data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="<?php echo esc_attr($delay); ?>"
>
    <div class="w-100">
        <?php get_template_part("template-parts/cards/post-card"); ?>
    </div>
</div>

<?php $delay += 100;
endforeach;
?>

</div>

<?php endif;
?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<!-- =========================
     CTA
========================= -->
<div class="row">
    <div class="col-12 text-center">

        <a
            class="btn btn-primary btn-lg rounded-pill"
            href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
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
