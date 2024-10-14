<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsWorkerController extends Controller
{
    public function getCadastroCandidato()
    {
        return view('auth.register-worker');
    }
}
