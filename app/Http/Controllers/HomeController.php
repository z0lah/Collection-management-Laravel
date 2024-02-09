<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::get();
        $info = [
            'title' => 'My Collection | ',
            'description' => 'User List',
        ];
        return view('user\index', compact('data', 'info'));
    }

    public function create()
    {
        $info = [
            'title' => 'My Collection | ',
            'description' => 'Create User',
        ];
        return view('user\create', compact('info'));
    }
    public function store(){
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = new User();
        $data->name = request('name');
        $data->email = request('email');
        $data->password = hash::make(request('password'));

        $data->save();

        return redirect()->route('user.index');
    }

    public function edit(Request $request, $id){

        $data = User::find($id);
        $info = [
            'title' => 'My Collection | ',
            'description' => $data->name,
        ];

        return view('user\edit', compact('data', 'info'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'nullable',
        ]);

        $data = User::find($id);
        $data->name = request('name');
        $data->email = request('email');
        if(request('password') != null){
            $data->password = hash::make(request('password'));
        }

        $data->save();

        return redirect()->route('user.index');
    }

    public function delete($id){
        $data = User::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('user.index');
    }
}
