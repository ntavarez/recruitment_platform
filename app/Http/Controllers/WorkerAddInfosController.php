<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerAddInfosController extends Controller
{
    public function getInformacoesAdicionais()
    {
        return view('auth.register-worker-add-info');
    }
}
