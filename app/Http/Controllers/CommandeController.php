<?php

namespace App\Http\Controllers;

use App\Commande;
use App\LigneCommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    //
    public function addcommande(Request $request)
    {
        //verif si une commande est en cours pour ce client
        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        
        if($commande)
        {
            // creation ligne de commande 
       $lc = new LigneCommande();
       $lc->qte=$request->quantity;
       $lc->produit_id=$request->idproduit;
       $lc->commande_id=$commande->id;
       $lc->save();
       return redirect('/client/cart');
        }
        else
        {
        //creation commande 
        $commande = new Commande();
        $commande->client_id = Auth::user()->id;
        if($commande->save())
          {
            // creation ligne de commande 
            $lc = new LigneCommande();
            $lc->qte=$request->quantity;
            $lc->produit_id=$request->idproduit;
            $lc->commande_id=$commande->id;
            $lc->save();
            return redirect('/client/cart');
          }
      
      }

    }
    public function supplignecommande($id)
    {
        $lc=LigneCommande::find($id);
       
        if($lc->delete())
          {
            return redirect('/client/cart');
          }
        else
           {
            return'erreur de supprission';
           }

    }
}
