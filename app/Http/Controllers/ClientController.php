<?php

namespace App\Http\Controllers;

use App\Category;
use App\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //
public function dashboard()
{
  if (Auth::user()!='') {
       $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
       if($commande){
        $nblc=count($commande->lignecommandes);
        return view('client.dashboard')->with('nblc',$nblc);
       }
       else
       {
        return view('client.dashboard')->with('nblc',0);
       }
       
        
  }
  else{
   
        return view('client.dashboard');
  }
}
public function profil()
    {
      $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
      if($commande){
        $nblc=count($commande->lignecommandes);
        return view('client.profil')->with('nblc',$nblc);
      }else{
        
        return view('client.profil')->with('nblc',0);
      }
      
   }

   public function profilupdate(Request $request)
   {
      
       Auth::user()->name=$request->name_cl;
       Auth::user()->email=$request->email_cl;
       if($request->pw_cl)
       {
           Auth::user()->password=Hash::make($request->pw_cl);
       }
       if($request->file('img_cl')) 
      {
        //supprimier la photo présidant
        $file_path= public_path().'/uploads/'.Auth::user()->image;
       
        

         $newname=uniqid();//12
         $img =$request->file('img_cl');
        $newname.=".".$img->getClientOriginalExtension();//.jpg
        $destinationPath='uploads';
         $img->move($destinationPath , $newname);
   
         Auth::user()->image=$newname;
      }
      if(Auth::user()->update())//mofifier le profil
         {
           return redirect('/client/profil')->with('msg','votre profil est modifier avec succées');//nab3eth msg w nafichih fel view
         }
       else
          {
           return'erreur de modification';
          }
       
  }

  public function cart()
  {
    if (Auth::user()!='') {
    $commande= Commande::where('client_id',Auth::user()->id)->where('choices','en cours')->first();
    if($commande){
      $nblc=count($commande->lignecommandes);
      $cats=Category::all();
     
      return view('client.carte')->with('commande',$commande)->with('categories',$cats)->with('nblc',$nblc);
    }
    else{
      $cats=Category::all();
     
      return view('client.carte')->with('commande',$commande)->with('categories',$cats)->with('nblc',0);
    }
   
  }
  else{

   
    $cats=Category::all();
   
    return view('client.carte')->with('commande',$commande)->with('categories',$cats);
  }

 }
  
}
