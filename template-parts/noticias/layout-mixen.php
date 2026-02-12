<?php
/**
 * Layout mixto Noticias
 * - 3 cards (1/3)
 * - 1 horizontal
 * - 2 cards (1/2)
 */

if (empty($posts)) {
    return;
} ?>

<!-- ROW 1 → 3 cards -->
<div class="row">

    <?php
    $first_three = array_slice($posts, 0, 3);

    foreach ($first_three as $post):

        setup_postdata($post);

        $image = get_post_card_image(get_the_ID());
        ?>

        <div
            class="col-lg-4"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <?php // Reutilizas tu card normal
        // Reutilizas tu card normal
        get_template_part("template-parts/cards/post-card"); ?>
        </div>

    <?php
    endforeach;
    ?>

</div>

<?php
/* =========================
   ROW 2 → Horizontal
========================= */

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

                        <?php if (!empty($image)): ?>
                            <a href="<?php the_permalink(); ?>">
                                <img
                                    src="<?php echo esc_url($image); ?>"
                                    class="img-fluid rounded-start"
                                    alt="<?php echo esc_attr(
                                        get_the_title(),
                                    ); ?>"
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
                                <?php echo wp_trim_words(
                                    get_the_excerpt(),
                                    28,
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

    </div>

<?php
endif;
?>

<?php
/* =========================
   ROW 3 → 2 cards
========================= */

$last_two = array_slice($posts, 4, 2);

if (!empty($last_two)): ?>

    <div class="row">

        <?php
        $delay = 200;

        foreach ($last_two as $post):

            setup_postdata($post);

            $image = get_post_card_image(get_the_ID());
            ?>

            <div
                class="col-lg-6"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="<?php echo esc_attr($delay); ?>"
            >
                <?php get_template_part("template-parts/cards/post-card"); ?>
            </div>

        <?php $delay += 100;
        endforeach;
        ?>

    </div>

<?php endif;
?>

<?php wp_reset_postdata(); ?>
