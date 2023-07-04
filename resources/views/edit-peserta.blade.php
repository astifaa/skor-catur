@extends('layouts.app')
@section('content')
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Data Peserta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{ route('Peserta.update',$data->id_peserta)}}">
                @csrf
              @method('PUT')
                <div class="mb-3">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nama Peserta
                          @if ($errors->has('nama_lengkap'))
                          <sup class="text-danger">{{ $errors->first('nama_lengkap') }}</sup>
                        @endif</label>
                      </label>
                      <input type="text" name="nama_lengkap" value="{{$data->nama_lengkap}}" class="col-12 form-control" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
                    </div>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Jenis Kelamin
                        @if ($errors->has('jenis_kelamin'))
                        <sup class="text-danger">{{ $errors->first('jenis_kelamin') }}</sup>
                      @endif</label>
                    </label>
                    <select name="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}" placeholder="Jenis Kelamin">
                      <option selected value="{{$data->jenis_kelamin}}" disabled>Sebelumnya : {{$data->jenis_kelamin}} (Perempuan)</option>
                      <option value="P">Perempuan</option>
                      <option value="L">Laki-laki</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tempat Lahir
                      @if ($errors->has('tempat_lahir'))
                      <sup class="text-danger">{{ $errors->first('tempat_lahir') }}</sup>
                    @endif</label>
                  </label>
                  <input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}" class="col-12 form-control" value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Tanggal Lahir
                    @if ($errors->has('tanggal_lahir'))
                    <sup class="text-danger">{{ $errors->first('tanggal_lahir') }}</sup>
                  @endif</label>
                </label>
                <input type="date" value="{{$data->tanggal_lahir}}" name="tanggal_lahir" class="col-12 form-control" value="{{ old('tanggal_lahir') }}" placeholder="Tanggal Lahir">
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="bmd-label-floating">Alamat
                  @if ($errors->has('alamat'))
                  <sup class="text-danger">{{ $errors->first('alamat') }}</sup>
                @endif</label>
              </label>
              <textarea name="alamat" class="col-12 form-control" value="{{ old('alamat') }}" placeholder="Alamat">{{$data->alamat}}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="bmd-label-floating">No Hp
                @if ($errors->has('no_hp'))
                <sup class="text-danger">{{ $errors->first('no_hp') }}</sup>
              @endif</label>
            </label>
            <input type="text" value="{{$data->no_hp}}" name="no_hp" class="col-12 form-control" value="{{ old('no_hp') }}" placeholder="No Hp">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label class="bmd-label-floating">Jobdes
              @if ($errors->has('id_jobdes'))
              <sup class="text-danger">{{ $errors->first('id_jobdes') }}</sup>
            @endif</label>
          </label>
          <select name="id_jobdes" class="form-control" value="{{ old('id_jobdes') }}">
            <option selected value="{{$data->id_jobdes}}" disabled>Sebelumnya : {{$data->id_jodes}}</option>
            @foreach ($jobdes as $j)
            <option value="{{$j->id_jobdes}}">{{$j->nama_jobdes}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="text-align: right;">
    <div class="col-12">

      <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
@endsection