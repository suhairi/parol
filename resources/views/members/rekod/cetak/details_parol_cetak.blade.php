@extends('layouts.members_cetak')


@section('content')

    <div class="row">
        <div class="col-xs-12">

            <input type="hidden" name="tarikh" value="{{ $tarikh }}">
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
                    <th rowspan="3" width="300">Lokasi</th>
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
                    @include('forms._details_parol1_cetak')
                </tbody>
            </table>

        </div>
    </div>
    <script>

        $(document).ready(function () { window.print() });
    </script>







@stop