<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Storage;

class FilePsiRepository implements PsiRepositoryInterface
{
    const FILE_NAME = '16082020.json';

    /**
     * Return latest Pollutant Standards Index information
     *
     * @return mixed
     */
    public function getLatest() {
        $file = Storage::get(self::FILE_NAME);
        $content = json_decode($file);

        return $content->psi;
    }
}
