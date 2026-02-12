<?php
/*
Template Name: Prensa
*/
get_header(); ?>

<?php
$logos_group = $pagina_prensa["logos"] ?? null;

if ($logos_group):
    $logos = [
        $logos_group["logo_1"] ?? "",
        $logos_group["logo_2"] ?? "",
        $logos_group["logo_3"] ?? "",
        $logos_group["logo_4"] ?? "",
    ];

    $logos = array_filter($logos);

    if (!empty($logos)): ?>

        <div class="row mb-5">

            <?php
            $delay = 100; // Delay inicial

            foreach ($logos as $logo): ?>

                <div
                    class="col-lg-3 col-md-4 col-6 mb-4 text-center"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="<?php echo esc_attr($delay); ?>"
                >
                    <img
                        src="<?php echo esc_url($logo); ?>"
                        class="img-fluid prensa-logo"
                        alt="Logotipo"
                        loading="lazy"
                        decoding="async"
                    />
                </div>

            <?php $delay += 100;endforeach; // Incremento igual que cards
            ?>

        </div>

<?php endif;
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
