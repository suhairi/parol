@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Details</div>

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
                                <th rowspan="3">Perkara</th>
                                <th rowspan="3">Kategori Penghuni</th>
                                <th colspan="6"><div align="center">Warganegara</div> </th>
                                <th colspan="2" rowspan="2"><div align="center">Warga Asing</div></th>
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
                        @if(empty($datas))
                            <form method="post" action="{{ route('members.rekod.index.post') }}">
                        @else
                            <form method="post" action="{{ route('members.rekod.index.update') }}">
                        @endif
                            {{ csrf_field() }}
                            <input type="hidden" name="tarikh" value="{{ $tarikh }}">
                            <input type="hidden" name="cawangan" value="{{ $cawangan }}">
                                @include('forms._details')
                            <tr>
                                <td colspan="13" align="right"><button class="btn btn-primary">Kemaskini Rekod</button></td>
                            </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>



@stop