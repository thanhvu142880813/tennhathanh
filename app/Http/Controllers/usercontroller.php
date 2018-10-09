<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.dsachuser',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getthem()
    {
        return view('admin.user.themuser');
    }
    public function postthem(request $request)
    {
        $user = new User();
        $this->validate($request,
            [
                'name'=>'required|unique:users,name', 
                'password' =>'required|min:5'
            ],
            [
                'name.required'=>'Tên không được trống',
                'name.unique'=>'Tên đã có người dùng',
                'password.required'=>'password không được trống'
            ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        return redirect(route('themuser'))->with('thongbao','Bạn đã thêm thành công');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xoauser($id)
    {
            $user = User::find($id)->delete();
            return redirect(route('dsachuser'))->with('thongbao','Bạn đã xóa thành công');
    }

    public function getdangnhapadmin()
    {
       return view('admin.login');
    }
     public function postdangnhapadmin(request $request)
    {
       $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required|min:3|max:32'
        ],
        [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'password phải lớn hơn 3 kí tự',
            'password.max'=>'password phải nhỏ hơn 32 kí tự',
        ]);
       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
       {
            return redirect()->route('admin.index');
       }
       else
       {
            return redirect(route('adminlogin'))->with('thongbao','đăng nhập không thành công');
       }
    }
}
