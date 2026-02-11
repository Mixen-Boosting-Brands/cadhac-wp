<?php get_header(); ?>

<section class="error-404 py-60 text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="error-content">
                    <!-- Código -->
                    <h1 class="display-1 fw-bold mb-3">
                        404
                    </h1>

                    <!-- Título -->
                    <h2 class="mb-3">
                        Página no encontrada
                    </h2>

                    <!-- Texto -->
                    <p class="mb-4">
                        Lo sentimos, la página que buscas no existe,
                        fue movida o eliminada.
                    </p>

                    <!-- CTA -->
                    <a
                        href="<?php echo esc_url(home_url()); ?>"
                        class="btn btn-primary btn-lg rounded-pill"
                    >
                        <i class="fa-solid fa-arrow-left me-2"></i>
                        Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
