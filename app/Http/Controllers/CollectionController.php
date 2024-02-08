<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CollectionController extends Controller
{
    public function index(){
        $data = Collections::get();
        return view('collection\index', compact('data'));
    }

    public function create(){
        return view('collection\create');
    }

    public function store(){
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = new Collections();
        $data->name = request('name');
        $data->type = request('type');
        $data->description = request('description');

        $data->save();

        return redirect()->route('collection.index');
    }

    public function edit(Request $request, $id){
        $data = Collections::find($id);
        return view('collection\edit', compact('data'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'type' => 'required',
            'description' => 'nullable',
        ]);

        $data = Collections::find($id);
        $data->name = request('name');
        $data->type = request('type');
        $data->description = request('description');

        $data->save();

        return redirect()->route('collection.index');
    }

    public function delete(Request $request, $id){
        $data = Collections::find($id);
        $data->delete();
        return redirect()->route('collection.index');
    }
}
