<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Ccv extends BaseController
{
    public function index()
    {
        //
        return view('view_cv');
    }
}
