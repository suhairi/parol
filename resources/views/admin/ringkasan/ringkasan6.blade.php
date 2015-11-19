@extends('layouts.admin')

@section('content')

    <div class="row">

    @if($jumlah != 0)
        <div class="col-xs-2">&nbsp;</div>
        <div class="col-xs-8">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>POKOK SENA</h4>
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
            @include('admin.includes._controlButtons')
        </div>
    @else
        <div class="col-xs-8 danger">Tiada Data.</div>
    @endif




    <script>

        $(document).ready(function() {

            var timeout = setTimeout(function() {
                // The refresh is occurring here
                window.location.href = "{{ route('admin.ringkasan7') }}";
            }, 10000);

            $('#pause').click(function(e) {
                clearTimeout(timeout);
                $('#pause').hide();
            });

            $('#next').click(function() {
                window.location = "{{ route('admin.ringkasan7') }}";
            });

            $('#previous').click(function() {
                window.location = "{{ route('admin.ringkasan5') }}";
            });
        });

    </script>


    </div>


@stop