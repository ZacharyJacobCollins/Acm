<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MembersController extends Controller
{

    /**
    *  Controller implements authentication middleware   
    */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        return view('pages.members.index');
    }
}
