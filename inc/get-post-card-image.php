<?php
/**
 * Obtiene imagen para cards de posts
 * Prioridad:
 * 1. Featured image (size: card)
 * 2. Primera imagen del content (intenta size card)
 * 3. Fallback default theme
 */
function get_post_card_image($post_id)
{
    // 1. Featured image → size card
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, "card");
    }

    // 2. Buscar primera imagen en content
    $content = get_post_field("post_content", $post_id);

    preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);

    if (!empty($matches[1])) {
        $image_url = $matches[1];

        // Intentar convertir a size "card"
        $card_url = preg_replace(
            '/(\.(jpg|jpeg|png|webp))$/i',
            '-448x287$1',
            $image_url,
        );

        // Validar si existe el size generado
        if (@getimagesize($card_url)) {
            return $card_url;
        }

        // Si no existe → usar original
        return $image_url;
    }

    // 3. Fallback default
    return get_template_directory_uri() . "/assets/images/thumb-card.png";
}
