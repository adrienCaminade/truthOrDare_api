<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class ModelController extends Controller
{
    public function getModelNames()
    {
        $path = app_path('Models');
        $modelFiles = FacadesFile::glob($path . '/*.php');
        $modelNames = collect($modelFiles)->map(function ($item) {
            return basename($item, '.php');
        });

        return view('models', ['modelNames' => $modelNames]);
    }
}
