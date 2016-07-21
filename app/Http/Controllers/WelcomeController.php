<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;


class WelcomeController extends Controller
{
    /**
    *   Return the main blade welcome file, templated with recent events, and members
    */
    public function index() {
        //retrieve all users/members from database        
        $members = User::All();

        return view('pages.welcome.index', [
            'members' => $members, 
            'color' => $this->color
        ]);

    }
}
