<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;


if (!function_exists('prevent_cache')) {
    /**
     * @deprecated Most if not all modern cms now have this built in.
     */
    function prevent_cache(): bool
    {
        if (!\headers_sent()) {
            \header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');;
            \header('Last-Modified: ' . \gmdate('D, d M Y H:i:s') . ' GMT');
            \header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            \header("Cache-Control: post-check=0, pre-check=0", false);
            \header("Pragma: no-cache");

            return true;
        }

        return false;
    }
}
