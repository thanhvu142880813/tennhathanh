<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class loaibiencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaibien = categories::all();
        return view('admin.loai_bien.dsachloaibien',['loaibien'=>$loaibien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function getsua($id)
    {
        $loaibien = categories::find($id);
        return view('admin.loai_bien.sualoaibienbao',['loaibien'=>$loaibien]);
    }
    public function postsua(request $request,$id)
    {
        $loaibien = categories::find($id);
         // dd($request->tenloaibien);
        $this->validate($request,
            [
                'tenloaibien'=>'required|unique:categories,name',
                'mota'=>'required|min:10'
            ],   
            [
                'tenloaibien.required'=>'Bạn chưa nhập tên loại biển báo',
                'tenloaibien.unique'=>'Bạn đã nhập trùng loại biển báo',
                'mota.required'=>'Bạn chưa nhập mô tả loại biển báo',
                'mota.min'=>'phải nhập lớn hơn 10 kí tự',
            ]);

        $loaibien->name = $request->tenloaibien;
        $loaibien->content = $request->mota;
        $loaibien->save();
        return redirect('admin/loaibien/sualoaibien/'.$id)->with('thongbao','Bạn đã sửa thành công');

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
    public function getxoa($id)
    {
        $loaibien = categories::find($id);
        $loaibien->delete();
        return redirect('admin/loaibien/dsachloaibien')->with('thongbao','Xóa thành công');
    }
     public function getthem()
    {
        return view('admin.loai_bien.themloaibienbao');
    }
}
