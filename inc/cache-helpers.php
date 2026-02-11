<?php
add_action("save_post", function ($post_id) {
    // Evitar autosaves / revisions
    if (wp_is_post_revision($post_id)) {
        return;
    }
    if (wp_is_post_autosave($post_id)) {
        return;
    }

    // Solo posts del blog
    if (get_post_type($post_id) !== "post") {
        return;
    }

    $cats = [34, 86, 92, 12, 10, 11];

    foreach ($cats as $cat_id) {
        delete_transient("home_news_cat_" . $cat_id);
    }
});
