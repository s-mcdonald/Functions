<?php


if (!function_exists('slugify')) {
    function slugify(string|Stringable $string, string $divider = '-'): string
    {
        $text = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);

        $slug = strtolower(
            trim($text, $divider)
        );

        return empty($slug) ? '-' : $slug;
    }
}
