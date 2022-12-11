<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function ligneCommande()
    {
        return $this->HasMany(LigneCommande::class, 'produit_id', 'id');
    }
}
