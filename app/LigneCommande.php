<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    
   
   public function commande()
   {
       return $this->belongsTo(Commande::class, 'commande_id', 'id');
   }

   

   public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id', 'id');
        
    }

}
