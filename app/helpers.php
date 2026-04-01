<?php

if (! function_exists('storage_public_url')) {
    /**
     * Build a public URL for a path on the public disk (storage/app/public).
     * Normalizes duplicate slashes and leading slashes so DB values like "support//x/y.jpg" work.
     */
    function storage_public_url(?string $path): string
    {
        if ($path === null || $path === '') {
            return '';
        }

        $path = str_replace('\\', '/', trim($path));

        if (preg_match('#^https?://#i', $path)) {
            return $path;
        }

        $path = preg_replace('#/+#', '/', $path);
        $path = ltrim($path, '/');

        if ($path === '') {
            return '';
        }

        if (str_starts_with($path, 'storage/')) {
            return asset($path);
        }

        return asset('storage/'.$path);
    }
}
