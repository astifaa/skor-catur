<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jobdes;
use Validator;
use Session;

class JobdesController extends Controller
{

    public function index()
    {
        $data = Jobdes::get();
        return view('jobdes',compact('data'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
     $r = [
         'nama_jobdes'              => 'required|unique:jobdes,nama_jobdes',

     ];

     $m = [
         'nama_jobdes'              => 'Harus diisi',
         'nama_jobdes.unique'              => 'Tidak boleh sama',
     ];
     $v = Validator::make($request->all(), $r, $m);

     if($v->fails()){
        return redirect()->back()->withErrors($v)->withInput($request->all);
    }


    $Jobdes = new Jobdes;
    $Jobdes->nama_jobdes = strtolower($request->nama_jobdes);
    $simpan = $Jobdes->save();

    if($simpan){
        Session::flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('d_jobdes');
    } else {
        Session::flash('errors', 'Data gagal ditambahkan!');
        return redirect()->route('d_jobdes');
    }

}
public function show(Siswa $siswa)
{

}

public function edit($id)
{

}

public function update(Request $request, $id)
{
}

public function destroy($id)
    {

        $data = Jobdes::findOrFail($id);
      
        $data->delete();
 
        return redirect()->route('d_jobdes')
                        ->with('success','Data berhasil dihapus!');
    }
}
