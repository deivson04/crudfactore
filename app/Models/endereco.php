<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    //protected $primaryKey = 'id';
     
    protected $fillable = ['id','id_user','cep','rua','numero','telefone'];


   
}

   
