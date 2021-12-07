<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admins.users.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        User::create($data);
        session()->flash('success', 'New User Succesfully Created');
        return redirect()->to(route('admins.users.index'));
    }

    public function update(Request $request, User $user)
    {
        $attr = $request->all();
        $user->update($attr);
        session()->flash("success", "User $user->id successfuly updated");
        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('success', "User $user->id successfuly deleted");
        return redirect()->to(route('admins.users.index'));
    }
}
