<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    $data = ['nama' => 'Encupp'];
    return view('home', $data);
}

}
