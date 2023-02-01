<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    use HasFactory;
    public $id;
    public $Azienda;
    public $Nome;
    public $CodiceTreno;
    public $StazioneDiPartenza;
    public $StazioneDiArrivo;
    public $OrarioDiPartenza;
    public $OrarioDiArrivo;
    public $NumCarrozze;
    public $VagoneNotte;
}


