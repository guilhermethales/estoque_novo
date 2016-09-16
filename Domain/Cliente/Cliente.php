<?php

namespace Domain\Cliente;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','cpf','data_nasc'];
}
