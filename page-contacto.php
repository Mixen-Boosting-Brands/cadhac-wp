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

<section class="py-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    Escríbenos.
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-xl-0">
                <div id="form-messages"></div>

                <form
                    action="./mailer.php"
                    method="POST"
                    class="row g-3 needs-validation contact-form"
                    id="ajax-contact"
                    novalidate
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div class="row">
                        <div class="col-md-12 form-floating mb-4">
                            <input
                                type="text"
                                class="form-control shadow-none"
                                id="nombre"
                                name="nombre"
                                placeholder="Nombre completo*"
                                pattern=".{5,50}"
                                required
                            />
                            <label for="nombre" class="form-label"
                                >Nombre completo*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu nombre completo.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-4">
                            <input
                                type="email"
                                class="form-control shadow-none"
                                id="correo"
                                name="correo"
                                placeholder="Correo electrónico*"
                                required
                            />
                            <label for="correo" class="form-label"
                                >Correo electrónico*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce una dirección de
                                correo válida.
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-4">
                            <input
                                type="tel"
                                class="form-control shadow-none"
                                id="telefono"
                                name="telefono"
                                placeholder="Teléfono*"
                                required
                            />
                            <label for="telefono" class="form-label"
                                >Teléfono*</label
                            >
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce un número de
                                teléfono válido.
                            </div>
                        </div>
                        <div class="col-md-12 form-floating mb-4">
                            <textarea
                                class="form-control shadow-none"
                                id="mensaje"
                                name="mensaje"
                                placeholder="Mensaje*"
                                style="height: 100px"
                                required
                            ></textarea>
                            <label for="mensaje">Mensaje*</label>
                            <div class="valid-feedback">
                                ¡Se ve bien!
                            </div>
                            <div class="invalid-feedback">
                                Por favor introduce tu mensaje.
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <div id="hold-on-a-sec">
                                <i
                                    id="contact-spinner"
                                    class="fas fa-spinner fa-spin"
                                ></i>
                                Por favor espera..
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button
                                type="submit"
                                class="btn btn-primary btn-lg btn-block rounded-pill"
                            >
                                <i class="fa-solid fa-paper-plane"></i>
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Puedes escribirnos para solicitar orientación,
                    compartir información, proponer una alianza,
                    solicitar una reunión o hacer una consulta general.
                </p>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <strong
                        >Nuestro equipo dará seguimiento a tu
                        mensaje.</strong
                    >
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-60">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    ¿Necesitas <span>ayuda?</span>
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Selecciona tu situación para ver los pasos a seguir.
                    <strong>En CADHAC te acompañamos.</strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <div
                    class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div>
                        <h1 class="card-title">Desaparición</h1>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/necesitas-ayuda/ico-1@2x.png"
                            class="ico my-5"
                            alt=""
                        />
                        <div class="card-body">
                            <ul>
                                <li>
                                    No esperes 72 horas. La búsqueda
                                    debe ser inmediata.
                                </li>
                                <li>
                                    Acude al CODE (Centro de Orientación
                                    y Denuncia) más cercano.
                                </li>
                                <li>
                                    Lleva una fotografía reciente, datos
                                    generales y señas particulares.
                                </li>
                                <li>
                                    Solicita tu número de reporte y
                                    copia de la denuncia.
                                </li>
                            </ul>
                            <p>
                                <span class="highlighted"
                                    >Importante:</span
                                > Contáctanos si tienes dudas o más
                                información.
                            </p>
                            <p>
                                <a href="tel:+528183435058">
                                    <span class="highlighted"
                                        >Tel: 81 8343 5058</span
                                    >
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div
                    class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div>
                        <h1 class="card-title">Contacto directo</h1>
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri(),
                            ); ?>/assets/images/necesitas-ayuda/ico-2@2x.png"
                            class="ico my-5"
                            alt=""
                        />
                        <div class="card-body">
                            <ul>
                                <li>
                                    No esperes 72 horas. La búsqueda
                                    debe ser inmediata.
                                </li>
                                <li>
                                    Acude al CODE (Centro de Orientación
                                    y Denuncia) más cercano.
                                </li>
                                <li>
                                    Lleva una fotografía reciente, datos
                                    generales y señas particulares.
                                </li>
                                <li>
                                    Solicita tu número de reporte y
                                    copia de la denuncia.
                                </li>
                            </ul>
                            <p>
                                <span class="highlighted"
                                    >Importante:</span
                                > Contáctanos si tienes dudas o más
                                información.
                            </p>
                            <p>
                                <a href="tel:+528183435058">
                                    <span class="highlighted"
                                        >Tel: 81 8343 5058</span
                                    >
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
