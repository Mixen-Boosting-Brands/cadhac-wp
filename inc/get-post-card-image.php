<?php
function get_post_card_image($post_id)
{
    // 1. Featured image
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, "large");
    }

    // 2. Buscar primera imagen en content
    $content = get_post_field("post_content", $post_id);

    preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);

    if (!empty($matches[1])) {
        return $matches[1];
    }

    // 3. Fallback default
    return get_template_directory_uri() . "/assets/images/thumb-card.png";
}
