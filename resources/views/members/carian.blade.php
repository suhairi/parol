@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-4">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Carian</h4></div>
                <div class="panel-body">
                    <form action="{{ route('members.carianPost') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                        <div class="form-group">
                            <label for="tarikh">Tarikh</label>
                            <input class="form-control" type="date" name="tarikh" placeholder="Tarikh" required />
                        </div>
                        <div class="form-group" align="right">
                            <input class="btn btn-primary" type="submit" value="Cari"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop