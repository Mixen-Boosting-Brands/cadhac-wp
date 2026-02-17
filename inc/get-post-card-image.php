<?php
/**
 * Obtiene imagen para cards de posts
 * Prioridad:
 * 1. Featured image (size: card)
 * 2. Primera imagen del content (intenta size card)
 * 3. Thumbnail de YouTube (si hay embed/url)
 * 4. Fallback default theme
 */
function get_post_card_image($post_id)
{
    /* ========================================
       1. Featured image → size card
    ======================================== */
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, "card");
    }

    /* ========================================
       2. Primera imagen del content
    ======================================== */
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

    /* ========================================
       3. YouTube thumbnail fallback
    ======================================== */

    // Detectar iframe embed
    preg_match('/youtube\.com\/embed\/([^\?&"\']+)/', $content, $youtube_embed);

    // Detectar watch URL
    preg_match(
        '/youtube\.com\/watch\?v=([^\?&"\']+)/',
        $content,
        $youtube_watch,
    );

    // Detectar short URL
    preg_match('/youtu\.be\/([^\?&"\']+)/', $content, $youtube_short);

    $video_id =
        $youtube_embed[1] ?? ($youtube_watch[1] ?? ($youtube_short[1] ?? null));

    if ($video_id) {
        // Intentar maxres primero
        $maxres = "https://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";

        if (@getimagesize($maxres)) {
            return $maxres;
        }

        // Fallback seguro
        return "https://img.youtube.com/vi/{$video_id}/hqdefault.jpg";
    }

    /* ========================================
       4. Fallback default theme
    ======================================== */
    return get_template_directory_uri() . "/assets/images/thumb-card.png";
}
