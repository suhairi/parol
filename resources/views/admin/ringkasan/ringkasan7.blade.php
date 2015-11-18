@extends('layouts.admin')

@section('content')

    <div class="row">

    @if(!empty($data))
        <div class="col-xs-2">&nbsp;</div>
        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>SUNGAI PETANI</h4>
                    <strong>Tarikh : </strong> {{ \Carbon\Carbon::now()->format('d-m-Y') }}<br />
                    <?php
                    if(\Carbon\Carbon::now()->format('D') == 'Sun')
                        $hari = 'Ahad';
                    if(\Carbon\Carbon::now()->format('D') == 'Mon')
                        $hari = 'Isnin';
                    if(\Carbon\Carbon::now()->format('D') == 'Tue')
                        $hari = 'Selasa';
                    if(\Carbon\Carbon::now()->format('D') == 'Wed')
                        $hari = 'Rabu';
                    if(\Carbon\Carbon::now()->format('D') == 'Thu')
                        $hari = 'Khamis';
                    if(\Carbon\Carbon::now()->format('D') == 'Fri')
                        $hari = 'Jumaat';
                    if(\Carbon\Carbon::now()->format('D') == 'Sat')
                        $hari = 'Sabtu';
                    ?>
                    <strong>Hari &nbsp;&nbsp;&nbsp;&nbsp;: </strong> {{ $hari  }}<br />
                </div>
                <div class="panel-body">

                    <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

                    <script>

                        $(function () {

                            $(document).ready(function () {
                                        // Build the chart
                                        $('#container').highcharts(
                                                {!! json_encode($charts) !!}
                            );
                        });
                        });

                    </script>
                </div>
            </div>
        </div>
    @else
        <div class="col-xs-8 danger">Tiada Data.</div>
    @endif


    <meta http-equiv="refresh" content="10; url={{ route('admin.ringkasan8') }} ">



    </div>


@stop