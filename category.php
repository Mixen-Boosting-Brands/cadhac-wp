<?php get_header(); ?>

<section class="archive archive-category py-60">
    <div class="container-fluid">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-8 offset-lg-2">

                <h1 class="mb-3">
                    <?php single_cat_title(); ?>
                </h1>

                <?php if (category_description()): ?>
                    <div class="text-muted">
                        <?php echo category_description(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="row">
            <?php if (have_posts()): ?>

                <?php while (have_posts()):
                    the_post();

                    // Card reusable
                    get_template_part("template-parts/cards/post-card");
                endwhile; ?>

            <?php else: ?>

                <div class="col-12 text-center">
                    <p>No hay publicaciones en esta categoría.</p>
                </div>

            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="col-12 text-center">

                <?php the_posts_pagination([
                    "mid_size" => 2,
                    "prev_text" => "← Anterior",
                    "next_text" => "Siguiente →",
                ]); ?>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
