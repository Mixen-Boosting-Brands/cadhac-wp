<?php
/**
 * Card de Post reutilizable
 * Usa helper: get_post_card_image()
 */

$image = get_post_card_image(get_the_ID()); ?>

<div class="col-lg-4 mb-4">
    <div class="card rounded-5 h-100">
        <?php if ($image): ?>
            <a href="<?php the_permalink(); ?>">
                <img
                    src="<?php echo esc_url($image); ?>"
                    class="card-img-top rounded-5"
                    alt="<?php echo esc_attr(get_the_title()); ?>"
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
                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
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
