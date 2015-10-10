@extends('layouts.members')

@section('content')

    @include('errors._notifications')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kesalahan</h4></div>
                <div class="panel-body">

                    <form action="{{ route('members.setup.kesalahanPost') }}" method="post">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        <div class="form-group">
                            <label for="warganegara">Kategori Kesalahan</label>
                            <select name="kategori_id" class="form-control">
                                <option selected>Kategori Kesalahan</option>
                                @foreach($datas2 as $data2)
                                    <option value="{{ $data2->id }}">{{ $data2->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warganegara">Nama</label>
                            <input class="form-control" type="text" name="nama" placeholder="Contoh : Banduan Akhir" required/>
                        </div>
                        <div class="form-group">
                            <label for="warganegara">Kod</label>
                            <input class="form-control" type="text" name="kod" placeholder="Contoh: BA" required />
                        </div>
                        <div align="right">
                            <input class="btn btn-primary" type="submit" value="Daftar"/>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Kesalahan</h4></div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>Kod</th>
                            <th>Pilihan</th>


                        </tr>
                        </thead>
                        <tbody>
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $bil++ }}</td>
                                <td>{{ $data->kategori->nama }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->kod }}</td>
                                <td><button class="btn btn-danger">Hapus</button></td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="alert-danger">Tiada data.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop