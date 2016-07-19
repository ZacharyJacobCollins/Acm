<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Session;
use Auth;

class MeetingController extends Controller
{
    //Lists all current meetings
    public function index() {
        $meetings = Meeting::All();
        return view('pages.meetings.index', ['meetings', $meetings]);
    }

    /** 
    *   Returns the templated blade schedule file 
    */
    public function schedule() {
        $meetings = Meeting::All();
        return view('pages.members.ajax.meetingschedule', ['meetings' => $meetings]);
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
    
    /**
    *   Allows a user to check into a given meeting
    *   @param {request} POST http request
    */
    public function checkIn(Request $request) {
        if ($request->isMethod('post')) {
            //get meeting from dropdown, and make sure it isn't default
            $selected = $request->input('checkin');
            if( $selected === 'default') {
                return redirect('/members#meetingcheckin');
            }
            //get the meeting where the title matches
            $meeting = Meeting::where('title', '=', $selected)->first();

            //Get all attending as string.  Update this to include eloquent stuff TODO
            $attendingMembers = $meeting->attendingMembers;
            //for now shittily just concat and separate with space.  trim name too.  
            $meeting->attendingMembers = $attendingMembers.' '.str_replace(' ', '', Auth::user()->name);
            return redirect('/members#meetingcheckin');
        } else {
            $meetings = Meeting::All();
            return view('pages.members.ajax.meetingcheckin', ['meetings'=>$meetings, 'color'=>$this->color]);
        }
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
}
