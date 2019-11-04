<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class CRUDController extends Controller{

    public function showAction($id){
        $user=users::find($id);
        return view("update",['user'=>$user]);
    }

    public function showDeleteAction($id){
        $user=users::find($id);
        return view("delete",['user'=>$user]);
    }


    public function insertAction(Request $request){
        $Meno_postavy=$request->input('Meno_postavy');
        $Race=$request->input('Race');
        $Class=$request->input('Class');
        $Faction=$request->input('Faction');
        $Datadisk=$request->input('Datadisk');

        $user=new Users();
        $user->Meno_postavy=$Meno_postavy;
        $user->Race=$Race;
        $user->Class=$Class;
        $user->Faction=$Faction;
        $user->Datadisk=$Datadisk;
        $user->save();

     // return response()->view('adduser');
        echo "<body style=\"background-color: #1f648b; text-align: center\">";
        echo "<div style='background-color: #6b9dbb; text-align: center; font-size: 20px'>Postava bola pridaná</div><br>";
        echo "<button type=\"button\" onclick=\"window.location='http://localhost/LARAVEL_Preskusanie/blog/public/showAll'\">Späť</button>";

    }

    public function updateAction($id,Request $request){
        $user=Users::where("id","=",$id)->first();
        $user->update(["Meno_postavy"=>$request->input('Meno_postavy'),
            "Race"=>$request->input('Race'),
            "Class"=>$request->input('Class'),
            "Faction"=>$request->input('Faction'),
            "Datadisk"=>$request->input('Datadisk'),]);

       // return redirect()->action('CRUDController@showAllAction');
        echo "<body style=\"background-color: #1f648b; text-align: center\">";
        echo "<div style='background-color: #6b9dbb; text-align: center; font-size: 20px'>Postava bola pridaná</div><br>";
        echo "<button type=\"button\" onclick=\"window.location='http://localhost/LARAVEL_Preskusanie/blog/public/showAll'\">Späť</button>";
    }

    public function deleteAction($id, Request $request){
        $user=Users::find($id);
        $user->delete();
        echo "<body style=\"background-color: #1f648b; text-align: center\">";
        echo "<div style='background-color: #6b9dbb ; text-align: center; font-size: 20px'>Postava bola Vymazaná</div><br>";
        echo "<button type=\"button\" onclick=\"window.location='http://localhost/LARAVEL_Preskusanie/blog/public/showAll'\">Späť</button>";

    }

    public function showAllAction(){
        $users=Users::all();
       return view("users",['users'=>$users]);
}


    public function getAddUserForm(){
        return view("adduser");
    }


}