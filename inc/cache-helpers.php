<?php
add_action("save_post", function () {
    $cats = [34, 86, 92, 12, 10, 11];

    foreach ($cats as $cat_id) {
        delete_transient("home_news_cat_" . $cat_id);
    }
});
