<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        return view('index');
    }

    public function post() {
        return view('pages.post', ['name' => 'Angelica']);
    }

    public function about() {
        $fullname = 'Angelica Estrada';
        $age = '21 y.o';
        $email = 'angelicastrada8125@gmail.com';
        $contact = '0919-820-2153';
        return view('pages.about', compact('fullname','age','email','contact'));
    }

   
}
