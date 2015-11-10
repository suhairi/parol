@extends('layouts.members')


@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Details</div>

                Flag : {{ $flag }}
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
                            <th rowspan="3" width="300">Perkara</th>
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
                        <!-- Warga -> Bangsa -> jantina -> Lokasi -->
                        <tr>
                            <td>PPD Kota Setar</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_1" min="0" max="1000" value="0" id="BParol_1_1" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_1" min="0" max="1000" value="0" id="BParol_1_2" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_1" min="0" max="1000" value="0" id="BParol_1_3" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_1" min="0" max="1000" value="0" id="BParol_1_4" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_1" min="0" max="1000" value="0" id="BParol_1_5" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_1" min="0" max="1000" value="0" id="BParol_1_6" onkeyup="addParol_1()" onchange="addParol_1()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_jumlah" min="0" max="1000" value="0" id="BParol_1_jumlah" readonly/></td>
                        </tr>
                        <tr>
                            <td>PPD Pendang</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_2" min="0" max="1000" value="0" id="BParol_2_1" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_2" min="0" max="1000" value="0" id="BParol_2_2" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_2" min="0" max="1000" value="0" id="BParol_2_3" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_2" min="0" max="1000" value="0" id="BParol_2_4" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_2" min="0" max="1000" value="0" id="BParol_2_5" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_2" min="0" max="1000" value="0" id="BParol_2_6" onkeyup="addParol_2()" onchange="addParol_2()" /></td>
                            <td><input class="form-control input-sm" type="number" name="2_jumlah" min="0" max="1000" value="0" id="BParol_2_jumlah" readonly/></td>
                        </tr>
                        <tr>
                            <td>PPD Spetani</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_3" min="0" max="1000" value="0" id="BParol_3_1" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_3" min="0" max="1000" value="0" id="BParol_3_2" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_3" min="0" max="1000" value="0" id="BParol_3_3" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_3" min="0" max="1000" value="0" id="BParol_3_4" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_3" min="0" max="1000" value="0" id="BParol_3_5" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_3" min="0" max="1000" value="0" id="BParol_3_6" onkeyup="addParol_3()" onchange="addParol_3()" /></td>
                            <td><input class="form-control input-sm" type="number" name="3_jumlah" min="0" max="1000" value="0" id="BParol_3_jumlah" readonly/></td>
                        </tr>
                        <tr>
                            <td>PPD Baling</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_4" min="0" max="1000" value="0" id="BParol_4_1" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_4" min="0" max="1000" value="0" id="BParol_4_2" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_4" min="0" max="1000" value="0" id="BParol_4_3" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_4" min="0" max="1000" value="0" id="BParol_4_4" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_4" min="0" max="1000" value="0" id="BParol_4_5" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_4" min="0" max="1000" value="0" id="BParol_4_6" onkeyup="addParol_4()" onchange="addParol_4()" /></td>
                            <td><input class="form-control input-sm" type="number" name="4_jumlah" min="0" max="1000" value="0" id="BParol_4_jumlah" readonly/></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead class="alert alert-info">
                        <tr align="center">
                            <th rowspan="3" width="300">Perkara</th>
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
                        <tr>
                            <td>RP</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_5" min="0" max="1000" value="0" id="BParol_5_1" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_5" min="0" max="1000" value="0" id="BParol_5_2" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_5" min="0" max="1000" value="0" id="BParol_5_3" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_5" min="0" max="1000" value="0" id="BParol_5_4" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_5" min="0" max="1000" value="0" id="BParol_5_5" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_5" min="0" max="1000" value="0" id="BParol_5_6" onkeyup="addParol_5()" onchange="addParol_5()" /></td>
                            <td><input class="form-control input-sm" type="number" name="5_jumlah" min="0" max="1000" value="0" id="BParol_5_jumlah" readonly/></td>
                        </tr>
                        <tr>
                            <td>Kem Kemasyarakatan</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_6" min="0" max="1000" value="0" id="BParol_6_1" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_6" min="0" max="1000" value="0" id="BParol_6_2" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_6" min="0" max="1000" value="0" id="BParol_6_3" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_6" min="0" max="1000" value="0" id="BParol_6_4" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_6" min="0" max="1000" value="0" id="BParol_6_5" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_6" min="0" max="1000" value="0" id="BParol_6_6" onkeyup="addParol_6()" onchange="addParol_6()" /></td>
                            <td><input class="form-control input-sm" type="number" name="6_jumlah" min="0" max="1000" value="0" id="BParol_6_jumlah" readonly/></td>
                        </tr>
                        <tr>
                            <td>PKW</td>
                            <td><input class="form-control input-sm" type="number" name="1_1_1_7" min="0" max="1000" value="0" id="BParol_7_1" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_1_2_7" min="0" max="1000" value="0" id="BParol_7_2" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_1_7" min="0" max="1000" value="0" id="BParol_7_3" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_2_2_7" min="0" max="1000" value="0" id="BParol_7_4" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_1_7" min="0" max="1000" value="0" id="BParol_7_5" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="1_3_2_7" min="0" max="1000" value="0" id="BParol_7_6" onkeyup="addParol_7()" onchange="addParol_7()" /></td>
                            <td><input class="form-control input-sm" type="number" name="7_jumlah" min="0" max="1000" value="0" id="BParol_7_jumlah" readonly/></td>
                        </tr>
                        </tbody>
                    </table>


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