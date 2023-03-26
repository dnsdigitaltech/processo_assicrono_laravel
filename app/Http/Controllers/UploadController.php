<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessaImportacao;
class UploadController extends Controller
{
    public function importarPares($path){
        $pares = fopen(storage_path("app/pares.txt"), "w");
        $file = fopen(storage_path("app/". $path), "r");
        while(!feof($file)) {
            $linha = fgets($file);
            $colunas = explode("|", $linha);
            if( (int)$colunas[0] % 2 == 0){
                fwrite($pares,$linha);
                sleep(1);
            }
        }
        fclose($file);
        fclose($pares);
        return ;
    }

    public function store(Request $request)
    {
        $path = $request->arquivo->store('/public/products');
        $this->importarPares($path);
        ProcessaImportacao::dispatch($this, $path);
        //echo "Navegador Liberado...";
    }
}
