<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jobdes;
use App\Models\Peserta;
use App\Models\Pertandingan;
use Validator;
use Session;

class PertandinganController extends Controller
{

    public function index()
    {
        $data = Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->get();
        $nama = Peserta::get();
        $jumlah = Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->where('peserta.id_peserta','=','pertandingan_peserta.id_peserta')->sum('babak_1');
        $cek = Pertandingan::get();
        foreach($cek as $c){
            $c->babak_1;
            $c->babak_2;
            $c->babak_3;
            $c->babak_4;
            $c->babak_5;
            $c->babak_6;
            $c->babak_7;
            $c->babak_8;
            $c->babak_9;
        }
        return view('pertandingan',compact('data','nama','jumlah'));

    }

    public function skor(){
        $d = Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->get();
        $totalskor =Pertandingan::join('peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->where('peserta.id_peserta','=','3')->groupBy('id_pertandingan_peserta')->sum('babak_1');
        return view('skor_pertandingan',compact('d','totalskor'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    //  $r = [
    //      'id_peserta'              => 'required',
    //      'babak_1' => 'required',

    //  ];

    //  $m = [
    //      'id_peserta'              => 'Harus diisi',
    //  ];
    //  $v = Validator::make($request->all(), $r, $m);

    //  if($v->fails()){
    //     return redirect()->back()->withErrors($v)->withInput($request->all);
//     // }
//         $na = Pertandingan::get();
//         foreach($na as $nama){
//             $nama->id_peserta;
        
// if($request->id_peserta != $nama){
       $Peserta = new Pertandingan;
       $Peserta->id_peserta = strtolower($request->id_peserta);
       $Peserta->babak_1 = 0;
       $Peserta->babak_2 = 0;
       $Peserta->babak_3 = 0;
       $Peserta->babak_4 = 0;
       $Peserta->babak_5 = 0;
       $Peserta->babak_6 = 0;
       $Peserta->babak_7 = 0;
       $Peserta->babak_8 = 0;
       $Peserta->babak_9 = 0;
       $simpan = $Peserta->save();

       if($simpan){
        Session::flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('d_pertandingan');
    } else {
        Session::flash('errors', ['' => 'Data gagal ditambahkan!']);
        return redirect()->route('d_pertandingan');
    }
// } else {
//     Session::flash('success', 'Hanya bisa menambahkan 1 perserta');
//             return redirect()->route('d_pertandingan');
// }
    

}
public function show($id)
{ 


}

public function edit($id)
{
    $data2 = Pertandingan::where('id_peserta',$id)->first();
    $nama = peserta::join('pertandingan_peserta','peserta.id_peserta','=','pertandingan_peserta.id_peserta')->find($id);

    return view('pertandingan_show',compact('data2','nama'));
}

public function update(Request $request, $id)
{
    $Pertandingan = Pertandingan::find($id);
    $Pertandingan->babak_1 = $request->babak_1;
    $Pertandingan->babak_2 = $request->babak_2;
    $Pertandingan->babak_3 = $request->babak_3;
    $Pertandingan->babak_4 = $request->babak_4;
    $Pertandingan->babak_5 = $request->babak_5;
    $Pertandingan->babak_6 = $request->babak_6;
    $Pertandingan->babak_7 = $request->babak_7;
    $Pertandingan->babak_8 = $request->babak_8;
    $Pertandingan->babak_9 = $request->babak_9;
    $Pertandingan->update(); 
        // if($request->babak_1 != null) {
        //     $Pertandingan->babak_1 = $request->babak_1;
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_2 != null) {
        //     $Pertandingan->babak_2 = strtolower($request->babak_2);
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_3 != null) {
        //     $Pertandingan->babak_3 = strtolower($request->babak_3);
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_4 != null) {
        //     $Pertandingan->babak_4 = strtolower($request->babak_4);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_5 != null) {
        //     $Pertandingan->babak_5 = strtolower($request->babak_5);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_6 != null) {
        //     $Pertandingan->babak_6 = strtolower($request->babak_6);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_7 != null) {
        //     $Pertandingan->babak_7 = strtolower($request->babak_7);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_8 != null) {
        //     $Pertandingan->babak_8 = strtolower($request->babak_8);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->babak_9 = 0;
        //     $Pertandingan->update(); 
        // } 
        // if ($request->babak_9 != null) {
        //     $Pertandingan->babak_9 = strtolower($request->babak_9);
        //     $Pertandingan->babak_2 = 0;
        //     $Pertandingan->babak_3 = 0;
        //     $Pertandingan->babak_4 = 0;
        //     $Pertandingan->babak_5 = 0;
        //     $Pertandingan->babak_6 = 0;
        //     $Pertandingan->babak_7 = 0;
        //     $Pertandingan->babak_8 = 0;
        //     $Pertandingan->babak_1 = 0;
        //     $Pertandingan->update(); 
        // } 
    return redirect()->route('d_skor')
    ->with('success','Data berhasil diubah!');
}

public function destroy($id)
{

}
}
