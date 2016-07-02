<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Http\Requests;
class UploadController extends Controller
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
}