<?php
/*
Template Name: Vacantes
*/
get_header(); ?>

<?php get_template_part("template-parts/banners/banner-options", null, [
    "handle" => "pagina_vacantes",
]); ?>

<?php
/* =========================
   CF → pagina_vacantes
========================= */

$pagina_vacantes = get_field("pagina_vacantes", "option");

if (!$pagina_vacantes) {
    return;
}

$tarjetas = $pagina_vacantes["tarjetas"] ?? null;

if (!$tarjetas) {
    return;
}

/* =========================
   Textos
========================= */

$texto_superior = $tarjetas["texto_superior"] ?? "";
$texto_inferior = $tarjetas["texto_inferior"] ?? "";

/* =========================
   Tarjetas
========================= */

$items = [
    $tarjetas["tarjeta_1"] ?? null,
    $tarjetas["tarjeta_2"] ?? null,
    $tarjetas["tarjeta_3"] ?? null,
    $tarjetas["tarjeta_4"] ?? null,
];

/* Filtrar vacías */
$items = array_filter($items);

if (empty($items)) {
    return;
}
?>

<section class="pt-60 pb-30">

    <div class="container-fluid">

        <!-- =========================
             Header
        ========================== -->
        <div class="row mb-4">

            <div class="col-12 text-center">

                <?php if ($texto_superior): ?>
                    <h1
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($texto_inferior): ?>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php echo wp_kses_post($texto_inferior); ?>
                    </p>
                <?php endif; ?>

            </div>

        </div>

        <!-- =========================
             Cards
        ========================== -->
        <div class="row mb-5">

            <?php
            $delay = 100;

            foreach ($items as $item):

                $icono = $item["icono"] ?? "";
                $texto = $item["texto"] ?? "";
                ?>

                <div class="col-md-6 col-lg-3">

                    <div
                        class="card card-ico-center rounded-5 mb-4 mb-lg-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo esc_attr($delay); ?>"
                    >

                        <div>

                            <?php if ($icono): ?>
                                <img
                                    src="<?php echo esc_url($icono); ?>"
                                    class="ico"
                                    alt=""
                                    loading="lazy"
                                    decoding="async"
                                />
                            <?php endif; ?>

                            <?php if ($texto): ?>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php echo wp_kses_post($texto); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php $delay += 100;
            endforeach;
            ?>

        </div>

    </div>

</section>

<section id="listado-vacantes" class="pt-30 pb-60">
    <div class="container-fluid">
        <div class="row">
            <!-- Full Width Card -->
            <div class="col-12">
                <div class="card rounded-5 mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img
                                src="./assets/images/vacantes/thumb-card.png"
                                class="img-fluid rounded-start"
                                alt=""
                            />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <span>
                                    Monterrey, Nuevo León
                                </span>
                                <a href="#">
                                    <h1
                                        class="card-title"
                                    >
                                        Vacante - <span>Área Jurídica</span>
                                    </h1>
                                </a>
                                <p class="card-text">
                                    <strong>
                                        Únete a la promoción y defensa de los derechos humanos desde el acompañamiento jurídico integral.
                                    </strong>
                                </p>
                                <p class="card-text">
                                    En CADHAC buscamos a una persona comprometida con los derechos humanos para integrarse al área jurídica, acompañando a víctimas y familias en procesos de exigencia de verdad y justicia, con una mirada ética, sensible y profesional.
                                </p>
                                <ul class="list-unstyled">
                                    <li>
                                        📩 Envía tu CV a <a href="mailto:nadia.gh@cadhac.org">nadia.gh@cadhac.org</a>
                                    </li>
                                    <li>
                                        📌 Asunto: "Jurídico"
                                    </li>
                                </ul>
                                <div class="text-end">
                                    <a
                                        href="#"
                                        class="btn-card"
                                    >
                                        <i
                                            class="fas fa-arrow-right"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Card -->
            <div class="col-12">
                <div class="card rounded-5 mb-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img
                                src="./assets/images/vacantes/thumb-card.png"
                                class="img-fluid rounded-start"
                                alt=""
                            />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <span>
                                    Monterrey, Nuevo León
                                </span>
                                <a href="#">
                                    <h1
                                        class="card-title"
                                    >
                                        Vacante - <span>Abogada/Abogado</span>
                                    </h1>
                                </a>
                                <p class="card-text">
                                    <strong>
                                        Para integrarse al área jurídica de CADHAC.
                                    </strong>
                                </p>
                                <p class="card-text">
                                    En CADHAC buscamos a una persona comprometida con los derechos humanos para integrarse al área jurídica, acompañando a víctimas y familias en procesos de exigencia de verdad y justicia, con una mirada ética, sensible y profesional.
                                </p>
                                <ul class="list-unstyled">
                                    <li>
                                        📩 Envía tu CV a <a href="mailto:nadia.gh@cadhac.org">nadia.gh@cadhac.org</a>
                                    </li>
                                    <li>
                                        📌 Asunto: "Jurídico"
                                    </li>
                                </ul>
                                <div class="text-end">
                                    <a
                                        href="#"
                                        class="btn-card"
                                    >
                                        <i
                                            class="fas fa-arrow-right"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pagina_vacantes = get_field("pagina_vacantes", "option");
$banner_vacantes = $pagina_vacantes["banner_vacantes"] ?? null;
?>

<?php if ($banner_vacantes): ?>

    <?php
    $texto = $banner_vacantes["texto"] ?? "";
    $imagen = $banner_vacantes["imagen"] ?? "";
    ?>

    <?php if (!empty($imagen)): ?>
        <section
            class="cta py-60"
            style="background-image:url('<?php echo esc_url($imagen); ?>');"
        >
    <?php else: ?>
        <section class="cta py-60">
    <?php endif; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 arrow-right p-5 text-center">
                        <?php if (!empty($texto)): ?>
                            <h1>
                                <?php echo wp_kses_post($texto); ?>
                            </h1>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
