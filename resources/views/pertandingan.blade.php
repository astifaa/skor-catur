@extends('layouts.app')

@section('content')
<!-- container -->
<div class="container-fluid">
  <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
      <div class="d-flex">
        <h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Data Pertandingan</span>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->
  <div class="row row-sm">
    <div class="col-12">
      <div class="col-xl-6" style="float: left;">
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  @foreach ($nama as $d)
                  <tr>
                   <form method="post" action="{{route('Pertandingan.store')}}">
                    @csrf
                    <td>{{$no++}}</td>
                    <td><input type="hidden" name="id_peserta" value="{{$d->id_peserta}}">{{$d->nama_lengkap}}</td>
                    <td>{{$d->alamat}}</td>
                    <td>{{$d->no_hp}}</td>
                    <td width="13%">

                      <button type="submit" class="btn btn-primary btn-sm">Pilih</button>
                    </td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-6" style="float: right;">
      <div class="card">
        <div class="card-header bg-primary pb-0">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0 text-white ">Data Pemain</h4>
            <i class="mdi mdi-dots-horizontal text-gray"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="example2">
              <thead>
                <tr>
                  <th width="10%">no</th>
                  <th>nama pemain</th>
                  <th>no hp</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <ttbody>
                  <?php $no=1; ?>
                  @foreach ($data as $d)
                  <tr>
                    <td>{{$no++}}</td>
                    <td><input type="hidden" name="id_peserta" value="{{$d->id_peserta}}">{{$d->nama_lengkap}}</td>
                    <td>{{$d->no_hp}}</td>
                    <td width="13%">          
            <a href="{{ route('Pertandingan.edit',$d->id_peserta) }}" class="btn btn-success btn-sm" title="Edit">Skor</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endsection
