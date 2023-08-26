<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Towfactory extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.vryfiy');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        $user =auth()->user();
        if($request->input('code')==$user->code){
        $user->resetcode();
return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors(['code'=>'password not crect']);
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
