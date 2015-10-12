@extends('layouts.members')

@section('content');

    @include('errors._notifications')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Rekod Maklumat</h4></div>
                <div class="panel-body">

                <form method="post" action="{{ route('members.rekod.indexPost') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="tarikh">Tarikh</label>
                        <input class="form-control" type="date" name="tarikh" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cawangan">Pejabat</label>
                        <select class="form-control" name="cawangan_id">
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
            &nbsp;
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

                                @if($status['status'] == 'DIREKOD')
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
    </div>

@stop