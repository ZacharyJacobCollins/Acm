<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Session;

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
    *   Creates a meeting given a POST request
    *   @param {request} POST http request
    */
    public function create(Request $request) {
        dd($request);
        $newMeeting = new Meeting($request->all()); 
        Meeting::create($request->all());
    }

    /**
    *   Review meeting stuff before creating it/placing it in database/sending out emails
    *   Redirect via ajax with hash
    *   @param {request} POST http request
    */
    public function reviewMeeting(Request $request) {
        $meeting = new Meeting($request->all());
        return redirect('/members#meetingreview')->with($meeting, 'meeting');
    }
}
