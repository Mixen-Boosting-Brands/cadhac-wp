<?php
/*
Template Name: Mediateca
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_mediateca",
]); ?>

<?php
$is_publicacion = has_category(32, get_the_ID());
$is_video = has_category(93, get_the_ID());
$pdf = get_field("pdf_file", get_the_ID());
?>

<div class="text-end">

    <?php if ($is_publicacion): ?>

        <?php if ($pdf): ?>

            <!-- Descargar PDF -->
            <a
                href="<?php echo esc_url($pdf); ?>"
                class="btn btn-primary rounded-pill"
                download
            >
                <i class="fa-solid fa-file-pdf"></i>
                Descargar PDF
            </a>

        <?php else: ?>

            <!-- Ver más (fallback publicaciones) -->
            <a
                href="<?php the_permalink(); ?>"
                class="btn btn-primary rounded-pill"
            >
                <i class="fa-solid fa-arrow-right"></i>
                Ver más
            </a>

        <?php endif; ?>

    <?php elseif ($is_video): ?>

        <!-- Ver video -->
        <a
            href="<?php the_permalink(); ?>"
            class="btn btn-primary rounded-pill"
        >
            <i class="fa-solid fa-play"></i>
            Ver video
        </a>

    <?php else: ?>

        <!-- Fallback global -->
        <a
            href="<?php the_permalink(); ?>"
            class="btn-card"
        >
            <i class="fas fa-arrow-right"></i>
        </a>

    <?php endif; ?>

</div>

<?php get_footer(); ?>
