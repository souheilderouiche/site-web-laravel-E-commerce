<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Category;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //liste produit
    public function listprod()
{
   
    $prod=Produit::all();
   
    return view ('admin.produits.listeprod')->with('produit',$prod);//yemchi llview w yhez m3ah les cat lkol
}
public function Ajoutprod()
{   
    $cat=Category::all();
    return view('admin.produits.Ajoutprod')->with('categories',$cat);
}
//Ajouter produit
public function Addprod(Request $request)
{
     //tester les champs est validée(test formulaire dans le coté serveur)
     $request->validate(
        [
          'name_prod'=>'required',
          'desc_prod'=>'required',
          'qt_prod'=>'required',
          'prix_prod'=>'required',
          'img_prod'=>'required',
          'cat_prod'=>'required'
        ]
        
    );
    $prod=new Produit();

    $prod->name=$request->name_prod;
    $prod->description=$request->desc_prod;
    $prod->quentite=$request->qt_prod;
    $prod->prix=$request->prix_prod;
    $prod->category_id=$request->cat_prod;

    //upload image
    $newname=uniqid();//12
    $img =$request->file('img_prod');
    $newname.=".".$img->getClientOriginalExtension();//.jpg
    $destinationPath='uploads';
    $img->move($destinationPath , $newname);
    
   
       //affichage request
       //dd($request);

   
    $prod->image=$newname;
    $prod->save();//tsajeli fel base
    if($prod->save())
       {
        return redirect('/admin/produits/liste')->with('msg','votre produit est Ajouter avec succées');
       }
    else   
       {
        return'erreur dajout';
       }
}
//supprimier produit
public function deleteprod($id)
    {    
        $prod=Produit::find($id);//recuperer la catégorie de id= $id

        if($prod->image) 
        {
          $file_path= public_path().'/uploads/'.$prod->image;
         unlink($file_path);
        }
       if($prod->delete())//supprimer cette catégorie
          {
            return redirect('/admin/produits/liste')->with('msg','votre produit est supprimier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de supprission';
           }
    }
    //interface modifier produit
    public function modifierprod($id)
    {
        $cat=Category::all();
        $prod=produit::find($id);
        return view ('admin.produits.updateprod')->with('prod',$prod)->with('categories',$cat);
    }
    //update produit
    
    public function updateprod(Request $request)
    {
        
       $prod=produit::find($request->id_prod);//recuperer la catégorie de id= $id
       
       $prod->name=$request->name_prod;
       $prod->description=$request->desc_prod;
       $prod->quentite=$request->qt_prod;
       $prod->prix=$request->prix_prod;
       if($request->file('img_prod')) 
       {
         //supprimier la photo présidant
         $file_path= public_path().'/uploads/'.$prod->image;
         unlink($file_path);

          $newname=uniqid();//12
          $img =$request->file('img_prod');
         $newname.=".".$img->getClientOriginalExtension();//.jpg
         $destinationPath='uploads';
          $img->move($destinationPath , $newname);
    
         $prod->image=$newname;
       }
       if($prod->update())//mofifier cette produit
          {
            return redirect('/admin/produits/liste')->with('msg','votre produit est modifier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de modification';
           }
    }

}
