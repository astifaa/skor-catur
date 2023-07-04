@extends('layouts.app')
@section('content')
<!-- container -->
<div class="container-fluid">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data Jobdes</span>
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
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Jobdes</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="{{route('Jobdes.store')}}">
                    @csrf
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nama Jobdes
                              @if ($errors->has('nama_jobdes'))
                              <sup class="text-danger">{{ $errors->first('nama_jobdes') }}</sup>
                            @endif</label>
                          </label>
                          <input type="text" name="nama_jobdes" class="col-12 form-control" value="{{ old('nama_jobdes') }}" placeholder="Nama Jobdes">
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
                    <h4 class="card-title mg-b-0">DATA JOBDES</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="card-body">
               @if (Session::has('success'))
      <div class="alert alert-success fade show">
        <span class="close" data-dismiss="alert">×</span>
        <strong>{{ Session::get('success') }}</strong>
      </div>
      @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th width="10%">no</th>
          <th>nama jobdes</th>
          <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                           @foreach ($data as $d)
                           <tr>
                            <td>{{$no++}}</td>
          <td>{{$d->nama_jobdes}}</td>
          <td width="10%">
      <form action="" method="POST">
        <div class="btn-group">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>                                       

          <a href="" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-cog"></i></a>
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