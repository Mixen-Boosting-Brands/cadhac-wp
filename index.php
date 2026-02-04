<?php get_header(); ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="lh-1" data-aos="fade-up" data-aos-duration="1000">
                    Promovemos y defendemos<br />
                    <span>la dignidad humana</span>
                </h1>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    Toda persona puede levantarse si el entorno la
                    acompaña. CADHAC busca ser parte de ese entorno.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div
                    class="arrow-right home-image container-image rounded-5 p-4"
                    style="
                        background-image: url(&quot;<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/bg-j-1.png&quot;);
                    "
                    data-aos="fade-up" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"
                >
                    <a href="#">
                        Contáctanos
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tabulador pt-60 pb-30">
    <div class="container-fluid">
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-6 my-auto">
                <h1>Noticias</h1>
            </div>
            <div class="col-6 my-auto text-end">
                <ul
                    class="nav nav-pills mb-0"
                    id="pills-noticias"
                    role="tablist"
                >
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill active"
                            id="pills-blog-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-blog"
                            type="button"
                            role="tab"
                            aria-controls="pills-blog"
                            aria-selected="true"
                        >
                            Blog
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill"
                            id="pills-comunicados-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-comunicados"
                            type="button"
                            role="tab"
                            aria-controls="pills-comunicados"
                            aria-selected="false"
                        >
                            Comunicados
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill"
                            id="pills-eventos-y-actividades-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-eventos-y-actividades"
                            type="button"
                            role="tab"
                            aria-controls="pills-eventos-y-actividades"
                            aria-selected="false"
                        >
                            Eventos y actividades
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link rounded-pill"
                            id="pills-actualizaciones-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-actualizaciones"
                            type="button"
                            role="tab"
                            aria-controls="pills-actualizaciones"
                            aria-selected="false"
                        >
                            Actualizaciones
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="col-12">
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Descubre relatos, aprendizajes y voces que mantienen
                    viva la memoria y fortalecen nuestra comunidad.
                </p>
                <div class="tab-content" id="pills-noticiasContent">
                    <div
                        class="tab-pane fade show active"
                        id="pills-blog"
                        role="tabpanel"
                        aria-labelledby="pills-blog-tab"
                        tabindex="0"
                    >
                        <div class="row">
                            <!-- One Third Card -->
                            <div class="col-lg-4">
                                <div
                                    class="card rounded-5 mb-4 mb-lg-0"
                                >
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri(),
                                        ); ?>/assets/images/thumb-card.png"
                                        class="card-img-top rounded-5"
                                        alt=""
                                    />
                                    <div class="card-body">
                                        <date class="card-date">
                                            29 Ene 2026
                                        </date>
                                        <a href="#">
                                            <h1 class="card-title">
                                                Caminos de esperanza
                                            </h1>
                                        </a>
                                        <p class="card-text">
                                            En esta entrada exploramos
                                            cómo el acompañamiento
                                            emocional transforma
                                            procesos complejos y
                                            dolorosos. Conversamos con
                                            familias que...
                                        </p>
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

                            <!-- One Third Card -->
                            <div class="col-lg-4">
                                <div
                                    class="card rounded-5 mb-4 mb-lg-0"
                                >
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri(),
                                        ); ?>/assets/images/thumb-card.png"
                                        class="card-img-top rounded-5"
                                        alt=""
                                    />
                                    <div class="card-body">
                                        <date class="card-date">
                                            29 Ene 2026
                                        </date>
                                        <a href="#">
                                            <h1 class="card-title">
                                                Caminos de esperanza
                                            </h1>
                                        </a>
                                        <p class="card-text">
                                            En esta entrada exploramos
                                            cómo el acompañamiento
                                            emocional transforma
                                            procesos complejos y
                                            dolorosos. Conversamos con
                                            familias que...
                                        </p>
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

                            <!-- One Third Card -->
                            <div class="col-lg-4">
                                <div
                                    class="card rounded-5 mb-4 mb-lg-0"
                                >
                                    <img
                                        src="<?php echo esc_url(
                                            get_template_directory_uri(),
                                        ); ?>/assets/images/thumb-card.png"
                                        class="card-img-top rounded-5"
                                        alt=""
                                    />
                                    <div class="card-body">
                                        <date class="card-date">
                                            29 Ene 2026
                                        </date>
                                        <a href="#">
                                            <h1 class="card-title">
                                                Caminos de esperanza
                                            </h1>
                                        </a>
                                        <p class="card-text">
                                            En esta entrada exploramos
                                            cómo el acompañamiento
                                            emocional transforma
                                            procesos complejos y
                                            dolorosos. Conversamos con
                                            familias que...
                                        </p>
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
                    <div
                        class="tab-pane fade"
                        id="pills-comunicados"
                        role="tabpanel"
                        aria-labelledby="pills-comunicados-tab"
                        tabindex="0"
                    >
                        Comunicados
                    </div>
                    <div
                        class="tab-pane fade"
                        id="pills-eventos-y-actividades"
                        role="tabpanel"
                        aria-labelledby="pills-eventos-y-actividades-tab"
                        tabindex="0"
                    >
                        Eventos
                    </div>
                    <div
                        class="tab-pane fade"
                        id="pills-actualizaciones"
                        role="tabpanel"
                        aria-labelledby="pills-actualizaciones-tab"
                        tabindex="0"
                    >
                        Actualizaciones
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img class="img-fluid rounded-5" src="<?php echo esc_url(
                    get_template_directory_uri(),
                ); ?>/assets/images/img-manos.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="comunidad" class="py-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <h1 data-aos="fade-right" data-aos-duration="1000">
                    Somos apoyo mútuo,<br>
                    <span>somos comunidad.</span>
                </h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 my-auto">
                <img id="thumb-comunidad-1" class="img-fluid mb-3 mb-lg-0" src="<?php echo esc_url(
                    get_template_directory_uri(),
                ); ?>/assets/images/thumb-comunidad-1.png" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            </div>
            <div class="col-lg-4 my-auto">
                <p data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100"><strong>CADHAC</strong> es un espacio seguro desde donde <strong>acompañamos a personas y familias</strong> en la búsqueda de verdad, justicia y dignidad. Desde hace <strong>más de 30 años</strong> defendemos derechos humanos desde el poder de la comunidad.</p>
            </div>
            <div class="col-lg-4 my-auto text-end">
                <img id="thumb-comunidad-2" class="img-fluid" src="<?php echo esc_url(
                    get_template_directory_uri(),
                ); ?>/assets/images/thumb-comunidad-2.png" alt="" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-end arrow-right">
                <a href="#">
                    <h2>
                        Conoce nuestra historia
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </h2>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pt-60 pb-30">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">¿Necesitas <span>ayuda?</span></h1>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Selecciona tu situación para ver los pasos a seguir. <strong>En CADHAC te acompañamos.</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <div class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div>
                        <h1 class="card-title">
                            Desaparición
                        </h1>
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
                                    No esperes 72 horas. La búsqueda debe ser inmediata.
                                </li>
                                <li>
                                    Acude al CODE (Centro de Orientación y Denuncia) más cercano.
                                </li>
                                <li>
                                    Lleva una fotografía reciente, datos generales y señas particulares.
                                </li>
                                <li>
                                    Solicita tu número de reporte y copia de la denuncia.
                                </li>
                            </ul>
                            <p><span class="highlighted">Importante:</span> Contáctanos si tienes dudas o más información.</p>
                            <p>
                                <a href="tel:+528183435058">
                                    <span class="highlighted">Tel: 81 8343 5058</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <div>
                        <h1 class="card-title">
                            Contacto directo
                        </h1>
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
                                    No esperes 72 horas. La búsqueda debe ser inmediata.
                                </li>
                                <li>
                                    Acude al CODE (Centro de Orientación y Denuncia) más cercano.
                                </li>
                                <li>
                                    Lleva una fotografía reciente, datos generales y señas particulares.
                                </li>
                                <li>
                                    Solicita tu número de reporte y copia de la denuncia.
                                </li>
                            </ul>
                            <p><span class="highlighted">Importante:</span> Contáctanos si tienes dudas o más información.</p>
                            <p>
                                <a href="tel:+528183435058">
                                    <span class="highlighted">Tel: 81 8343 5058</span>
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
