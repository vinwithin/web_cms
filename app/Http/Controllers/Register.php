<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function store(Request $request){
       $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:3|max:255',
        ]);
        $validateData["password"] = Hash::make($validateData["password"]);
        $result = User::create($validateData);
        if($result){
            return "berhasil menambahkan user";
        }else{
            return "gagal menambahkan user";
        }
    }
}
