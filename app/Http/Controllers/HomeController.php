<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home', [
            "data"=> User::all()
        ]);

    }
    public function tambah()
    {
        return view('tambah');

    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]); 
        
        return redirect('/');

    }
    public function update($id)
    {
        //get post by ID
        $data = user::findOrFail($id);

        //render view with post
        return view('update', compact('data'));

    }
    public function kirim(Request $request, $id)
    {
        $data = user::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]); 
        return redirect('/');

    }
    public function destroy($id)
    {
        $data = user::findOrFail($id);
        $data->delete();
        return redirect('/');

    }
}
