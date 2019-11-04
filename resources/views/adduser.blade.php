<?php


?>
<body style="background-color: #1f648b">
<div style="text-align: center; background-color: #6b9dbb ">
<form method="post"  action="{{action('CRUDController@insertAction')}} ">

    Meno:<br>
    <input type="text" name="Meno_postavy" value="Sylvanas">
    <br>
    Rasa:<br>
    <input type="text" name="Race" value="Undead">
    <br>
    Class:<br>
    <input type="text" name="Class" value="Hunter">
    <br>
    Faction:<br>
    <input type="text" name="Faction" value="Horde">
    <br>
    Datadisk:<br>
    <input type="text" name="Datadisk" value="Battle for Azeroth">
    <br><br>
    <input type="submit" value="Odoslať">

    {{csrf_field()}}
</form>
</div>
</body>