<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arte extends Model
{
    use HasFactory;

    protected $primaryKey = 'idArte';

    protected $dates = ['envioArte'];

    
}
