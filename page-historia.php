<?php
/*
Template Name: Historia
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_historia",
]); ?>

<?php
$pagina_historia = get_field("pagina_historia", "option");

if (!$pagina_historia) {
    return;
}

/* =========================
   BLOQUE 2
========================= */

$bloque_2 = $pagina_historia["bloque_2"] ?? null;

$texto_superior = $bloque_2["texto_superior"] ?? "";
$texto_inferior = $bloque_2["texto_inferior"] ?? "";
$imagen_bloque = $bloque_2["imagen"] ?? "";

/* =========================
   MVV
========================= */

$mision = $pagina_historia["mision"] ?? null;
$vision = $pagina_historia["vision"] ?? null;
$valores = $pagina_historia["valores"] ?? null;
?>

<section class="pt-60 pb-30">
    <div class="container-fluid">

        <!-- Intro -->
        <div class="row">
            <div class="col-lg-6">
                <?php if (!empty($texto_superior)): ?>
                    <h1
                        class="lh-1"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
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

        <div class="row">
            <!-- Imagen -->
            <div class="col-lg-6">
                <?php if (!empty($imagen_bloque)): ?>
                    <div
                        class="arrow-right home-image container-image bp-center rounded-5 mb-5 mb-lg-0 p-4"
                        style="background-image:url('<?php echo esc_url(
                            $imagen_bloque,
                        ); ?>');"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    ></div>
                <?php endif; ?>
            </div>

            <!-- Cards Stack -->
            <div class="col-lg-6">
                <div class="cards-stack" id="mvvStack">
                    <div class="cards-stack-indicator">
                        👆 Toca cada tarjeta para ver más
                    </div>

                    <!-- Misión -->
                    <?php if ($mision): ?>
                        <div
                            class="card card-ico-left rounded-5 p-4 cards-stack__card"
                            data-index="0"
                        >
                            <div>

                                <div class="row">
                                    <div class="col-6 my-auto">
                                        <h1 class="card-title">Misión</h1>
                                    </div>

                                    <div class="col-6 my-auto text-end">
                                        <?php if (!empty($mision["icono"])): ?>
                                            <img
                                                src="<?php echo esc_url(
                                                    $mision["icono"],
                                                ); ?>"
                                                class="ico"
                                                alt="Misión"
                                                loading="lazy"
                                            />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if (!empty($mision["texto"])): ?>
                                    <div class="card-body">
                                        <?php echo wp_kses_post(
                                            $mision["texto"],
                                        ); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Visión -->
                    <?php if ($vision): ?>
                        <div
                            class="card card-ico-left rounded-5 p-4 cards-stack__card"
                            data-index="1"
                        >
                            <div>

                                <div class="row">
                                    <div class="col-6 my-auto">
                                        <h1 class="card-title">Visión</h1>
                                    </div>

                                    <div class="col-6 my-auto text-end">
                                        <?php if (!empty($vision["icono"])): ?>
                                            <img
                                                src="<?php echo esc_url(
                                                    $vision["icono"],
                                                ); ?>"
                                                class="ico"
                                                alt="Visión"
                                                loading="lazy"
                                            />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if (!empty($vision["texto"])): ?>
                                    <div class="card-body">
                                        <?php echo wp_kses_post(
                                            $vision["texto"],
                                        ); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Valores -->
                    <?php if ($valores): ?>
                        <div
                            class="card card-ico-left rounded-5 p-4 cards-stack__card"
                            data-index="2"
                        >
                            <div>
                                <div class="row">
                                    <div class="col-6 my-auto">
                                        <h1 class="card-title">Valores</h1>
                                    </div>

                                    <div class="col-6 my-auto text-end">
                                        <?php if (!empty($valores["icono"])): ?>
                                            <img
                                                src="<?php echo esc_url(
                                                    $valores["icono"],
                                                ); ?>"
                                                class="ico"
                                                alt="Valores"
                                                loading="lazy"
                                            />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if (!empty($valores["texto"])): ?>
                                    <div class="card-body">
                                        <?php echo wp_kses_post(
                                            $valores["texto"],
                                        ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1
                    class="lh-1"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Más de 30<br />
                    años <span>acompañando</span>
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    A lo largo de los años, CADHAC ha caminado junto a
                    personas y comunidades en momentos difíciles,
                    <strong
                        >apostando siempre por la escucha, el respeto y
                        la acción</strong
                    >.
                </p>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Nuestro trabajo se ha transformado con el tiempo,
                    pero el corazón sigue siendo el mismo: estar
                    presentes, acompañar y no soltar.
                </p>
                <a
                    class="btn btn-primary rounded-pill"
                    href="#"
                    download
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <i class="fa-solid fa-circle-arrow-down"></i>
                    Descargar Memoria CADHAC - 30 años</a
                >
            </div>
            <div class="col-lg-6">
                <div
                    class="arrow-right home-image container-image bp-center rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-acompanamiento-2.png&quot;);
                    "
                    data-aos="fade-up"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                ></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <div
                    class="bottom-text-image container-image bp-center rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-j-4.png&quot;);
                    "
                    data-aos="fade-up"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <h1>
                        Nuestra historia continúa, junto a las personas.
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
