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
        $meetings = Meeting::All();
        return view('pages.meetings.index', ['meetings', $meetings]);
    }

    /** 
    *   @param {id} meeting id to be updated
    */
    public function update() {

    }

    /** 
    *   Returns the templated blade schedule file 
    */
    public function schedule() {
        $meetings = Meeting::All();
        return view('pages.members.ajax.schedule', ['meetings' => $meetings]);
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
        $meetingTitle = $request->input('title');
        $newMeeting = new Meeting($request->all()); 
        Meeting::create($request->all());
        return redirect('/members#meetingcreate');
    }
}
