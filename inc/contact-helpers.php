<?php

/**
 * Obtiene datos de contacto desde Options
 */
function get_contact_data()
{
    static $cache = null;

    if ($cache !== null) {
        return $cache;
    }

    $data = get_field("datos_de_contacto", "option");

    if (!$data) {
        return null;
    }

    $cache = [
        "correo" => $data["correo"] ?? "",
        "telefono" => $data["telefono"] ?? "",
        "direccion" => $data["direccion"] ?? "",
        "instagram" => $data["instagram"] ?? "",
        "x" => $data["x"] ?? "",
        "youtube" => $data["youtube"] ?? "",
    ];

    return $cache;
}

/**
 * Formatea teléfono MX para mostrar
 * 8183435058 → 81 8343 5058
 */
function format_mx_phone($number)
{
    $number = preg_replace("/\D/", "", $number);

    if (strlen($number) !== 10) {
        return $number;
    }

    return substr($number, 0, 2) .
        " " .
        substr($number, 2, 4) .
        " " .
        substr($number, 6, 4);
}

/**
 * Devuelve tel link internacional
 * 8183435058 → +528183435058
 */
function get_mx_tel_link($number)
{
    $number = preg_replace("/\D/", "", $number);

    if (!$number) {
        return null;
    }

    return "+52" . $number;
}
