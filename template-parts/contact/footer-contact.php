<?php
/**
 * Footer Contact Block
 * Muestra dirección + teléfono + correo + redes
 */

$data = get_contact_data();

if (!$data) {
    return;
}
?>

<ul class="list-unstyled">

    <?php if (!empty($data["direccion"])): ?>
        <li>
            <address>
                <?php echo wp_kses_post($data["direccion"]); ?>
            </address>
        </li>
    <?php endif; ?>

    <?php if (!empty($data["telefono"])): ?>
        <li>
            <a
                href="tel:<?php echo esc_attr(
                    get_mx_tel_link($data["telefono"]),
                ); ?>"
                target="_blank"
            >
                <?php echo esc_html(format_mx_phone($data["telefono"])); ?>
            </a>
        </li>
    <?php endif; ?>

    <?php if (!empty($data["correo"])): ?>
        <li>
            <a
                href="mailto:<?php echo antispambot($data["correo"]); ?>"
                target="_blank"
            >
                <?php echo esc_html($data["correo"]); ?>
            </a>
        </li>
    <?php endif; ?>

</ul>

<ul class="social list-inline mb-4 mb-md-0">

    <?php if (!empty($data["instagram"])): ?>
        <li class="list-inline-item">
            <a
                href="<?php echo esc_url($data["instagram"]); ?>"
                target="_blank"
                rel="noopener"
            >
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    <?php endif; ?>

    <?php if (!empty($data["x"])): ?>
        <li class="list-inline-item">
            <a
                href="<?php echo esc_url($data["x"]); ?>"
                target="_blank"
                rel="noopener"
            >
                <i class="fab fa-x-twitter"></i>
            </a>
        </li>
    <?php endif; ?>

    <?php if (!empty($data["youtube"])): ?>
        <li class="list-inline-item">
            <a
                href="<?php echo esc_url($data["youtube"]); ?>"
                target="_blank"
                rel="noopener"
            >
                <i class="fab fa-youtube"></i>
            </a>
        </li>
    <?php endif; ?>

</ul>
