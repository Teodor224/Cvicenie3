<?php


?>

<body style="background-color: #1f648b; text-align: center">
<div style="margin: auto 0px; background-color: #6b9dbb ">
<table align="center">
    @foreach($users as $user)
    <tr>
        <td style="padding-bottom: 10px">
            {{$user->Meno_postavy}}
        </td>
        <td style="border-left: double; padding-bottom: 10px">
            {{$user->Race}}
        </td>
        <td  style="border-left: double; padding-bottom: 10px">
            {{$user->Class}}
        </td>
        <td  style="border-left: double; padding-bottom: 10px">
            {{$user->Faction}}
        </td>
        <td  style="border-left: double; padding-bottom: 10px">
            {{$user->Datadisk}}
        </td>
        <td  style="border-left: double; padding-bottom: 10px">
            <a href="{{action("CRUDController@showAction",['id'=>$user->id])}}">EDIT</a>
        </td>
        <td  style="border-left: double; padding-bottom: 10px">
            <a href="{{action("CRUDController@showDeleteAction",['id'=>$user->id])}}">DELETE</a>
        </td>
    </tr>
        @endforeach
</table>
</div>
<button type="button" onclick="window.location='http://localhost/LARAVEL_Preskusanie/blog/public/getAddUserForm'">Pridaj postavu</button>;