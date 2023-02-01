<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains extends Model
{
    use HasFactory;

    private $id;
    private $Azienda;
    private $Nome;
    private $CodiceTreno;
    private $StazioneDiPartenza;
    private $StazioneDiArrivo;
    private $OrarioDiPartenza;
    private $OrarioDiArrivo;
    private $NumCarrozze;
    private $VagoneNotte;

    public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this-> id;
    }
    public function setAzienda($Azienda){
        $this-> Azienda = $Azienda;
    }
    public function getAzienda(){
        return $this-> Azienda;
    }
    public function setNome($Nome){
        $this-> Nome = $Nome;
    }
    public function getNome(){
        return $this-> Nome;
    }
    public function setOrarioDiPartenza($OrarioDiPartenza){
        $this-> OrarioDiPartenza = $OrarioDiPartenza;
    }
    public function getOrarioDiPartenza(){
        return $this->OrarioDiPartenza;
    }
    public function setOrarioDiArrivo($OrarioDiArrivo){
        $this-> OrarioDiArrivo = $OrarioDiArrivo;
    }
    public function getOrarioDiArrivo(){
        return $this->OrarioDiArrivo;
    }
    public function setNumCarrozze($NumCarrozze){
        $this-> NumCarrozze = $NumCarrozze;
    }
    public function getNumCarrozze(){
        return $this->NumCarrozze;
    }
    public function setVagoneNotte($VagoneNotte){
        $this-> VagoneNotte = $VagoneNotte;
    }
    public function getVagoneNotte(){
        return $this->VagoneNotte;
    }
    
}
