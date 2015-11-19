@extends('layouts.members')


@section('content')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Rekod Kursus</h4></div>
                <div class="panel-body">

                    <form method="post" action="{{ route('members.rekod.kursus.post') }}">
                    {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama">Nama Kursus</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input type="date" name="tarikh" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Tempoh Kursus (hari)</label>
                            <input type="text" name="tempoh" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Lokasi Kursus</label>
                            <select name="lokasi_id" class="form-control">
                            <option value="" selected>Lokasi</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->nama }}</option>
                            @endforeach
                            </select>
                        </div>


                        <div align="right"><button class="btn btn-primary">Rekod Kursus</button></div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Kursus Bulan Ini</h4></div>
                <div class="panel-body">

                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Nama Kursus</th>
                            <th>Tarikh</th>
                            <th>Lokasi</th>
                            <th><div align="center">Tempoh (hari)</div></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{ $course->nama }}</td>
                                <td>{{ $course->tarikh->format('d-m-Y') }}</td>
                                <td>{{ $course->lokasi->nama }}</td>
                                <td align="center">{{ $course->tempoh }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            {{--// hello world--}}
        </div>
    </div>

@stop