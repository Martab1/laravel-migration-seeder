<?php

namespace App\Http\Controllers;
use App\package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // ottenere dati da db 
        $packagesTrip = package::all();
        // dump($packageTrip);


        // return the user view 
        return view('home', compact('packagesTrip'));
    }
}
