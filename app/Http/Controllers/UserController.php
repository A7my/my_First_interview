<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePostRequest;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('User.index' , compact('users'));
    }


    public function create()
    {
        return view('User.adduser');
    }


    public function store(StorePostRequest $request)
    {

        $request->validate([

        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with('add_ms' , "You've added a new user");
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('User.update' , compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('user.index')->with('up_ms' , "you've updated your user");
    }
    public function destroy(User $user)
    {
        $user = User::findorfail($user->id);
        $user->delete();
        return redirect()->route('user.index')->with('del_ms' ,"you've deleted user");

    }
}
