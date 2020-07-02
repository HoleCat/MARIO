<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function home() {
        return view('welcome');
    }

    public function aboutUs() {
        return view('aboutUs');
    }

    public function services() {
        return view('services');
    }

    public function products() {
        return view('products');
    }

    public function projects() {
        return view('projects');
    }

    public function clients() {
        return view('clients');
    }

    public function contactUs() {
        return view('contactUs');
    }
}
