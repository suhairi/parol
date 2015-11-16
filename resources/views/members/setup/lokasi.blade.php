@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Rekod Lokasi</h4></div>
                <div class="panel-body">

                    <form method="post" action="{{ route('members.setup.lokasi') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama Lokasi</label>
                            <input class="form-control" type="text" name="name" />
                        </div>

                        <div align="right"><button class="btn btn-primary">Rekod Lokasi</button></div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-xs-4">&nbsp;</div>

        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Lokasi</h4></div>
                <div class="panel-body">

                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Nama Lokasi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                            <tr>
                                <td>{{ $location->nama }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@stop