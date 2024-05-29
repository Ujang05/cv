<?php

namespace App\Models;

use CodeIgniter\Model;

class Cv_model extends Model
{

    //membuat variable multi fungsi function dan turunan
    protected $db;

    public function getdata()
    {
        // inisialilsai koneksi
    $this->db = \Config\Database::connect();
    }

    public function selectdatacv(){
        // pembuatan query
        $sql = "SELECT * FROM identitas";

        // eksekusi query sql
        $query = $this->db->query($sql);

        // uraikan hasil query dalam bentuk array
        $data = $query->getResultArray();

        // kembalikan hasil query ke controller
        return $data;
    }
}