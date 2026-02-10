<?php
$handle = $args["handle"] ?? null;

if (!$handle) {
    return;
}

$banner = get_option_banner($handle);

if (!$banner) {
    return;
}
?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="lh-1" data-aos="fade-up" data-aos-duration="1000">
                    <?php echo wp_kses_post($banner["texto_superior"]); ?>
                </h1>
                <div
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <?php echo wp_kses_post($banner["texto_inferior"]); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div
                    class="arrow-right home-image container-image bp-center rounded-5 p-4"
                    style="background-image:url('<?php echo esc_url(
                        $banner["imagen"],
                    ); ?>');"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <?php if (is_home()): ?>
                        <a href="<?php echo esc_url(get_permalink(5334)); ?>">
                            Contáctanos
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
