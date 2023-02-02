<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;
use App\Models\Travels;

class MainController extends Controller
{
    public function home(){

        $trains = Trains::all();
        $travels = Travels::all();
        
        $data = [
            "trains" => $trains,
            "travels" => $travels
        ];

        return view("pages.home",$data);
    }
    public function add(){
             
        // $newTrain = new Trains();
        // $newTrain -> Azienda = 'trenitalia';
        // $newTrain -> Nome = 'frecciarossa';
        // $newTrain -> CodiceTreno = "ad213d";
        // $newTrain -> StazioneDiPartenza = "Barletta";
        // $newTrain -> StazioneDiArrivo = "Milano";
        // $newTrain -> OrarioDiPartenza = "12-01-2012";
        // $newTrain -> OrarioDiArrivo = "12-11-2004";
        // $newTrain -> NumCarrozze = 2;
        // $newTrain -> VagoneNotte = 1;

        // $newTrain->save();


        // $italo = new Trains();
        // $italo -> Azienda = 'italo';
        // $italo -> Nome = 'italo red';
        // $italo -> CodiceTreno = "31d1s";
        // $italo -> StazioneDiPartenza = "Roma";
        // $italo -> StazioneDiArrivo = "Parigi";
        // $italo -> OrarioDiPartenza = "12-01-2012";
        // $italo -> OrarioDiArrivo = "12-11-2004";
        // $italo -> NumCarrozze = 25;
        // $italo -> VagoneNotte = 1;

        // $italo -> save();

        $crociera = new Travels();

        $crociera -> Nome ="costa santa";
        $crociera -> Prezzo = 1500;
        $crociera -> ConsigliatoFamiglia = 1;
        $crociera -> DurataInGiorni = 45;

        $crociera -> save();
    }

    public function filtered(){

        $travels = Travels::where("Prezzo",">",1400) ->get();
        
        $data = [
            "travels" => $travels
        ];

        return view("pages.home",$data);
    }
}

// $crociera -> setNome("costa meraviglia");
// $crociera -> setPrezzo(1900);
// $crociera -> setConsigliatoFamiglia(0);
// $crociera -> setDurataInGiorni(35);