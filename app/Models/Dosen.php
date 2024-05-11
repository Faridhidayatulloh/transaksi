<?php namespace App\Models;

use CodeIgniter\Model;

class Dosen Extends Model 
{

    Protected $table = "dosen";


    protected $allowedFields = [
        'kode_dosen',
        'nama_dosen',
        'status_dosen',
    ];
}