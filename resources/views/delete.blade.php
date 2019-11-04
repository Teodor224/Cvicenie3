<?php


?>

<body style="background-color: #1f648b">
<div style="text-align: center; background-color: #6b9dbb ">
    <form method="post"  action="{{action('CRUDController@deleteAction',['id'=>$user->id])}} ">

        Naozaj chcete vymazať postavu s názvom:
        <p style="font-size: 20px">
        {{$user->Meno_postavy}}
        </p>
        <input type="submit" value="Delete">

        {{csrf_field()}}
    </form>
</div>
</body>
