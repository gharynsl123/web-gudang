@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Ruangan
                </div>
                <div class="card-body">
                    <form action="{{route('ruangan.update',$ruangan->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="input-group mb-3 col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nomor ruangan</span>
                                </div>
                                <input type="text" name="nomor_ruangan" value="{{$ruangan->nomor_ruangan}}"
                                    class="form-control" placeholder="nomor">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama ruangan</span>
                                </div>
                                <input type="text" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}"
                                    class="form-control" placeholder="nama Ruangan">
                            </div>
                            <div class="input-group mb-3 col-md-8">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Penanggung Jawab</span>
                                </div>
                                <select class="custom-select" name="id_user" id="inputGroupSelect01">
                                    <option selected value="{{$ruangan->users->id}}">{{$ruangan->users->name}}</option>
                                    @foreach($user as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Ukuran</label>
                                    </div>
                                    <select class="custom-select" name="ukuran">
                                        <option selected>{{$ruangan->ukuran}}</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection