@extends('template') <!-- this page extends from template.blade.php -->

@section('title', 'Edit Item') <!-- set page title name -->

@section('content') <!-- begin content -->         
<p><b>Edit {{$itemName}}</b></p>
<form action="{{route('crud.edit.submit')}}" method="POST">
    @csrf<!-- @csrf must be present in a form -->
    <input name="itemId" style="display: none" value="{{$id}}"/>
    New Name: <input type="text" name="newItemName" value="{{$itemName}}" required/><br>
    New Price: <input type="number" name="newItemPrice" value="{{$itemPrice}}" required/>
    </br>
    </br>
    <button type="submit">Edit</button>
    <button type="button" onclick="document.location='{{route('crud.view')}}'">Back</button>
</form>
@stop