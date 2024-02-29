<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{

public function home(){



    return view('home');

}

public function espaceadmin(){


    $produits=Produit::paginate(3);
    return view('espaceadmin',['products' => $produits ]);

}
public function espaceclient(){



    return view('espaceclient');

}
public function cataloguepdf(){

    // Récupérer les produits avec un solde égal à 1
    $products = Produit::where('solde', 1)->get();




    $data = [

        'products' => $products,
    ];

    // Générer le PDF
    $pdf =Pdf::loadView('catalogue',$data);

    // Télécharger le PDF
    return $pdf->stream();




    }

public function getProdByCat(Request $rq){


$cat=$rq->route('cat');

    $produits = Produit::where('categorie', '=', $cat)->get();

    return view('Produits', [
       'products' => $produits,
       'categorie' => $cat
       ]);

}



}
