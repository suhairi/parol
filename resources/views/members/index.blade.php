@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Welcome</h4>
                </div>
                <div class="panel-body">
                    <h4>Welcome {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
@stop