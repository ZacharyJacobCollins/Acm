<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class MembersController extends Controller
{

    /**
    *  Controller implements authentication middleware   
    */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index() {
        return view('pages.members.index', ['color' => $this->color]);
    }
    

    public function component() {
        return view('pages.members.ajax.component', ['color' => $this->color]);
    }


    public function courses(Request $request) {
         if ($request->isMethod('post')) {
            //do stuff
        } else {
            $courses = Course::All();
            return view('pages.members.ajax.courses', ['color' => $this->color, 'courses' => $courses]);
        }
    }

    /**
    *  @param the page requested by the url   
    */
    public function ajax($page) {
        return view("pages.members.ajax.".$page, ['color'=>$this->color]);
    }
}