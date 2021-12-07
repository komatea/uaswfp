<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = new User();
        if (request('keyword')) {
            $wildcards = '%' . request('keyword') . '%';
            $users = $users->where(request('searchBy'), 'like', $wildcards);
        }
        $users = $users->where('role_id', '=', 2)->paginate(12);

        return view('admins.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 2;
        $data['status'] = 'active';
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

    public function updateInline(Request $request)
    {
        $id = $request->get('id');
        $fname = $request->get('fname');
        $value = $request->get('value');

        if($fname == "password") $value = Hash::make($value);

        $user = User::find($id);
        $user->$fname = $value;
        $user->save();
        return response()->json(array('status' => 'OK', 'msg' => 'User Data Updated', 'new' => $value), 200);
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request['id']);
        $user->status = $request['status'];
        $user->save();
        session()->flash('success', 'User status Succesfully Changed');
        return redirect()->to(route('admins.users.index'));
    }
}
