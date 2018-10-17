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
    public function create()
    {
        $data = [];
        $data['categoryOption'] = signals::getCategoryOption(NULL);
        return view('admin.bien_bao.thembienbao', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $validators = $this->validate(request(), [
            [
                'signal_name'=>'required',
                'signal_number'=>'required',
                'signal_content'=>'required|min:10',
                'signal_image'=>'required'
            ],   
            [
                'signal_name.required'=>'Bạn chưa nhập tên loại biển báo',
                'signal_content.required'=>'Bạn chưa nhập mô tả loại biển báo',
                'mota.min'=>'phải nhập lớn hơn 10 kí tự',
            ],
        ]);

        if ($signals = signals::create($data)) {
            return redirect('admin/bienbao/dsachbienbao')->with('success','Tạo danh mục thành công!');
        }

        return redirect('admin/bienbao/dsachbienbao')->with('danger','Không thể tạo danh mục');
    }

    public function edit($id)
    {
       
         $data =  signals::find($id);
         dd($data);
        // return view('admin.bien_bao.suabienbao', $data);
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
        $signals = signals::find($id);
        if ($signals) {
            if ($signals->delete()) {
                    return redirect('admin/bienbao/dsachbienbao')->with('success','signals has been deleted');
            }
        }

        return redirect('admin/bienbao/dsachbienbao')->with('danger','Can not delete this signals!');
    }
}
