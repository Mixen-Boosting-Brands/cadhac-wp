<?php get_header(); ?>

<section class="archive archive-author pt-30">
    <div class="container-fluid">

        <!-- Header -->
        <div class="row mb-4">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="mb-3">
                    <?php the_author(); ?>
                </h1>

                <?php if (get_the_author_meta("description")): ?>
                    <div class="text-muted">
                        <?php the_author_meta("description"); ?>
                    </div>
                <?php endif; ?>
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
                    <p>Este autor no tiene publicaciones aún.</p>
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
