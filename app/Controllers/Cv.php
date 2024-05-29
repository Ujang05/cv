<?php

namespace App\Controllers;

use App\Models\Cv_model;

class Cv extends BaseController


{
   protected $Cv_model;

   public function __construct(){
    $this->Cv_model = new Cv_model();
   }

   public function index()
   {
    $data['cv'] = $this->Cv_model->selectdatacv();
    $data['judul_halaman'] = "/";

    //dd($data);
    return view('/view_cv', $data);
   }
   
}
