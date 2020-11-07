@extends('template') <!-- this page extends from template.blade.php -->

@section('title', 'Item List') <!-- set page title name -->

@section('content') <!-- begin content -->
<p><b>List of items</b></p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- check if $itemList contain data or not -->
        @if(count($itemList))
            @foreach($itemList as $count => $item)
                <tr>
                    @php($count++)
                    <td>{{$count++}}</td>
                    <td>{{$item->name}}</td>
                    <td>RM{{$item->price}}</td>
                    <td>
                        <form action="{{route('crud.edit')}}" method="GET">
                            @csrf <!-- @csrf must be present in a form -->
                            <input name="itemId" style="display: none" value="{{$item->id}}"/>
                            <button type="submit">Edit</button>
                        </form>
                        <form action="{{route('crud.delete')}}" method="POST">
                            @csrf <!-- @csrf must be present in a form -->
                            <input name="itemId" style="display: none" value="{{$item->id}}"/>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4">No data</td>
            </tr>
        @endif
    </tbody>
</table>
</br>
<button type="button" onclick="document.location='{{route('crud.add')}}'">Add Item</button>
<button type="button" onclick="document.location='{{route('crud.search')}}'">Search Item</button>
@stop
