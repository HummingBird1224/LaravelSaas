<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client_tools(){
        return view('client.tools');
    }

     public function client_reports(){
        return view('client.reports');
    }
    
}