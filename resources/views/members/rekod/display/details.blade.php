@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="wan-spinner wan-spinner-2">
                <a href="javascript:void(0)" class="minus">-</a>
                <input type="text" value="1">
                <a href="javascript:void(0)" class="plus">+</a>
            </div>

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
                                <th colspan="2"><div align="center">Melayu</div></th>
                                <th colspan="2"><div align="center">Cina</div></th>
                                <th colspan="2"><div align="center">India</div></th>
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
                        <form>
                            <fieldset>

                            @foreach($datas1 as $data1)
                                <tr>
                                    <td rowspan="{{ $data1['count'] }}">{{ $data1['nama'] }}</td>
                                    @foreach($kesalahans as $kesalahan)
                                        @if($kesalahan->kategori_id == $data1['id'])
                                                    <td>{{ $kesalahan->nama }}</td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>
                                                    <td><input class="form-control input-small" type="number" min="0" max="1000" value="0"/></td>

                                                    <td>100</td>
                                                </tr>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                            </fieldset>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>



@stop