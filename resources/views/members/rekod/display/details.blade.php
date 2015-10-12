@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Details</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th width="125">Institusi </th>
                            <th width="5">:</th>
                            <td>{{ $cawangan }}</td>
                        </tr>
                        <tr>
                            <th>Tarikh</th>
                            <th>:</th>
                            <td>{{ $tarikh }}</td>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <thead class="alert alert-info">
                            <tr align="center">
                                <th rowspan="3">Perkara</th>
                                <th rowspan="3">Kategori Penghuni</th>
                                <th colspan="6"><div align="center">Warganegara</div> </th>
                                <th colspan="2" rowspan="2"><div align="center">Bukan Warganegara</div></th>
                                <th colspan="2" rowspan="2"><div align="center">Lain-lain</div></th>
                                <th rowspan="3"><div align="center">Jumlah</div></th>
                            </tr>
                            <tr>
                                <th colspan="2">Melayu</th>
                                <th colspan="2">Cina</th>
                                <th colspan="2">India</th>
                            </tr>
                            <tr>
                                <th><div align="center">L</div></th>
                                <th><div align="center">P</div></th>
                                <th><div align="center">L</div></th>
                                <th><div align="center">P</div></th>
                                <th><div align="center">L</div></th>
                                <th><div align="center">P</div></th>
                                <th><div align="center">L</div></th>
                                <th><div align="center">P</div></th>
                                <th><div align="center">L</div></th>
                                <th><div align="center">P</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas1 as $data1)
                                <tr>
                                    <td rowspan="{{ $data1['count'] }}">{{ $data1['nama'] }}</td>
                                    @foreach($kesalahans as $kesalahan)
                                        @if($kesalahan->kategori_id == $data1['id'])
                                                    <td>{{ $kesalahan->nama }}</td>
                                                    <td><div align="center"><input type="text" name="1_1_1" size="3" /></div></td>
                                                    <td>P</td>
                                                    <td>L</td>
                                                    <td>P</td>
                                                    <td>L</td>
                                                    <td>P</td>
                                                    <td>L</td>
                                                    <td>P</td>
                                                    <td>L</td>
                                                    <td>P</td>
                                                    <td>100</td>
                                                </tr>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop