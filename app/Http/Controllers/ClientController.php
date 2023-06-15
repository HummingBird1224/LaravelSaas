<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function client_tools(){
        // $user=Auth::user();
        return view('client.tools');
    }

    public function client_reports(){
        return view('client.reports');
    }

    public function client_invalid_condition(){
        return view('client.invalid_condition');
    }

    public function client_account_change(){
        return view('client.account_change');
    }

    public function client_managing(){
        return view('admin.client_managing');
    }
    
}