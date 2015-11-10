@extends('layouts.members')


@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Details</div>

                Flag : {{ $flag }}
                {{--{{ dd($datas) }}--}}
                <div class="panel-body">

                    @if($flag == false)
                        <form method="post" action="{{ route('members.rekod.parol.post') }}">
                    @else
                        <form method="post" action="{{ route('members.rekod.parol.update') }}">
                    @endif
                    {{ csrf_field() }}
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
                        <!-- Warga -> Bangsa -> jantina -> Lokasi (Kesalahan_id = 0) -->
                        @include('forms._details_parol1');
                        </tbody>
                    </table>
                    <div align="right"><button type="submit" class="btn btn-primary">Kemaskini Rekod</button> </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>

        function addParol_1()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_1_' + i).value);
            }

            document.getElementById('BParol_1_jumlah').value = parseInt(values);
        }

        function addParol_2()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_2_' + i).value);
            }

            document.getElementById('BParol_2_jumlah').value = parseInt(values);
        }

        function addParol_3()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_3_' + i).value);
            }

            document.getElementById('BParol_3_jumlah').value = parseInt(values);
        }

        function addParol_4()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_4_' + i).value);
            }

            document.getElementById('BParol_4_jumlah').value = parseInt(values);
        }

        function addParol_5()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_5_' + i).value);
            }

            document.getElementById('BParol_5_jumlah').value = parseInt(values);
        }

        function addParol_6()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_6_' + i).value);
            }

            document.getElementById('BParol_6_jumlah').value = parseInt(values);
        }

        function addParol_7()
        {
            values = 0;

            for(i=1; i<=6; i++)
            {
                values += parseInt(document.getElementById('BParol_7_' + i).value);
            }

            document.getElementById('BParol_7_jumlah').value = parseInt(values);
        }










    </script>





@stop