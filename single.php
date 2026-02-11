<?php get_header(); ?>

<section class="single-post py-60">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <article
                            id="post-<?php the_ID(); ?>"
                            <?php post_class("single-article"); ?>
                        >

                            <!-- FEATURED IMAGE -->
                            <?php if (has_post_thumbnail()): ?>

                                <div class="post-thumbnail mb-4">
                                    <?php the_post_thumbnail("large", [
                                        "class" => "img-fluid rounded-5 w-100",
                                        "loading" => "eager",
                                    ]); ?>
                                </div>

                            <?php endif; ?>



                            <!-- TITLE -->
                            <h1 class="post-title mb-3">
                                <?php the_title(); ?>
                            </h1>



                            <!-- META -->
                            <div class="post-meta text-muted mb-4">

                                <span class="me-3">
                                    <i class="fa-regular fa-calendar"></i>
                                    <time datetime="<?php echo get_the_date(
                                        "c",
                                    ); ?>">
                                        <?php echo get_the_date("d M Y"); ?>
                                    </time>
                                </span>

                                <span class="me-3">
                                    <i class="fa-regular fa-user"></i>
                                    <?php the_author_posts_link(); ?>
                                </span>

                                <?php if (comments_open()): ?>
                                    <span>
                                        <i class="fa-regular fa-comments"></i>
                                        <?php comments_popup_link(
                                            "Sin comentarios",
                                            "1 comentario",
                                            "% comentarios",
                                        ); ?>
                                    </span>
                                <?php endif; ?>

                            </div>



                            <!-- CONTENT -->
                            <div class="post-content mb-5">
                                <?php the_content(); ?>
                            </div>



                            <!-- FOOTER META -->
                            <footer class="post-footer">

                                <div class="mb-2">
                                    <strong>Categorías:</strong>
                                    <?php the_category(", "); ?>
                                </div>

                                <?php if (get_the_tags()): ?>
                                    <div class="mb-2">
                                        <strong>Tags:</strong>
                                        <?php the_tags("", ", "); ?>
                                    </div>
                                <?php endif; ?>

                                <?php edit_post_link(
                                    "Editar post",
                                    '<div class="mt-3">',
                                    "</div>",
                                ); ?>

                            </footer>



                            <?php comments_template(); ?>

                        </article>

                <?php
                    endwhile;
                endif; ?>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
