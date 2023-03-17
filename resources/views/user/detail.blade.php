@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>
                                nama lengkap
                            </th>

                            <td>:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>
                                User name
                            </th>

                            <td>:</td>
                            <td>{{$user->username}}</td>
                        </tr>
                        <tr>
                            <th>
                                email
                            </th>

                            <td>:</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection