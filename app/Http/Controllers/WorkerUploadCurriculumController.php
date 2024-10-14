<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerUploadCurriculumController extends Controller
{
    public function getCurriculum()
    {
        return view('auth.register-worker-upload-cv');
    }
}
