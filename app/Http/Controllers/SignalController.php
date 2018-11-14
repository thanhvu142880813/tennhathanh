<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\signals;
use App\categories;

class SignalController extends Controller
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
    public function index(Request $request)
    {
        $data = [];
        $signals = signals::all();       
        $data['signals'] = $signals;
        return view('admin.bien_bao.dsachbienbao',$data);
    }
    public function getthem()
    {
        $data = [];
        $cate = categories::all();
        return view('admin.bien_bao.thembienbao', compact(['data', 'cate']));
    }

    public function postthem(Request $request)
    {
        $signal = new signals();
        $this->validate($request,
            [
                'signal_name'=>'required',
                'signal_number'=>'required',
                'signal_content'=>'required|min:10',
                'signal_category_id'=>'required',
            ],   
            [
                'signal_name.required'=>'Bạn chưa nhập tên biển báo',
                'signal_number.required'=>'Bạn chưa nhập số biển',
                'signal_content.required'=>'Bạn chưa nhập mô tả loại biển báo',
                'signal_content.min'=>'phải nhập lớn hơn 10 kí tự',
                'signal_category_id.required'=>'Bạn chưa nhập tên biển báo',
            
        ]);

        $signal->signal_name = $request->signal_name;
        $signal->signal_number = $request->signal_number;
        $signal->signal_category_id = $request->signal_category_id;
        $signal->signal_content = $request->signal_content;
        $signal->signal_slug = $request->signal_slug;
        $signal->signal_image = $request->signal_image;
        if($request->hasFile('signal_image')){
            $file= $request->file('signal_image');
            $name = $file->getClientOriginalName();
            $signal_image = str_random(4)."_". $name;
            echo $signal_image;
            while (file_exists("source/img/".$signal_image)){
                 $signal_image = str_random(4)."_". $name;
            }
            $file->move("source/img/",$signal_image);

            $signal->signal_image = $signal_image;
        }
        $signal->save();
        return redirect('admin/bienbao/dsachbienbao')->with('thongbao','Bạn đã sửa thành công');
    }

    public function getsua($id)
    {
        $signal = signals::find($id);
        $cate = categories::all();
        return view('admin.bien_bao.suabienbao', compact(['signal', 'cate']));
    }
    public function postsua(request $request,$id)
    {
        $signal = signals::find($id); 
         // dd($request->tenloaibien);
        $this->validate($request,
            [
                'signal_name'=>'required',
                'signal_number'=>'required',
                'signal_content'=>'required|min:10',
                'signal_category_id'=>'required',
            ],   
            [
                'signal_name.required'=>'Bạn chưa nhập tên biển báo',
                'signal_number.required'=>'Bạn chưa nhập số biển',
                'signal_content.required'=>'Bạn chưa nhập mô tả loại biển báo',
                'signal_content.min'=>'phải nhập lớn hơn 10 kí tự',
                'signal_category_id.required'=>'Bạn chưa nhập tên biển báo',
            
        ]);

        $signal->signal_name = $request->signal_name;
        $signal->signal_number = $request->signal_number;
        $signal->signal_category_id = $request->signal_category_id;
        $signal->signal_content = $request->signal_content;
        $signal->signal_slug = $request->signal_slug;
        $signal->signal_image = $request->signal_image;
        if($request->hasFile('signal_image')){

            $file= $request->file('signal_image');
            $name = $file->getClientOriginalName();
            $signal_image = str_random(4)."_". $name;
            echo $signal_image;
            while (file_exists("source/img/".$signal_image)){
                 $signal_image = str_random(4)."_". $name;
            }
            $file->move("source/img/",$signal_image); 
            
                 unlink("source/img/".$signal->signal_image);

            
 
            $signal->signal_image = $signal_image;
        }

        $signal->save();
        return redirect('admin/bienbao/dsachbienbao/')->with('thongbao','Bạn đã sửa thành công');

    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
        $signals = signals::find($id);
        $data = $request->all();

        $validate = [
            'name' => 'required'
        ];
        Validator::make($data, $validate)->validate();

        if ($signals->update($data)) {
            return redirect('admin/bienbao/dsachbienbao')->with('success','signals has been updated');
        }

        return redirect('admin/bienbao/dsachbienbao')->with('danger','signals can not update!');
    }

     public function destroy($id)
    {
         $signals = signals::find($a);
             $smg = $user->delete();
             if($smg)
             {
                return response()->json(array(
                'status' => 204,
                'smg' =>"Success!"
                ));
             }
             else{
                return response()->json(array(
                'status' => 400,
                'smg' =>"fail!"
                 ));
             }
    }
}
