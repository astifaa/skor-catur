<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Jobdes;
use App\Models\Pertandingan;
use Validator;
use Session;

class PesertaController extends Controller
{

    public function index()
    {
        $data = Peserta::get();
        $jobdes = Jobdes::get();
        return view('home',compact('data','jobdes'));

    }

    public function edit($id)
    {
        $data=Peserta::find($id);
        $jobdes = Jobdes::get();
        return view('edit-peserta',compact('data','jobdes'));
    }

    public function store(Request $request)
    {
     $r = [
         'nama_lengkap'              => 'required',
         'jenis_kelamin'              => 'required',
         'tempat_lahir'   => 'required',
         'tanggal_lahir'          => 'required',
         'alamat'          => 'required',
         'no_hp'          => 'required',
         'id_jobdes'          => 'required',

     ];

     $m = [
         'nama_lengkap'              => 'Harus diisi',
         'jenis_kelamin'              => 'Harus diisi',
         'tempat_lahir'   => 'Harus diisi',
         'tanggal_lahir'          => 'Harus diisi',
         'alamat'          => 'Harus diisi',
         'no_hp'          => 'Harus diisi',
         'id_jobdes'          => 'Harus diisi',
     ];
     $v = Validator::make($request->all(), $r, $m);

     if($v->fails()){
        return redirect()->back()->withErrors($v)->withInput($request->all);
    }

    $Peserta = new Peserta;
    $Peserta->nama_lengkap = strtolower($request->nama_lengkap);
    $Peserta->jenis_kelamin = strtolower($request->jenis_kelamin);
    $Peserta->tempat_lahir = strtolower($request->tempat_lahir);
    $Peserta->tanggal_lahir = strtolower($request->tanggal_lahir);
    $Peserta->alamat = strtolower($request->alamat);
    $Peserta->no_hp = strtolower($request->no_hp);
    $Peserta->id_jobdes = strtolower($request->id_jobdes);
    $simpan = $Peserta->save();

    if($simpan){
        Session::flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('home');
    } else {
        Session::flash('errors', ['' => 'Data gagal ditambahkan!']);
        return redirect()->route('home');
    }

}
public function update(Request $request, $id)
{

 $r = [
     'nama_lengkap'              => 'required',
     'jenis_kelamin'              => 'required',
     'tempat_lahir'   => 'required',
     'tanggal_lahir'          => 'required',
     'alamat'          => 'required',
     'no_hp'          => 'required',
     'id_jobdes'          => 'required',

 ];

 $m = [
     'nama_lengkap'              => 'Harus diisi',
     'jenis_kelamin'              => 'Harus diisi',
     'tempat_lahir'   => 'Harus diisi',
     'tanggal_lahir'          => 'Harus diisi',
     'alamat'          => 'Harus diisi',
     'no_hp'          => 'Harus diisi',
     'id_jobdes'          => 'Harus diisi',
 ];
 $v = Validator::make($request->all(), $r, $m);

 if($v->fails()){
    return redirect()->back()->withErrors($v)->withInput($request->all);
}

$Peserta = Peserta::find($id);
$Peserta->nama_lengkap = strtolower($request->nama_lengkap);
$Peserta->jenis_kelamin = strtolower($request->jenis_kelamin);
$Peserta->tempat_lahir = strtolower($request->tempat_lahir);
$Peserta->tanggal_lahir = strtolower($request->tanggal_lahir);
$Peserta->alamat = strtolower($request->alamat);
$Peserta->no_hp = strtolower($request->no_hp);
$Peserta->id_jobdes = strtolower($request->id_jobdes);
$Peserta->update();

        /// setelah berhasil mengubah data
return redirect()->route('home')
->with('success','Data berhasil diubah!');
}
public function destroy($id)
{

    $data = Peserta::findOrFail($id);

    $data->delete();

    return redirect()->route('home')
    ->with('success','Data berhasil dihapus!');
}
public function beranda(){
        $d = Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->get();
        $totalskor =Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->where('peserta.id_peserta','=','3')->groupBy('id_pertandingan_peserta')->sum('babak_1');
        return view('beranda',compact('d','totalskor'));
    }
}