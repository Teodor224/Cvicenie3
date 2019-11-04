<?php


?>
<body style="background-color: #1f648b">
<div style="text-align: center; background-color: #6b9dbb ">
    <form method="post"  action="{{action('CRUDController@updateAction',['id'=>$user->id])}} ">

        Meno:<br>
        <input type="text" name="Meno_postavy" value="{{$user->Meno_postavy}}">
        <br>
        Rasa:<br>
        <input type="text" name="Race" value="{{$user->Race}}">
        <br>
        Class:<br>
        <input type="text" name="Class" value="{{$user->Class}}">
        <br>
        Faction:<br>
        <input type="text" name="Faction" value="{{$user->Faction}}">
        <br>
        Datadisk:<br>
        <input type="text" name="Datadisk" value="{{$user->Datadisk}}">
        <br><br>
        <input type="submit" value="Upraviť">

        {{csrf_field()}}
    </form>
</div>
</body>
