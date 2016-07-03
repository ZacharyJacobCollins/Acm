<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Http\Requests;

class FileController extends Controller
{
    /**
    *  Controller implements authentication middleware   
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
    *   Update member avatar 
    */
    public function updateAvatar(Request $request) {
        if($request->hasFile('avatar')) {
            $avatar = $request ->file('avatar');
            $filename =  trim(Auth::user()->name) . 'Avatar.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('images/avatars/' . $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('pages.members.index', array('user'=>Auth::user() ) );
    }

    /**
    *   Update user resume avatar 
    */
    public function updateResume(Request $request) {
        if($request->hasFile('resume')) {
            $avatar = $request ->file('resume');
            $filename =  trim(Auth::user()->name) . 'Resume.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('storage/resume/' . $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('pages.members.index', array('user'=>Auth::user() ) );
    }

    
}