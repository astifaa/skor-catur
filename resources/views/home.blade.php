@extends('layouts.app')

@section('content')
<!-- container -->
<div class="container-fluid">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data Peserta</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-success btn-icon mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-account-multiple-plus"></i></button>
            </div>
        </div>
    </div>
    <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Peserta</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="{{ route('Peserta.store')}}">
                    @csrf
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nama Peserta
                              @if ($errors->has('nama_lengkap'))
                              <sup class="text-danger">{{ $errors->first('nama_lengkap') }}</sup>
                            @endif</label>
                          </label>
                          <input type="text" name="nama_lengkap" class="col-12 form-control" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
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
                          <option selected disabled>- Pilih -</option>
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
                      <input type="text" name="tempat_lahir" class="col-12 form-control" value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">Tanggal Lahir
                        @if ($errors->has('tanggal_lahir'))
                        <sup class="text-danger">{{ $errors->first('tanggal_lahir') }}</sup>
                      @endif</label>
                    </label>
                    <input type="date" name="tanggal_lahir" class="col-12 form-control" value="{{ old('tanggal_lahir') }}" placeholder="Tanggal Lahir">
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
                  <textarea name="alamat" class="col-12 form-control" value="{{ old('alamat') }}" placeholder="Alamat"></textarea>
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
                <input type="text" name="no_hp" class="col-12 form-control" value="{{ old('no_hp') }}" placeholder="No Hp">
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
                <option selected disabled>- Pilih -</option>
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

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>

<!-- Button trigger modal -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">DATA PESERTA CATUR</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th width="10%">no</th>
    <th>nama pemain</th>
    <th>Alamat</th>
    <th>no hp</th>
    <th>Jobdes</th>
    <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                           @foreach ($data as $d)
                           <tr>
                      
      <td>{{$no++}}</td>
    <td>{{$d->nama_lengkap}}</td>
    <td>{{$d->alamat}}</td>
    <td>{{$d->no_hp}}</td>
    <td width="10%">{{$d->nama_jobdes}}</td>
    <td width="10%">
      <form action="{{ route('Peserta.destroy',$d->id_peserta)}}" method="POST">
        <div class="btn-group">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>                                       

          <a href="{{ route('Peserta.edit',$d->id_peserta) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-cog"></i></a>
        </div>
    </td>
      </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
