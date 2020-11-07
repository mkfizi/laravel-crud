@extends('template') <!-- this page extends from template.blade.php -->

@section('title', 'Search Item') <!-- set page title name -->

@section('content') <!-- begin content -->
<p><b>Search item</b></p>
<form action="{{route('crud.search.submit')}}" method="POST">
    @csrf
    Name: <input name="itemName" value=""/>
    </br>
    </br>
    <button type="submit">Search</button>
    <button type="button" onclick="document.location='{{route('crud.view')}}'">Back</button>

</form> 
@if($result ?? '') <!-- ?? '' means if $result exists or not-->
    <p><b>Search result</b></p>
    <!-- check if search have result or not -->
    @if($searchResult)
        <p>Name: {{$itemName}}</p>
        <p>Price: RM{{$itemPrice}}</p>
    @else
        <p>No search result for '{{$itemName}}'</p>
    @endif
@endif
@stop
