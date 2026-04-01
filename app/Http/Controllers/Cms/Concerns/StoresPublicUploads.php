<?php

namespace App\Http\Controllers\Cms\Concerns;

use Illuminate\Http\Request;

trait StoresPublicUploads
{
    protected function storeUploadedFile(Request $request, string $field, ?string $current, string $directory): ?string
    {
        if (! $request->hasFile($field)) {
            return $current;
        }

        return $request->file($field)->store($directory, 'public');
    }
}
