@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Data Peserta Pemain Catur</div>
        <div class="card-body">
          <table id="example3" class="table table-bordered" style="width:100%">
  <thead class="text-capitalize">
    <th>no</th>
    <th>nama peserta</th>
    <th>skor babak 1</th>
    <th>skor babak 2</th>
    <th>skor babak 3</th>
    <th>skor babak 4</th>
    <th>skor babak 5</th>
    <th>skor babak 6</th>
    <th>skor babak 7</th><!-- 
    <th>skor babak 8</th>
    <th>skor babak 9</th> -->
    <th>Aksi</th>
  </thead>
  <?php $no=1 ?>
    <form method="post" action="{{ route('Pertandingan.update',$data2->id_pertandingan_peserta) }}">
  <tbody>
    
    <td>{{$no++}}</td>
    <td>{{$nama->nama_lengkap}}</td>

    @csrf 
    @method('PUT')
    @if($data2 != NULL)
    @if($data2->babak_1 == 0)
    <td><input type="text" class="form-control" name="babak_1" value="{{$data2->babak_1}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_1" value="{{$data2->babak_1}}"></td>
    @endif

    @if($data2->babak_2 == 0)
    <td><input type="text" class="form-control" name="babak_2" value="{{$data2->babak_2}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_2" value="{{$data2->babak_2}}"></td>
    @endif

    @if($data2->babak_3 == 0)
    <td><input type="text" class="form-control" name="babak_3" value="{{$data2->babak_3}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_3" value="{{$data2->babak_3}}"></td>
    @endif

    @if($data2->babak_4 == 0)
    <td><input type="text" class="form-control" name="babak_4" value="{{$data2->babak_4}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_4" value="{{$data2->babak_4}}"></td>
    @endif

    @if($data2->babak_5 == 0)
    <td><input type="text" class="form-control" name="babak_5" value="{{$data2->babak_5}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_5" value="{{$data2->babak_5}}"></td>
    @endif

    @if($data2->babak_6 == 0)
    <td><input type="text" class="form-control" name="babak_6" value="{{$data2->babak_6}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_6" value="{{$data2->babak_6}}"></td>
    @endif

    @if($data2->babak_7 == 0)
    <td><input type="text" class="form-control" name="babak_7" value="{{$data2->babak_7}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_7" value="{{$data2->babak_7}}"></td>
    @endif

    <!-- @if($data2->babak_8 == 0)
    <td><input type="text" class="form-control" name="babak_8" value="{{$data2->babak_8}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_8" value="{{$data2->babak_8}}"></td>
    @endif

    @if($data2->babak_9 == 0)
    <td><input type="text" class="form-control" name="babak_9" value="{{$data2->babak_9}}"></td>
    @else
    <td><input type="text" readonly class="form-control bg-warning" name="babak_9" value="{{$data2->babak_9}}"></td>
    @endif -->
       
    @endif     
    <td width="10%">
                                 

                  <button type="submit" class="btn-primary btn btn-sm" value="simpan">Tambah</button>
                        </div>
    </td>
    </form>
  </tbody>
</table>

        
</div>
</div>
</div>
</div>
</div>
@endsection