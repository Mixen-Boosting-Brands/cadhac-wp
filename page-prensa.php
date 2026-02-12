<?php
/*
Template Name: Prensa
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_prensa",
]); ?>

<?php
/* =========================
   TARJETAS PRESS KIT
========================= */

$tarjetas_group = $pagina_prensa["tarjetas"] ?? null;

if ($tarjetas_group):

    $texto_superior = $tarjetas_group["texto_superior"] ?? "";
    $texto_inferior = $tarjetas_group["texto_inferior"] ?? "";

    $cards = [
        $tarjetas_group["tarjeta_1"] ?? null,
        $tarjetas_group["tarjeta_2"] ?? null,
        $tarjetas_group["tarjeta_3"] ?? null,
        $tarjetas_group["tarjeta_4"] ?? null,
        $tarjetas_group["tarjeta_5"] ?? null,
    ];

    // Filtrar tarjetas vacías
    $cards = array_filter($cards);
    ?>

<!-- Intro dinámico -->
<div class="row mb-4">
    <div class="col-12">
        <?php if (!empty($texto_superior)): ?>
            <h1 data-aos="fade-up" data-aos-duration="1000">
                <?php echo wp_kses_post($texto_superior); ?>
            </h1>
        <?php endif; ?>

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

<!-- Tarjetas -->
<?php if (!empty($cards)): ?>
<div
    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-5"
>
    <?php
    $delay = 100;

    foreach ($cards as $card):

        $icono = $card["icono"] ?? "";
        $texto = $card["texto"] ?? "";
        $archivo = $card["archivo"] ?? "";
        ?>
        <div class="col">
            <div
                class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="<?php echo esc_attr($delay); ?>"
            >
                <div>

                    <?php if (!empty($icono)): ?>
                        <img
                            src="<?php echo esc_url($icono); ?>"
                            class="ico"
                            alt=""
                            loading="lazy"
                        />
                    <?php endif; ?>

                    <div class="card-body">

                        <?php if (!empty($texto)): ?>
                            <div class="card-text">
                                <?php echo wp_kses_post($texto); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($archivo)): ?>
                            <a
                                class="btn btn-primary rounded-pill"
                                href="<?php echo esc_url($archivo); ?>"
                                download
                            >
                                <i class="fa-solid fa-circle-arrow-down"></i>
                                Descargar
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

    <?php $delay += 100;
    endforeach;
    ?>
</div>
<?php endif; ?>

<!-- Ver más -->
<div class="row">
    <div class="col-12 text-center">

        <a
            class="btn btn-primary btn-lg rounded-pill"
            href="<?php echo esc_url(get_category_link(86)); ?>"
        >
            Ver más comunicados
        </a>

    </div>
</div>

<?php
endif;
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h1
                    class="lh-1"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Contacto <span>para</span><br />
                    medios
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Para solicitudes de entrevista, información
                    adicional o aclaraciones, favor de contactar a:
                </p>
                <?php get_template_part(
                    "template-parts/contact/card-contact",
                ); ?>
            </div>
            <div class="col-lg-6">
                <div
                    class="arrow-right home-image container-image bp-center rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-prensa.png&quot;);
                    "
                    data-aos="fade-up"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                ></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
