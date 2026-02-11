<?php get_header(); ?>

<section class="archive archive-search pt-30">
    <div class="container-fluid">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-3">
                    Resultados para:
                    “<?php echo get_search_query(); ?>”
                </h1>

                <p class="text-muted">
                    <?php echo $wp_query->found_posts; ?>
                    resultados encontrados
                </p>

            </div>
        </div>

        <!-- Posts Grid -->
        <div class="row">
            <?php if (have_posts()): ?>

                <?php while (have_posts()):
                    the_post();

                    get_template_part("template-parts/cards/post-card");
                endwhile; ?>

            <?php else: ?>

                <div class="col-12 text-center">
                    <p>No se encontraron resultados.</p>
                </div>

            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
