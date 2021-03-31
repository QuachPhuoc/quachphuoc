<?php

namespace App\Http\Controllers;

use App\Models\Sv;
use App\Models\Lop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Exports\SvExport;
use App\Imports\SinhvienImport;
use Maatwebsite\Excel\Facades\Excel;

class Svcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSv(){
        $Sv= Sv::all();
        return view('admin.sinhvien.Sv', compact('Sv'));
    }
    public function getClass(){
                
        return view('lopsv');
        
    }
    public function show_ten(){
        $sql  = DB::select("SELECT * from lop");
        return view('lopsv',['data' => $sql] );
    }
     public function getAdd()
    {
        $lop = Lop::all();
        $Sv = new Sv();
        return view('admin.sinhvien.add',compact('Sv', 'lop'));
    }
    public function postAdd(Request $request){
        $request->validate([
			'hovaten' => 'required',
			'lop_id' => 'required',
		]);
        $Sv = new Sv();
        $Sv->lop_id = $request->lop_id;
        $Sv->hovaten = $request ->hovaten;
        $Sv->ngaysinh = $request ->ngaysinh;
        $Sv->dienthoai = $request ->dienthoai;
        $Sv->email = $request ->email;
        $Sv->ghichu =$request ->ghichu;
        $Sv->created_at = Carbon::now();
        $Sv -> save();
        return redirect('/admin/sv/');
    }
    public function getUpdate(Request $request, $id)
    {
        $lop = Lop::all();
        $Sv = Sv::find($id);
        return view('admin.sinhvien.update',compact('Sv', 'lop'));
    }
    public function postUpdate(Request $request, $id){
        $request->validate([
			'hovaten' => 'required',
			'lop_id' => 'required',
		]);
        $Sv =Sv::find($id);
        $Sv->lop_id = $request->lop_id;
        $Sv->hovaten = $request ->hovaten;
        $Sv->ngaysinh = $request ->ngaysinh;
        $Sv->dienthoai = $request ->dienthoai;
        $Sv->email = $request ->email;
        $Sv->ghichu =$request ->ghichu;
        $Sv->created_at = Carbon::now();
        $Sv -> save();
        return redirect('/admin/sv/');
    }
    public function getDelete(Request $request, $id)
    {
        $lop = Lop::all();
        $Sv = Sv::find($id);
        return view('admin.sinhvien.delete',compact('Sv', 'lop'));
    }
    public function postDelete(Request $request, $id){
      
        $Sv =Sv::find($id);
        $Sv->lop_id = $request->tenlop;
        $Sv->hovaten = $request ->hovaten;
        $Sv->ngaysinh = $request ->ngaysinh;
        $Sv->dienthoai = $request ->dienthoai;
        $Sv->email = $request ->email;
        $Sv->ghichu =$request ->ghichu;
        $Sv->created_at = Carbon::now();
        $Sv -> delete();
        return redirect('/admin/sv/')->with('error', 'Xóa thành công');
    }
    public function export() 
    {
        return Excel::download(new SvExport, 'Sv.xlsx');
        
    }
    public function postImport(Request $request) 
    {
        Excel::import(new SinhvienImport, $request->TapTinExcel);
        return redirect('/admin/sv/');
    }
}
