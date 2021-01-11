<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id    =   auth()->user()->id;
        $userDetails =   User::find($user_id );
        // dd($userDetails->toArray());
        return view('home')->with([
            'userDetails' => $userDetails,
        ]);
    }
    public function message(Request $request)
    {
        DB::table('user_message_for_vendor')->insert([
            'user_id'   =>  auth()->user()->id,
            'vendor_id' => $request->vendor_id,
            'message' => $request->message,
        ]);
        return redirect()->back();
    }
}
