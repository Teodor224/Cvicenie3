<?php

namespace App\Http\Controllers;

use App\Models\Users;

class CRUDController extends Controller{

    public function showAction($id){
$user=users::find($id);
        echo "Meno postavy: ".$user->Meno_postavy."<br>";
        echo "Rasa: ".$user->Race."<br>";
        echo "Class: ".$user->Class."<br>";
        echo "Faction: ".$user->Faction."<br>";
        echo "Datadisk: ".$user->Datadisk."<br>";
    }

    public function insertAction(){
        $user=new Users();
        $user->Meno_postavy="Arthas";
        $user->Race="Human";
        $user->Class="Paladin";
        $user->Faction="Aliance";
        $user->Datadisk="Classic";
        $user->save();
        echo "Postava pridaná s ID: ".$user->id."<br>";
    }

    public function updateAction($id){
        $user=Users::where("id","=",$id)->first();
        $user->update(["Class"=>"Top Postava"]);
        echo "Postavas s ID: ".$user->id." bola aktualizovaná.";
    }

    public function deleteAction($id){
        $user=Users::find($id);
        $user->delete();
        echo "Postavas  s ID: ".$user->id." bola vymazaná.";
    }

    public function showAllAction(){
        $users=Users::all();
        foreach ($users as $user){
            echo "<br>".$user->Meno_postavy."<br>".$user->Race."<br>".$user->Class."<br>".$user->Faction."<br>".$user->Datadisk."<br>____________________<br>";
        }
}
}