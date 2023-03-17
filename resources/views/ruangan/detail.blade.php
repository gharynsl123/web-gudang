@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow mt-3">
            <div class="card-header d-flex justify-content-center">
                Detail ruangan
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>
                            PJ
                        </th>

                        <td>:</td>
                        <td>{{$ruangan->users->name}}</td>
                    </tr>
                    <tr>
                        <th>
                            Nama Gudang
                        </th>

                        <td>:</td>
                        <td>{{$ruangan->nama_ruangan}}</td>
                    </tr>
                    <tr>
                        <th>
                            Nomor
                        </th>

                        <td>:</td>
                        <td>{{$ruangan->nomor_ruangan}}</td>
                    </tr>
                    <tr>
                        <th>
                            Ukuran
                        </th>

                        <td>:</td>
                        <td>
                            <span class="badge badge-primary py-2 px-3 shadow">
                                {{$ruangan->ukuran}}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection