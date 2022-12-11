<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //
    public function client()
   {
       return $this->belongsTo(User::class, 'client_id', 'id');
   }
   
    public function lignecommandes()
    {
        return $this->hasMany(LigneCommande::class, 'commande_id', 'id');
        
    }
}
