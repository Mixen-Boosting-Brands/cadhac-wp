<?php
$data = get_field("componente_necesitas_ayuda", "option");

if (!$data) {
    return;
}

/* ================================
   TEXTOS
================================ */
$texto_superior = $data["texto_superior"] ?? "";
$texto_inferior = $data["texto_inferior"] ?? "";

/* ================================
   TARJETAS (1 → 4)
================================ */
$cards = [];

for ($i = 1; $i <= 4; $i++) {
    $card = $data["tarjeta_{$i}"] ?? null;

    if (
        $card &&
        (!empty($card["titulo"]) ||
            !empty($card["texto"]) ||
            !empty($card["icono"]))
    ) {
        $cards[] = $card;
    }
}

$total = count($cards);

if ($total === 0) {
    return;
}
?>

<section id="necesitas-ayuda" class="<?php if (
    is_home()
): ?>pt-60 pb-30<?php else: ?>py-60<?php endif; ?>">
    <div class="container-fluid">

        <!-- Intro -->
        <div class="row mb-4">
            <div class="col-12 text-center">

                <?php if ($texto_superior): ?>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        <?php echo wp_kses_post($texto_superior); ?>
                    </h1>
                <?php endif; ?>

                <?php if ($texto_inferior): ?>
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

        <?php /* ================================
           GRID CONFIG
        ================================= */
        if ($total === 1) {
            $cols = ["col-lg-4 offset-lg-4"];
        } elseif ($total === 2) {
            $cols = ["col-lg-4 offset-lg-2", "col-lg-4"];
        } elseif ($total === 3) {
            $cols = ["col-lg-4", "col-lg-4", "col-lg-4"];
        } else {
            // 4 cards
            $cols = ["col-lg-6", "col-lg-6", "col-lg-6", "col-lg-6"];
        } ?>

        <div class="row">

            <?php foreach ($cards as $i => $card):

                $icono = $card["icono"] ?? "";
                $titulo = $card["titulo"] ?? "";
                $texto = $card["texto"] ?? "";

                /* AOS direction */
                $aos = $i % 2 === 0 ? "fade-right" : "fade-left";

                /* Delay escalonado */
                $delay = ($i + 1) * 100;
                ?>

                <div class="<?php echo esc_attr($cols[$i]); ?>">

                    <div
                        class="card card-ico-left rounded-5 mb-4 mb-lg-0 p-4"
                        data-aos="<?php echo esc_attr($aos); ?>"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo esc_attr($delay); ?>"
                    >
                        <div>

                            <?php if ($titulo): ?>
                                <h1 class="card-title">
                                    <?php echo esc_html($titulo); ?>
                                </h1>
                            <?php endif; ?>

                            <?php if ($icono): ?>
                                <img
                                    src="<?php echo esc_url($icono); ?>"
                                    class="ico my-5"
                                    alt="<?php echo esc_attr($titulo); ?>"
                                    loading="lazy"
                                    decoding="async"
                                />
                            <?php endif; ?>

                            <?php if ($texto): ?>
                                <div class="card-body">
                                    <?php echo wp_kses_post($texto); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

            <?php
            endforeach; ?>

        </div>

    </div>
</section>
