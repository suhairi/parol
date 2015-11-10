@extends('layouts.members')


@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Details</div>

                Flag : {{ $flag }}
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
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
                            <th rowspan="3" width="300">Perkara</th>
                            <th colspan="6"><div align="center">Warganegara</div> </th>
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
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Warga -> Bangsa -> Lokasi -->
                        <tr>
                            <td>PPD Kota Setar</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_15" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        <tr>
                            <td>PPD Pendang</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        <tr>
                            <td>PPD Spetani</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        <tr>
                            <td>PPD Baling</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead class="alert alert-info">
                        <tr align="center">
                            <th rowspan="3" width="300">Perkara</th>
                            <th colspan="6"><div align="center">Warganegara</div> </th>
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
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>RP</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        <tr>
                            <td>Kem Kemasyarakatan</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        <tr>
                            <td>PKW</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" id="BParol_1"/></td>
                        </tr>
                        </tbody>
                    </table>




@stop