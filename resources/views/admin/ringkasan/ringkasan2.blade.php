@extends('layouts.members')

@section('content')

    <div class="row">

        {{ $jumlah }}

    @if($jumlah != 0)

        {{-- ALOR SETAR--}}
        <div class="col-xs-3">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>ALOR SETAR</h4></div>
                <div class="panel-body">

                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Keseluruhan</strong></td>
                            <td align="right"><strong>{{ $data[0]['jumlah'] + $data[1]['jumlah'] }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Lelaki</strong></td>
                            <td align="right">{{ $data[0]['jumlah'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Perempuan</strong></td>
                            <td align="right">{{ $data[1]['jumlah'] }}</td>
                        </tr>
                    </table>
                    <div align="right"><button class="btn btn-default">Details</button></div>
                </div>
            </div>
        </div>

        {{-- POKOK SENA --}}
        <div class="col-xs-3">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>POKOK SENA</h4></div>
                <div class="panel-body">

                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Keseluruhan</strong></td>
                            <td align="right"><strong>{{ $data[2]['jumlah'] + $data[3]['jumlah'] }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Lelaki</strong></td>
                            <td align="right">{{ $data[2]['jumlah'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Perempuan</strong></td>
                            <td align="right">{{ $data[3]['jumlah'] }}</td>
                        </tr>
                    </table>
                    <div align="right"><button class="btn btn-default">Details</button></div>
                </div>
            </div>
        </div>

        {{-- SUNGAI PETANI --}}
        <div class="col-xs-3">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>SUNGAI PETANI</h4></div>
                <div class="panel-body">

                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Keseluruhan</strong></td>
                            <td align="right"><strong>{{ $data[4]['jumlah'] + $data[5]['jumlah'] }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Lelaki</strong></td>
                            <td align="right">{{ $data[4]['jumlah'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Perempuan</strong></td>
                            <td align="right">{{ $data[5]['jumlah'] }}</td>
                        </tr>
                    </table>
                    <div align="right"><button class="btn btn-default">Details</button></div>
                </div>
            </div>
        </div>

        {{-- SUNGAI PETANI --}}
        <div class="col-xs-3">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>PAROL</h4></div>
                <div class="panel-body">

                    <table class="table table-responsive">
                        <tr>
                            <td><strong>Keseluruhan</strong></td>
                            <td align="right"><strong>{{ $data[6]['jumlah'] + $data[7]['jumlah'] }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Lelaki</strong></td>
                            <td align="right">{{ $data[6]['jumlah'] }}</td>
                        </tr>
                        <tr>
                            <td><strong>Perempuan</strong></td>
                            <td align="right">{{ $data[7]['jumlah'] }}</td>
                        </tr>
                    </table>
                    <div align="right"><button class="btn btn-default">Details</button></div>
                </div>
            </div>
        </div>
    @else
        <div class="col-xs-8 danger">Tiada Data.</div>
    @endif


    <meta http-equiv="refresh" content="6; url={{ route('admin.ringkasan3') }} ">



    </div>


@stop