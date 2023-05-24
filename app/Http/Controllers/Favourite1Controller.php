<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favourite1;
use App\Models\Type;
use App\Models\Category;

class Favourite1Controller extends Controller
{
    function show(){
        $data = Favourite1::all();
        $types = Type::all();
        $categories = Category::all();
        return view('main', ['favourites' =>$data, 'types' => $types, 'categories' =>$categories]);
    }
   
    
    function store(Request $request){
        $Favourites = new Favourite1;
        $Favourites->name = $request->Name;
        $Favourites->link = $request->link;
        $Favourites->types_id = $request->type_dropdown;
        $Favourites->save();
        $Favourites->id;
        $request->category;

        return redirect('create');
    }
   
    function destroy($id){
        $data = Favourite1::find($id);
        $data->delete();
        return redirect('create');
    }

    function showData($id){
        $data = Favourite1::find($id);
        $types = Type::all();
        $categories = Category::all();
        return view('update', ['data' =>$data, 'types' => $types, 'categories' =>$categories]);
    }

    function update(Request $request, $id){
        $data = Favourite1::find($id);
        $data->name = $request->Name;
        $data->link = $request->link;
        $data->types_id = $request->type_dropdown;
        $data->save();
        return redirect('create');
    }

}
