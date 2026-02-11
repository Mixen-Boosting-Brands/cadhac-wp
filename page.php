<?php get_header(); ?>

<section class="single-page py-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <article
                            id="page-<?php the_ID(); ?>"
                            <?php post_class("single-article"); ?>
                        >

                            <!-- Featured Image -->
                            <?php if (has_post_thumbnail()): ?>

                                <div class="post-thumbnail mb-4">
                                    <?php the_post_thumbnail("large", [
                                        "class" => "img-fluid rounded-5 w-100",
                                        "loading" => "eager",
                                        "alt" => get_the_title(),
                                    ]); ?>
                                </div>

                            <?php endif; ?>

                            <!-- Título -->
                            <h1 class="post-title mb-3">
                                <?php the_title(); ?>
                            </h1>

                            <!-- Contenido -->
                            <div class="post-content mb-5">
                                <?php the_content(); ?>
                            </div>


                            <!-- Edit link (solo admin) -->
                            <?php edit_post_link(
                                "Editar página",
                                '<div class="mt-3">',
                                "</div>",
                            ); ?>

                        </article>

                <?php
                    endwhile;
                endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
