<?php

namespace App\Http\Controllers;

use App\Services\UploadXMLService;

class UploadCurrencyController extends Controller
{

    private UploadXMLService $uploadXMLService;

    public function __construct(UploadXMLService $uploadXMLService)
    {
        $this->uploadXMLService = $uploadXMLService;
    }

    public function upload(): void
    {
        $this->uploadXMLService->upload();
    }
}
