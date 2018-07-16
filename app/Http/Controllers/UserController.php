<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\UserRole;
use App\Http\Requests\create_users_request;
use DB;

class UserController extends Controller
{

    private $redirectLink = 'users';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('partials.user.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('partials.user.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(create_users_request $request)
    {
        DB::Transaction(function() use($request){
          $store = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'status'   => $request->status
        ]);
          if (!$store) 
          {
            return back()->withErrors('لم يتم حفظ لمستخدم بنجاح');  
        }

        for ($i = 0; $i < count($request->roles); $i++) {
         UserRole::create([
            'user_id' => $store->id,
            'role_id' => $request->roles[$i]
        ]);
     }

 });
        return redirect($this->redirectLink)->with('message' , 'تم حفظ المستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) 
        {
          return back()->withErrors('هذا المستخدم غير موجود');   
      }
      return view('partials.user.show' , compact('user'));
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
        $roles = Role::all();
        $userPermissions = UserRole::where('user_id' , $id)->pluck('role_id')->toArray();

        if (!$user) 
        {
          return back()->withErrors('هذا المستخدم غير موجود');   
      }
      return view('partials.user.edit' , compact('user' , 'roles' , 'userPermissions'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request , [
            'name' => 'required|string',
            'password' => 'nullable|min:6',
            'email' => 'required|email|unique:users,email,'.$id,
            'status' => 'required|boolean'
        ]);
        $user = User::find($id);

        DB::Transaction(function() use($request , $id , $user){
            $update = $user->update([
                'name'     => $request->name,
                'email'    => $request->email,
                (!$request->password) ?: 'password' => bcrypt($request->password),
                'status'   => intval($request->status)
            ]);
            if (!$update) 
            {
                return back()->withErrors('لم يتم حفظ لمستخدم بنجاح');  
            }
        // delete permissions for this user 
            UserRole::where('user_id' , $id)->delete();

            for ($i = 0; $i < count($request->roles); $i++) {
             UserRole::create([
                'user_id' => $id,
                'role_id' => $request->roles[$i]
            ]);
         }

     });
        return redirect($this->redirectLink)->with('message' , 'تم تعديل المستخدم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) 
        {
          return back()->withErrors('هذا المستخدم غير موجود');   
      }
      $delete = User::destroy($id);
      if ($delete) 
      {
          return redirect($this->redirectLink)->with('message' , 'تم حذف المستخدم بنجاح');   
      }
  }
}
