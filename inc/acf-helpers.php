<?php
function get_option_banner($handle)
{
    if (!function_exists("get_field")) {
        return null;
    }

    $group = get_field($handle, "option");

    if (!$group || empty($group["banner"])) {
        return null;
    }

    return $group["banner"];
}
