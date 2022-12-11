<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
    return view('admin.dashboard');
   }

   public function list()
    {
        $user=User::all();
    return view('admin.list_user')->with('users',$user);
   }

   public function Ajout_user()
    {
      
    return view('admin.Ajout_user');
   }


   public function mod_user($id)
    {
      $user=User::find($id);
      return view('admin.modifier_user')->with('user',$user);
   }


   public function delete_user($id)
    {
       $user=User::find($id);//recuperer la catégorie de id= $id
       
       if($user->delete())//supprimer cette catégorie
          {
            return redirect('/admin/list')->with('msg','user est supprimier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de supprission';
           }
    }

    public function userupdate(Request $request)
    {
       
      $user=User::find($request->id_user);//recuperer la catégorie de id= $id
       
      $user->name=$request->name_user;
      $user->email=$request->email_user;
      $user->role=$request->role_user;
      $user->password=Hash::make($request->pw_user);
      if($request->file('img_user')) 
      {
        //supprimier la photo présidant
        $file_path= public_path().'/uploads/'.$user->image;
       

         $newname=uniqid();//12
         $img =$request->file('img_user');
        $newname.=".".$img->getClientOriginalExtension();//.jpg
        $destinationPath='uploads';
         $img->move($destinationPath , $newname);
   
        $user->image=$newname;
      }
      if($user->update())//mofifier cette produit
         {
           return redirect('/admin/list')->with('msg','user est modifier avec succées');//nab3eth msg w nafichih fel view
         }
       else
          {
           return'erreur de modification';
          }
   }

   public function userAdd(Request $request)
    {
        $request->validate(
            [
              'name_user'=>'required',
              'email_user'=>'required',
              'role_user'=>'required',
              'pw_user'=>'required',
             
            ]
            
        );
        $user=new User();
    
        $user->name=$request->name_user;
        $user->email=$request->email_user;
        $user->role=$request->role_user;
        $user->password=Hash::make($request->pw_user);
       
    
        //upload image
        $newname=uniqid();//12
        $img =$request->file('img_user');
        $newname.=".".$img->getClientOriginalExtension();//.jpg
        $destinationPath='uploads';
        $img->move($destinationPath , $newname);
        
       
           //affichage request
           //dd($request);
    
       
        $user->image=$newname;
        $user->save();//tsajeli fel base
        if($user->save())
           {
            return redirect('/admin/list')->with('msg','user est Ajouter avec succées');
           }
        else   
           {
            return'erreur dajout';
           }
    
   }

   

   public function profil()
    {
    return view('admin.profil');
   }

   public function profilupdate(Request $request)
    {
       
        Auth::user()->name=$request->name_ad;
        Auth::user()->email=$request->email_ad;
        if($request->pw_ad)
        {
            Auth::user()->password=Hash::make($request->pw_ad);
        }
        if($request->file('img_ad')) 
       {
         //supprimier la photo présidant
         $file_path= public_path().'/uploads/'.Auth::user()->image;
        

          $newname=uniqid();//12
          $img =$request->file('img_ad');
         $newname.=".".$img->getClientOriginalExtension();//.jpg
         $destinationPath='uploads';
          $img->move($destinationPath , $newname);
    
          Auth::user()->image=$newname;
       }
       if(Auth::user()->update())//mofifier le profil
          {
            return redirect('/admin/profil')->with('msg','votre profil est modifier avec succées');//nab3eth msg w nafichih fel view
          }
        else
           {
            return'erreur de modification';
           }
        
   }
   
}
 