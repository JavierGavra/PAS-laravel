<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return view('dashboard',[
            'countries'=>Country::all()
        ]);
    }
}