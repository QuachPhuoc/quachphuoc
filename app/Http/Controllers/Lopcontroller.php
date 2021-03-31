<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use App\Models\Lop;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLop(){
        $lop = Lop::all();
        return view('admin.lop.lop', compact('lop'));
    }
    public function getClass(){
                
        return view('khoalop');
        
    }
    public function show_ten(){
        $sql  = DB::select("SELECT * from khoa");
        return view('khoalop',['data' => $sql] );
    }
    public function getAdd()
    {
        $khoa = Khoa::all();
        $lop = new lop();
        return view('admin.lop.add',compact('lop', 'khoa'));
    }
    public function postAdd(Request $request){
        $request->validate([
			'tenlop' => 'required',
			'khoa_id' => 'required',
		]);
        $lop = new Lop();

        $lop->tenlop = $request ->tenlop;
        $lop->khoa_id = $request->khoa_id;
        $lop->created_at = Carbon::now();
        $lop -> save();
        return redirect('/admin/lop/');
    }
 
    public function getUpdate(Request $request, $id)
    {
        $khoa = Khoa::all();
        $lop = Lop::find($id);
        return view('admin.lop.update',compact('lop', 'khoa'));
    }
    public function postUpdate(Request $request, $id)
        {
        $request->validate([
			        'tenlop' => 'required',
			        'khoa_id' => 'required',
                ]);
        $lop = Lop::find($id);
        $lop->tenlop = $request ->tenlop;
        $lop->khoa_id = $request->khoa_id;
        $lop->created_at = Carbon::now();
        $lop -> save();
        return redirect('/admin/lop/');
    }
    public function getDelete(Request $request, $id)
    {
        $khoa = Khoa::all();
        $lop = Lop::find($id);
        return view('admin.lop.delete',compact('lop', 'khoa'));
    }
    public function postDelete(Request $request, $id)
        {
        
        $lop = Lop::find($id);
        $lop->tenlop = $request ->tenlop;
        $lop->khoa_id = $request->khoa_id;
        $lop->created_at = Carbon::now();
        $lop -> delete();
        return redirect('/admin/lop/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function show(Lop $lop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function edit(Lop $lop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lop $lop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lop $lop)
    {
        //
    }
}
