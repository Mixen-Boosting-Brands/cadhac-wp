<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_contacto",
]); ?>

<?php
$pagina_contacto = get_field("pagina_contacto", "option");

$bloque_2 = $pagina_contacto["bloque_2"] ?? null;

if (!$bloque_2) {
    return;
}

$texto_superior = $bloque_2["texto_superior"] ?? "";
$texto_inferior = $bloque_2["texto_inferior"] ?? "";
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <!-- Título -->
        <?php if (!empty($texto_superior)): ?>
            <div class="row mb-4">
                <div class="col-12">
                    <h1
                        class="lh-1"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <!-- Texto -->
            <?php if (!empty($texto_inferior)): ?>
                <div class="col-lg-6">
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Card reutilizable -->
            <div class="col-lg-6">
                <?php get_template_part(
                    "template-parts/contact/card-contact",
                ); ?>
            </div>
        </div>
    </div>
</section>

<?php
$pagina_contacto = get_field("pagina_contacto", "option");

$bloque_3 = $pagina_contacto["bloque_3"] ?? null;

if (!$bloque_3) {
    return;
}

$texto_superior = $bloque_3["texto_superior"] ?? "";
$texto_inferior = $bloque_3["texto_inferior"] ?? "";
?>

<section class="py-30">
    <div class="container-fluid">
        <!-- Título -->
        <?php if (!empty($texto_superior)): ?>
            <div class="row mb-4">
                <div class="col-12">

                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>

                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-xl-0">
                <?php echo do_shortcode(
                    '[contact-form-7 id="b686994" title="Contacto"]',
                ); ?>
            </div>
            <!-- Texto -->
            <div class="col-lg-6">
                <?php if (!empty($texto_inferior)): ?>
                    <div
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
