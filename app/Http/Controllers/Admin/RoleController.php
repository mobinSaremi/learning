<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
   public function getList()
   {
      $role = Role::orderBy('id', 'DESC')->get();
      return view('admin.role.list')
         ->with('roles', $role);
   }
   public function getAdd()
   {
    $roles = Role::all();
      return view('admin.role.add')
      ->with('parents', $roles);
   }
   public function postAdd( Request $request)
   {
      $role = new Role();
      $role->title = $request->get('title');
      $role->permission = serialize($request['access']);
      $role->save();
      if ($role->save()) {
          return Redirect::action([RoleController::class, 'getList'])->with('success', 'New item added.');
      }
   }
   public function getEdit($id)
   {
       $role = Role::all();
       $data = Role::findOrfail($id);
       return view('admin.role.edit')
           ->with('data', $data)
           ->with('roles', $role);
   }
   public function postEdit($id, Request $request)
   {
       $input = $request->all();
       $role = Role::findOrfail($id);

       $role->update($input);
       return Redirect::action([RoleController::class, 'getList']);
   }
   public function getDelete($id)
   {
       Role::find($id)->delete();
       return Redirect::action([RoleController::class, 'getList']);
   }
}
