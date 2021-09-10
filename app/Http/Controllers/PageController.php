<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang di Home Alfian';
    }
    
    public function about() {
        return '2031710173 / Mohammad Alfian';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan id '.$id;
    }
}
