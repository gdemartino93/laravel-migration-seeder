<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    use HasFactory;
    private $id;
    private $Nome;
    private $Prezzo;
    private $ConsigliatoFamiglia;
    private $DurataInGiorni;

    public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this-> id;
    }
    public function setNome($Nome){
        $this-> Nome = $Nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setPrezzo($Prezzo){
        $this->prezzo = $Prezzo;
    }
    public function getPrezzo(){
        return $this->prezzo;;
    }
    public function setConsigliatoFamiglia($ConsigliatoFamiglia){
        $this-> ConsigliatoFamiglia = $ConsigliatoFamiglia;
    }
    public function getConsigliatoFamiglia(){
        return $this->ConsigliatoFamiglia;
    }
    public function setDurataInGiorni($DurataInGiorni){
        $this-> DurataInGiorni = $DurataInGiorni;
    }
    public function getDurataInGiorni(){
        return $this->DurataInGiorni;
    }
}
