<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class GithubController extends Controller
{
    public function deploy(Request $request)
    {
        echo 1;
    }
}