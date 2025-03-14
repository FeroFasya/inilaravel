<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Halaman User";
    }

    // Metode show dengan parameter id
    public function show($id)
    {
        return "Detail User dengan ID: {$id}";
    }
}