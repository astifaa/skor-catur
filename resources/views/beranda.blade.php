@extends('layouts.header')
@section('content')
    <div class="col-12 mb-2" style="text-align: center;">
        <img src="logo.png" class="img-fluid text-center" width="13%">
 
    </div>
<div class="container">
    
    <div class="row justify-content-center">
            <h3 align="center">Data Skor Peserta Catur</h3>
        <div class="col-md-12  p-3 mt-3 bg-white">
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive" id="example2">              
                        <thead class="bg-primary ">
                <tr>
                    <th>no</th>
                <th>nama peserta</th>
                <th >gender</th>
                <th>skor babak 1</th>
                <th>skor babak 2</th>
                <th>skor babak 3</th>
                <th>skor babak 4</th>
                <th>skor babak 5</th>
                <th>skor babak 6</th>
                <th>skor babak 7</th><!-- 
                <th>skor babak 8</th>
                <th>skor babak 9</th> -->
                <th>Total Skor</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1 ?>
                    @foreach($d as $data2)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data2->nama_lengkap}}</td>
                <td class="text-capitalize">{{$data2->jenis_kelamin}}</td>
                @if($data2 != NULL)
                @if($data2->babak_1 == 0)
                <td><input type="text" class=" form-control" name="babak_1" readonly value="{{$data2->babak_1}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_1" value="{{$data2->babak_1}}"></td>
                @endif

                @if($data2->babak_2 == 0)
                <td><input type="text" class="form-control" name="babak_2" readonly  value="{{$data2->babak_2}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_2" value="{{$data2->babak_2}}"></td>
                @endif

                @if($data2->babak_3 == 0)
                <td><input type="text" class="form-control" name="babak_3" readonly value="{{$data2->babak_3}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_3" value="{{$data2->babak_3}}"></td>
                @endif

                @if($data2->babak_4 == 0)
                <td><input type="text" class="form-control" name="babak_4" readonly value="{{$data2->babak_4}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_4" value="{{$data2->babak_4}}"></td>
                @endif

                @if($data2->babak_5 == 0)
                <td><input type="text" class="form-control" name="babak_5" readonly value="{{$data2->babak_5}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_5" value="{{$data2->babak_5}}"></td>
                @endif

                @if($data2->babak_6 == 0)
                <td><input type="text" class="form-control" name="babak_6" readonly value="{{$data2->babak_6}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_6" value="{{$data2->babak_6}}"></td>
                @endif

                @if($data2->babak_7 == 0)
                <td><input type="text" class="form-control" name="babak_7" readonly value="{{$data2->babak_7}}"></td>
                @else
                <td><input type="text" readonly class="text-black form-control bg-warning" name="babak_7" value="{{$data2->babak_7}}"></td>
                @endif

                <!-- @if($data2->babak_8 == 0)
                <td><input type="text" class="form-control" name="babak_8" readonly value="{{$data2->babak_8}}"></td>
                @else
                <td><input type="text" readonly class="form-control bg-warning" name="babak_8" value="{{$data2->babak_8}}"></td>
                @endif

                @if($data2->babak_9 == 0)
                <td><input type="text" class="form-control" name="babak_9" readonly value="{{$data2->babak_9}}"></td>
                @else
                <td><input type="text" readonly class="form-control bg-warning" name="babak_9" value="{{$data2->babak_9}}"></td>
                @endif -->

                @endif
                <?php
                $sum = $data2->babak_1 + $data2->babak_2 + $data2->babak_3 + $data2->babak_4 + $data2->babak_5 + $data2->babak_6 + $data2->babak_7 + $data2->babak_8+ $data2->babak_9;
                ?>  
                <td><input type="text" class="bg-info text-black form-control" style="border:none" readonly value="<?php echo $sum ?>"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
