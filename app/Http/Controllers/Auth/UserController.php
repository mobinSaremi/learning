<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function getList()
    {
        $user = User::orderBy('id', 'DESC')->get();
        return view('admin.user.list')
            ->with('users', $user);
    }
    public function getAdd()
    {
        $role =Role::all();
        return view('admin.user.add')
        ->with('roles',$role);
    }
    public function postAdd(Request $request)
    {
        $input = $request->all();
        $input['admin'] = $request->has('admin');
        $input['password']= bcrypt($input['password']);
       $user = User::create($input);
        if($request->has('role_id')){
            $user->assignRole($input['role_id']);
        }
        return Redirect::action([UserController::class, 'getList']);
    }
    public function getEdit($id)
    {
        $user = User::all();
        $role =Role::all();
        $data = User::findOrfail($id);
        return view('admin.user.edit')
            ->with('data', $data)
            ->with('user', $user)
            ->with('roles',$role);
    }
    public function postEdit($id, Request $request)
    {
        $input = $request->all();
        $user = User::find($id);
        $personal = User::findOrfail($id);
        $input['admin'] = $request->has('admin');
        if(isset($input['password']))
        {
            $input['password'] = bcrypt($input['password']);
        }
        else
        {
            $input['password'] = $user->password;
        }
  
        $personal->update($input);
        return Redirect::action([UserController::class, 'getList']);
    }
    public function getDelete($id)
    {
        User::find($id)->delete();
        return Redirect::action([UserController::class, 'getList']);
    }
}
