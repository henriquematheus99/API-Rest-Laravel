<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function index()
    {

           return Register::all();

    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|max:255'
        ]);

        $register = register::create([
            'name'=>$request->input('name')
        ]);

        return $register;

    }

    public function show(Register $register)
    {

        return $register;

    }

    public function update(Request $request, Register $register)
    {

        $request->validate([
            'name'=>'required|max:255'
        ]);

         $register->name = $request->input('name');

         $register->save();

        return $register;

    }

    public function destroy(Register $register)
    {

        $register->delete();

        return response()->json(['success'=>true]);

    }

}
