@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data PIC Ruangan
                </div>
                <div class="card-body">
                    <form action="{{route('ruangan.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nomor Ruangan</span>
                                    </div>
                                    <input type="text" name="nomor_ruangan" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Ruangan</span>
                                    </div>
                                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Pilih ukuran...</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">penangung jawab</span>
                                    </div>
                                    <select class="custom-select" name="id_user">
                                        <option selected>Pilih ukuran...</option>
                                        @foreach($user as $row)
                                        @if($row->level == 'pic')
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @elseif(!$row->level == 'pic')
                                        <option value="" disable>data belum ada</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">Data Ruangan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>nomor Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Ukuran</th>
                                <th>penangung jawab</th>
                                <th>pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($ruangan as $row)
                                <tr>
                                    <td>{{$row->nomor_ruangan}}</td>
                                    <td>{{$row->nama_ruangan}}</td>
                                    <td>{{$row->ukuran}}</td>
                                    <td>{{$row->users->name}}</td>
                                    <td>
                                        <form action="{{route('ruangan.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus {{$row->ruangan}} ?');">Hapus</button>
                                            <a href="{{route('ruangan.edit',$row->id)}}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{route('ruangan.show',$row->id)}}"
                                                class="btn btn-success">Detail</a>
                                        </form>
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
</div>
@endsection