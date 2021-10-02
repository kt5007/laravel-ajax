<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    
    public function getUsers(Request $request)
    {
        if($request->id === 'or_less_5'){
            $users = DB::table('users')->where('id','<=',5)->get();
            return response()->json($users);
        }
        if($request->id === 'or_more_6'){
            $users = DB::table('users')->where('id','>=',6)->get();
            return response()->json($users);
        }
        return abort(403);
    }
}
