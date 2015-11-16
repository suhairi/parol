@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Rekod Pengguna</h4></div>
                <div class="panel-body">

                    <form method="post" action="{{ route('members.setup.pengguna') }}">
                    {{ csrf_field() }}


                        <div class="form-group">
                            <label for="nama">Nama Penuh</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Emel</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div align="right"><button class="btn btn-primary">Rekod Pengguna</button></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            @if($user->email != 'suhairi81@gmail.com')
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

@stop