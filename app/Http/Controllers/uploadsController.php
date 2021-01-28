<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class uploadsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function verArchivo()
    {
        $dir_path = public_path() . '/storage';
        $dir = new \DirectoryIterator($dir_path);
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                $urlFich=$_SERVER["HTTP_HOST"].'/public/'.$fileinfo;
                $urlDescarga='/public/'.$fileinfo;
                echo "URL: ".$urlFich;
                echo '<br> Enlace: ';
                echo '<a href="'.$urlDescarga.'">'.$fileinfo.'</a>';
                echo '<br><hr>';
            }
        }
    }
}
