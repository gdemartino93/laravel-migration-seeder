<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;

class MainController extends Controller
{
    public function home(){

        $trains = Trains::all();
        
        $data = [
            "trains" => $trains,
        ];

        return view("pages.home",$data);
    }
    public function add(){
             
        $newTrain = new Trains();
        $newTrain -> Azienda = 'trenitalia';
        $newTrain -> Nome = 'frecciarossa';
        $newTrain -> CodiceTreno = "ad213d";
        $newTrain -> StazioneDiPartenza = "Barletta";
        $newTrain -> StazioneDiArrivo = "Milano";
        $newTrain -> OrarioDiPartenza = 12-01-2012;
        $newTrain -> OrarioDiArrivo = 12-11-2004;
        $newTrain -> NumCarrozze = 2;
        $newTrain -> VagoneNotte = 1;

        $newTrain->save();
    }
}

