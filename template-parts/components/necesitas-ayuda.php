<?php
$data = get_field("componente_necesitas_ayuda", "option");

if (!$data) {
    return;
}

$texto_superior = $data["texto_superior"] ?? "";
$texto_inferior = $data["texto_inferior"] ?? "";

$tarjeta_1 = $data["tarjeta_1"] ?? null;
$tarjeta_2 = $data["tarjeta_2"] ?? null;
?>

<section class="py-60">
    <div class="container-fluid">
        <!-- Intro -->
        <div class="row mb-4">
            <div class="col-12 text-center">
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

        <div class="row">
            <!-- Tarjeta 1 -->
            <?php if ($tarjeta_1): ?>
                <div class="col-lg-4 offset-lg-2">
                    <div
                        class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <div>
                            <?php if (!empty($tarjeta_1["titulo"])): ?>
                                <h1 class="card-title">
                                    <?php echo esc_html(
                                        $tarjeta_1["titulo"],
                                    ); ?>
                                </h1>
                            <?php endif; ?>

                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/necesitas-ayuda/ico-1@2x.png"
                                class="ico my-5"
                                alt=""
                            />

                            <?php if (!empty($tarjeta_1["texto"])): ?>
                                <div class="card-body">
                                    <?php echo wp_kses_post(
                                        $tarjeta_1["texto"],
                                    ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Tarjeta 2 -->
            <?php if ($tarjeta_2): ?>
                <div class="col-lg-4">

                    <div
                        class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <div>
                            <?php if (!empty($tarjeta_2["titulo"])): ?>
                                <h1 class="card-title">
                                    <?php echo esc_html(
                                        $tarjeta_2["titulo"],
                                    ); ?>
                                </h1>
                            <?php endif; ?>

                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri(),
                                ); ?>/assets/images/necesitas-ayuda/ico-2@2x.png"
                                class="ico my-5"
                                alt=""
                            />

                            <?php if (!empty($tarjeta_2["texto"])): ?>
                                <div class="card-body">
                                    <?php echo wp_kses_post(
                                        $tarjeta_2["texto"],
                                    ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
