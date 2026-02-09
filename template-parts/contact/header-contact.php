<?php
/**
 * Header Contact Block
 * Muestra redes + correo + teléfono
 */

$data = get_contact_data();

if (!$data) {
    return;
}
?>

<div id="social">
    <ul class="list-inline">

        <?php if (!empty($data["instagram"])): ?>
            <li class="list-inline-item">
                <a href="<?php echo esc_url(
                    $data["instagram"],
                ); ?>" target="_blank" rel="noopener">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($data["x"])): ?>
            <li class="list-inline-item">
                <a href="<?php echo esc_url(
                    $data["x"],
                ); ?>" target="_blank" rel="noopener">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($data["youtube"])): ?>
            <li class="list-inline-item">
                <a href="<?php echo esc_url(
                    $data["youtube"],
                ); ?>" target="_blank" rel="noopener">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>

    </ul>
</div>

<div id="contacto-menu">
    <ul class="list-unstyled">

        <?php if (!empty($data["correo"])): ?>
            <li>
                <i class="far fa-envelope"></i>

                <a href="mailto:<?php echo antispambot($data["correo"]); ?>">
                    <?php echo esc_html($data["correo"]); ?>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($data["telefono"])): ?>
            <li>
                <i class="fas fa-phone"></i>

                <a href="tel:<?php echo esc_attr(
                    get_mx_tel_link($data["telefono"]),
                ); ?>">
                    <?php echo esc_html(format_mx_phone($data["telefono"])); ?>
                </a>
            </li>
        <?php endif; ?>

    </ul>
</div>
