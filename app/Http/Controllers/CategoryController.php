<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
public function listcat()
{
   
    $cat=Category::all();//recuperer les catégories de la base de données
    return view ('admin.categories.listecat')->with('categories',$cat);//yemchi llview w yhez m3ah les cat lkol
}
public function Ajoutcat()
{
    return view('admin.categories.Ajoutcat');
}

public function Addcat(Request $request)
{
     //tester les champs est validée(test formulaire dans le coté serveur)
     $request->validate(
        [
          'name_cat'=>'required',
          'desc_cat'=>'required'
        ]
        
    );
    $cat=new Category();
       //affichage request
       //dd($request);

    $cat->name=$request->name_cat;
    $cat->description=$request->desc_cat;
    $cat->save();//tsajeli fel base
    if($cat->save())
       {
        return redirect('/admin/categories/liste')->with('msg','votre catégorie est Ajouter avec succées');
       }
    else   
       {
        return'erreur dajout';
       }
}
public function deletecat($id)
    {
       $cat=Category::find($id);//recuperer la catégorie de id= $id
       
       if($cat->delete())//supprimer cette catégorie
          {
            return redirect('/admin/categories/liste')->with('msg','votre catégorie est supprimier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de supprission';
           }
    }
    public function modifierecat($id)
    {
        $cat1=Category::find($id);
        return view ('admin.categories.updatecat')->with('cat1',$cat1);
    }
 
    public function updatecat(Request $request)
    {
        
       $cat=Category::find($request->id_cat);//recuperer la catégorie de id= $id
       
       $cat->name= $request->name_cat;
       $cat->description= $request->desc_cat;
       if($cat->update())//mofifier cette catégorie
          {
            return redirect('/admin/categories/liste')->with('msg','votre catégorie est modifier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de modification';
           }
    }


}
