<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = User::all();
        return view('register.index', [
            'users' => $users,
        ]);
    }

        /**
     * 登録画面
     */
    public function create(Request $request)
    {       
        
        return view('register.create');
    }

    /**
     * 登録処理
     */
    public function store(Request $request)
    {
        $registerUser = $this->user->InsertUser($request);  
        return redirect('index');
    }

    public function edit(Request $request){

        $users = User::where('id','=',$request->id)->first();
        return view('register.edit')->with([
            'users' => $users,
        ]);
    }

    public function UserEdit(Request $request){

        $users = User::where('id','=',$request->id)->first();
        $users->name = $request->name;
        $users->phone = $request->phone;
        $users->email = $request->email;
        $users->save();

        return redirect('index');
    }

    public function UserDelete(Request $request){

        $users = User::where('id','=',$request->id)->first();
        $users->delete();

        return redirect('index');
    }
}
