<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\UploadController;

class ProcessaImportacao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $uploadController, $path;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(UploadController $uploadController, $path)
    {
        $this->uploadController = $uploadController;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo "Iniciando o processamento de algo....". PHP_EOL;
        $this->uploadController->importarPares($this->path);
        echo "..... Finalizado". PHP_EOL;
    }
}
