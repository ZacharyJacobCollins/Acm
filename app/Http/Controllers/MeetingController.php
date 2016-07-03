<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Requests;

class MeetingController extends Controller
{
    //Lists all current meetings
    public function index() {

    }

    /** 
    *   @param {id} meeting id to be updated
    */
    public function update() {

    }


    /**
    *   @param {id} meeting id to be deleted
    */
    public function delete($id) {

    }

    /**
    *   Creates a meeting given a request
    *   @param {request} http request
    */
    public function create(Request $request) {
        return Meeting::create([
            'title'   => $request->input('title'),
            'subject' => $request->input('subject'),
            'starttime'   => $request->input('starttime'),
            'endtime'     => $request->input('endtime'),
            'date'     => $request->input('datepicker'),
            'avatar'  => $request->input('avatar'),
            'speaker' => $request->input('speaker'),
            'description' => $request->input('description'),
        ]);

    }
    
}
