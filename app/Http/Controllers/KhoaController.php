<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $khoa = Khoa::all();
        return view('admin.khoa.list', compact('khoa'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getAdd()
    {
        return view('admin.khoa.add');
    }
    public function postAdd(Request $request)
    {
        $khoa = new Khoa();
        $khoa->tenkhoa = $request->tenkhoa;
        $khoa->created_at = Carbon::now();
		$khoa->updated_at  = Carbon::now();
        $khoa->save();
        return redirect('/admin/khoa/');
    }
   
    public function getUpdate(Request $request, $id)
    {
          $khoa = Khoa::find($id);
          return view('admin.khoa.update',compact('khoa'));
    }
    public function postUpdate(Request $request, $id)
    {
        $khoa = Khoa::find($id);
        $khoa -> tenkhoa= $request->tenkhoa;
        $khoa->created_at = Carbon::now();
		$khoa->updated_at  = Carbon::now();
        $khoa->save();  
        return redirect('/admin/khoa/');
    }

    
    public function getDelete(Request $request, $id)
    {
          $khoa = Khoa::find($id);
          return view('admin.khoa.delete',compact('khoa'));
    }
    public function postDelete(Request $request, $id)
    {
        $khoa = Khoa::find($id);
        $khoa -> tenkhoa= $request->tenkhoa;
        $khoa->delete(); 
        return redirect('/admin/khoa/');
        
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khoa $khoa)
    {
        //
    }
}
