@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Pejabat Penjara</h4></div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="warganegara">Pejabat Penjara</label>
                        <input class="form-control" type="text" name="nama"/>
                    </div>
                    <div align="right">
                        <input class="btn btn-primary" type="submit" value="Daftar"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Pejabat Penjara</h4></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Nama</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $bil++ }}</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="alert-danger">Tiada data.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop