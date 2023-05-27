<?php

declare(strict_types=1);

namespace SamMcDonald\Functions;

if (!function_exists('slugify')) {
    function slugify(string $string, string $divider = '-'): string
    {
        $slug = strtolower(
            trim(
                preg_replace('/[^A-Za-z0-9-]+/', $divider, $string),
                $divider)
        );

        return empty($slug) ? '-' : $slug;
    }
}
