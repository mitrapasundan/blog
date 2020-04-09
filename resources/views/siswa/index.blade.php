@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Siswa</h3>
                    <!-- Button trigger modal -->
                    <div class="right">
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_siswa as $data)
                            <tr>
                                <td>{{$data->nama_depan}}</td>
                                <td>{{$data->nama_belakang}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->agama}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    <a href="/siswa/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/siswa/{{$data->id}}/delete" onclick="return confirm('yakin mau dihapus?')"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    <!-- {{csrf_field()}} -->
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama Belakang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input type="text" name="agama" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Agama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
