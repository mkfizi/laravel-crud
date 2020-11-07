@extends('template') <!-- this page extends from template.blade.php -->

@section('title', 'Add Item') <!-- set page title name -->

@section('content') <!-- begin content -->
<p><b>Add Item</b></p>
    <form action="{{route('crud.add.submit')}}" method="POST">
        @csrf <!-- @csrf must be present in a form -->
        Name: <input type="text" name="itemName" required/><br>
        </br>
        Price: <input type="number" name="itemPrice" required/>
        </br>
        </br>
        <button type="submit">Add</button>
        <button type="button" onclick="document.location='{{route('crud.view')}}'">Back</button>
    </form>
@section('content')

@stop