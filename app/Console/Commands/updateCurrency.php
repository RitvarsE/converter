<?php

namespace App\Console\Commands;

use App\Services\UploadXMLService;
use Illuminate\Console\Command;

class updateCurrency extends Command
{
    protected $signature = 'converter:update';

    protected $description = 'Update converter database';

    private UploadXMLService $uploadXMLService;

    public function __construct(UploadXMLService $uploadXMLService)
    {
        parent::__construct();

        $this->uploadXMLService = $uploadXMLService;
    }

    public function handle()
    {
        $this->uploadXMLService->upload();
    }
}
