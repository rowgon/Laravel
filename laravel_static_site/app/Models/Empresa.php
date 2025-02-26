<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['licensekey','snharddisk','idprocessor','connectiondb_id','status'];
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Licensekey extends Model
// {
//     use HasFactory;

//     protected $fillable = ['licensekey','snharddisk','idprocessor','connectiondb_id','status'];
// }
