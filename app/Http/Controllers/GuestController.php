<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Category;
use App\Commande;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    //
   

    public function home()
    {
    
       
    if (Auth::user()!='') {

        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        if($commande){
            $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        $prod=Produit::all();
        return view('guest.home')->with('categories',$cat)->with('produits',$prod)->with('nblc',$nblc);
        }
        else{
           
            $cat=Category::all();
            $prod=Produit::all();
            return view('guest.home')->with('categories',$cat)->with('produits',$prod)->with('nblc',0);
        }
        
    }
        else {
        
        $cat=Category::all();
        $prod=Produit::all();
        return view('guest.home')->with('categories',$cat)->with('produits',$prod);
         }
    

    }

    public function listprod($id)
    {
        if (Auth::user()!='') {
        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        if($commande){
        $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        $prod=Produit::where('category_id','=',$id)->get();
        return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prod)->with('nblc',$nblc);
        }
        else{
            $cat=Category::all();
             $prod=Produit::where('category_id','=',$id)->get();
            return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prod)->with('nblc',0);
        }
        }
        else{
           
    $cat=Category::all();
    $prod=Produit::where('category_id','=',$id)->get();
    return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prod);
        }
    }
    public function produit_detaille($id)
    {
        if (Auth::user()!='') {
            
        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        if($commande){
            $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        $produits=Produit::all();
        $prod=Produit::find($id);
        $cat_prod=$prod->category_id;
        $prod1=Produit::where('category_id','=',$cat_prod)->get();
        return view ('guest.prod_detail')->with('produits',$produits)->with('categories',$cat)->with('produit',$prod)->with('produit1',$prod1)->with('nblc',$nblc);
        }
        else{
            $cat=Category::all();
        $produits=Produit::all();
        $prod=Produit::find($id);
        $cat_prod=$prod->category_id;
        $prod1=Produit::where('category_id','=',$cat_prod)->get();
        return view ('guest.prod_detail')->with('produits',$produits)->with('categories',$cat)->with('produit',$prod)->with('produit1',$prod1)->with('nblc',0);

        }
            }
        else{
           
        $cat=Category::all();
        $produits=Produit::all();
        $prod=Produit::find($id);
        $cat_prod=$prod->category_id;
        $prod1=Produit::where('category_id','=',$cat_prod)->get();
        return view ('guest.prod_detail')->with('produits',$produits)->with('categories',$cat)->with('produit',$prod)->with('produit1',$prod1); 
        }
    }
    public function qsn()
    {
        if (Auth::user()!='') {
        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        if($commande)
        {
            $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        return view('guest.qsn')->with('categories',$cat)->with('nblc',$nblc);

        }else{
            $cat=Category::all();
        return view('guest.qsn')->with('categories',$cat)->with('nblc',0);
        }
        $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        return view('guest.qsn')->with('categories',$cat)->with('nblc',$nblc);
        }
        else{
            
                
                $cat=Category::all();
            return view('guest.qsn')->with('categories',$cat);
        }
    }

    public function contact()
    {   
        if (Auth::user()!=''){

        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        if($commande)
        {
            $nblc=count($commande->lignecommandes);
            $cat=Category::all();
            return view('guest.contact')->with('categories',$cat)->with('nblc',$nblc);
        }
        else
        {
           
        $cat=Category::all();
        return view('guest.contact')->with('categories',$cat)->with('nblc',0);
        }
        
        }
       else{
        
        $cat=Category::all();
       return view('guest.contact')->with('categories',$cat);
       }
       
    }
    public function register()
    {
        
    return view('guest.register');
    }

    public function adduser(Request $request)
    {
        $request->validate(
            [
              'name'=>'required',
              'email'=>'required',
             
              'password'=>'required',
             
            ]
            
        );
        $user=new User();
    
        $user->name=$request->name;
        $user->email=$request->email;

        $user->image="3.jpg";
        $user->password=Hash::make($request->password);
        $user->save();
            if($user->save())
           {
            return redirect('/')->with('msg','user est Ajouter avec succées');
           }
        else   
           {
            return'erreur dajout';
           }
    }
    public function search(Request $request)
    {
        if (Auth::user()!='') {
            $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
            if($commande)
            {
        $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
        $nblc=count($commande->lignecommandes);
        $cat=Category::all();
        $prods= Produit::where('name','LIKE','%'.$request->mot_cle.'%')->get();
        return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prods)->with('nblc',$nblc);
            }
            else{
                $cat=Category::all();
                $prods= Produit::where('name','LIKE','%'.$request->mot_cle.'%')->get();
                return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prods)->with('nblc',0);
            }
        }      
      else{
        $cat=Category::all();
                $prods= Produit::where('name','LIKE','%'.$request->mot_cle.'%')->get();
                return view('guest.cat-prod')->with('categories',$cat)->with('produits',$prods)->with('nblc',0);
      }
    }

  
}
