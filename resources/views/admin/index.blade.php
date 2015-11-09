@extends('layouts.members')

@section('content')

    <div class="row">

        <div class="col-xs-2">&nbsp;</div>

        <div class="col-xs-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><h1>Ringkasan</h1></div>
                <div class="panel-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="3" bgcolor="#DDD">Muster Utama</th>
                            </tr>
                        </thead>
                        <tr>
                            <th>Bil</th>
                            <th>Institusi</th>
                            <th>Jumlah</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Alor Setar</td>
                            <td>1250</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Pokok Sena</td>
                            <td>2107</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Sungai Petani</td>
                            <td>987</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Parol</td>
                            <td>34</td>
                        </tr>
                    </table>
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="3" bgcolor="#DDD">Muster Sampingan</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>1.</td>
                            <td>Dadah</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Parol</td>
                            <td>545</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>POCA</td>
                            <td>7</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>


        <meta http-equiv="refresh" content="60; url={{ route('admin.ringkasan2') }} ">



    </div>


@stop