<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello() {
    	    return 'Hello World';
	}
    public function about()
    {
        return "Nama: Mariska Putri <br> NIM: 2341760051";
    }

    // Menampilkan halaman artikel berdasarkan ID
    public function articles($id)
    {
        return "Halaman Artikel dengan ID $id";
    }

}


