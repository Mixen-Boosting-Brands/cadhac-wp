<?php
$card = get_field("componente_tarjeta_de_contacto", "option");

if (!$card) {
    return;
}

$telefono = $card["telefono"] ?? "";
$direccion = $card["direccion"] ?? "";
$horario = $card["horario_de_atencion"] ?? "";
?>

<div
    class="card card-contacto rounded-5 mb-4 mb-lg-0 p-4"
    data-aos="fade-up"
    data-aos-duration="1000"
    data-aos-delay="100"
>

    <!-- Teléfono -->
    <?php if (!empty($telefono)): ?>
        <div class="row mb-md-3">

            <div class="col-3 col-sm-2 col-lg-3 text-center">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/contacto/ico-1@2x.png"
                    alt="Teléfono general"
                    class="ico"
                />
            </div>

            <div class="col-9 col-sm-10 col-lg-9">
                <h4>Teléfono general:</h4>

                <p>
                    <a href="tel:<?php echo esc_attr(
                        get_mx_tel_link($telefono),
                    ); ?>">
                        <?php echo esc_html(format_mx_phone($telefono)); ?>
                    </a>
                </p>
            </div>

        </div>
    <?php endif; ?>

    <!-- Dirección -->
    <?php if (!empty($direccion)): ?>
        <div class="row mb-md-3">

            <div class="col-3 col-sm-2 col-lg-3 text-center">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/contacto/ico-2@2x.png"
                    alt="Ubicación"
                    class="ico"
                />
            </div>

            <div class="col-9 col-sm-10 col-lg-9">
                <h4>Ubicación:</h4>

                <address>
                    <?php echo esc_html($direccion); ?>
                </address>
            </div>

        </div>
    <?php endif; ?>

    <!-- Horario -->
    <?php if (!empty($horario)): ?>
        <div class="row">

            <div class="col-3 col-sm-2 col-lg-3 text-center">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri(),
                    ); ?>/assets/images/contacto/ico-3@2x.png"
                    alt="Horario de atención"
                    id="ico-horario"
                    class="ico"
                />
            </div>

            <div class="col-9 col-sm-10 col-lg-9">
                <h4>Horario de atención:</h4>

                <p>
                    <?php echo esc_html($horario); ?>
                </p>
            </div>

        </div>
    <?php endif; ?>

</div>
