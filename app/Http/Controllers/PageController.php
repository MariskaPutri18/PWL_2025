<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama: Mariska Putri <br> NIM: 2341760051";
    }

    public function articles($id)
    {    
        return "Halaman Artikel dengan ID $id";
    }
}
