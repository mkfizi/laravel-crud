<?php

namespace App\Http\Controllers;

use App\Item; //define this to use Item Model
use Session;
use Illuminate\Http\Request;

class crudController extends Controller{
    //----------view item list
    public function view(Request $request){
        $item = Item::all();
        return view('list', ['itemList' => $item]);
    }

    //----------view add item
    public function add(Request $request){
        return view('add');
    }

    //----------submit add item
    public function addSubmit(Request $request){
        //-----start add item
        $newitem        = new Item;
        $newitem->name  = $request->itemName;
        $newitem->price = $request->itemPrice;
        $newitem->save();
        //end add item
        return redirect(route('crud.view', [], false));
    }

    //----------delete item
    public function delete(Request $request){
        $deleteitem = Item::find($request->itemId);
        $deleteitem->delete();
        return redirect(route('crud.view', [], false));
    }

    //----------view edit item
    public function edit(Request $request){
        $item       = Item::find($request->itemId);
        $id         = $item->id;
        $itemName   = $item->name;
        $itemPrice  = $item->price;

        //return view with data method 1 (use compact) --refer line 64 for method 2
        return view('edit', compact('id', 'itemName', 'itemPrice'));
    }

    //----------submit edit item
    public function editSubmit(Request $request){
        $edititem           = Item::find($request->itemId);
        $edititem->name     = $request->newItemName;
        $edititem->price    = $request->newItemPrice;
        $edititem->save();
        return redirect(route('crud.view', [], false));
    }

    //----------view search item
    public function search(Request $request){
        return view('search');
    }

    //----------submit search item
    public function searchSubmit(Request $request){
        $displayResult  = true;
        $result         = false;
        $name           = $request->itemName;
        $price          = null;
        $search         = Item::where('name', $request->itemName)->first();
        if($search){
            $name   = $search->name;
            $price  = $search->price;
            $result = true;
        }
        
        //return view with data method 2 (Pass into array) --refer line 64 for method 1
        return view('search', [
                'itemName'      => $name,
                'itemPrice'     => $price,
                'result'        => $displayResult,
                'searchResult'  => $result
            ]);
    }
}
