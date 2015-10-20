@extends('layouts.members')

@section('content')

    @include('errors._notifications')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Rekod Maklumat</h4></div>
                <div class="panel-body">

                <form method="post" action="{{ route('members.rekod.indexPost') }}">
                    {{ csrf_field() }}

                    <div class="form-group form-inline">
                        <label for="tarikh">Tarikh</label>
                        <input class="form-control" type="date" name="tarikh" id="tarikh" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="form-group">
                        <label for="cawangan">Pejabat</label>
                        <select class="form-control" name="cawangan_id" required="">
                            <option>Pejabat</option>
                            @foreach($cawangans as $cawangan)
                                <option value="{{ $cawangan->id }}">{{ $cawangan->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" align="right">
                        <input class="btn btn-primary" type="submit" value="Seterusnya >>" />
                    </div>

                </form>
                </div>

            </div>
        </div>

        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Status Maklumat Hari ini</h4></div>
                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Pejabat Penjara</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statuses as $status)

                            @if($status['status'] == 'TELAH DIREKOD')
                                <?php $class = " class = 'alert alert-success'"; ?>
                            @else
                                <?php $class = " class = 'alert alert-danger'"; ?>
                            @endif

                            <tr {!! $class !!}>
                                <td>{{ $bil++ }}</td>
                                <td>{{ $status['cawangan'] }}</td>
                                <td>{{ $status['status'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xs-4">

            <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

            <script>

                $(function () {

                    $(document).ready(function () {

                        // Build the chart
                        $('#container').highcharts(
                            {!! json_encode($yourFirstChart) !!}
                        );
                    });
                });
            </script>





        </div>
    </div>



@stop