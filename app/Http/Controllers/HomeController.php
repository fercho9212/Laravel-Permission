<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();    
        return view('dashboard/users/index',compact('users','roles'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3',
        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $roles=$request['roles'];
        if(isset($roles)){
            $user->syncRoles($roles);
        }
        return redirect()->route('home');


        
    }
}
