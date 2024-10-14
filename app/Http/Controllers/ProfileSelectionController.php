<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSelectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getCadastroPerfil()
    {
        return view('auth.profile-selection');
    }
}
