
            <tr>
                <td>PPD Kota Setar</td>
                <td align="center">{{ $datas[0]['1_1_17_1'] }}</td>
                <td align="center">{{ $datas[1]['1_1_17_2'] }}</td>
                <td align="center">{{ $datas[2]['1_2_17_1'] }}</td>
                <td align="center">{{ $datas[3]['1_2_17_2'] }}</td>
                <td align="center">{{ $datas[4]['1_3_17_1'] }}</td>
                <td align="center">{{ $datas[5]['1_3_17_2'] }}</td>
                <?php $jumlah = $datas[0]['1_1_17_1'] + $datas[1]['1_1_17_2'] + $datas[2]['1_2_17_1'] + $datas[3]['1_2_17_2'] +
                        $datas[4]['1_3_17_1'] + $datas[5]['1_3_17_2']; ?>
                <td align="center"><strong>{{ $jumlah }}</strong></td>
            </tr>
            <tr>
                <td>PPD Pendang</td>
                <td align="center">{{ $datas[6]['1_1_18_1'] }}</td>
                <td align="center">{{ $datas[7]['1_1_18_2'] }}</td>
                <td align="center">{{ $datas[8]['1_2_18_1'] }}</td>
                <td align="center">{{ $datas[9]['1_2_18_2'] }}</td>
                <td align="center">{{ $datas[10]['1_3_18_1'] }}</td>
                <td align="center">{{ $datas[11]['1_3_18_2'] }}</td>
                <?php $jumlah = $datas[6]['1_1_18_1'] + $datas[7]['1_1_18_2'] + $datas[8]['1_2_18_1'] + $datas[9]['1_2_18_2'] +
                        $datas[10]['1_3_18_1'] + $datas[11]['1_3_18_2']; ?>
                <td align="center"><strong>{{ $jumlah }}</strong></td>
            </tr>
            <tr>
                <td>PPD Spetani</td>
                <td align="center">{{ $datas[12]['1_1_19_1'] }}</td>
                <td align="center">{{ $datas[13]['1_1_19_2'] }}</td>
                <td align="center">{{ $datas[14]['1_2_19_1'] }}</td>
                <td align="center">{{ $datas[15]['1_2_19_2'] }}</td>
                <td align="center">{{ $datas[16]['1_3_19_1'] }}</td>
                <td align="center">{{ $datas[17]['1_3_19_2'] }}</td>
                <?php $jumlah = $datas[12]['1_1_19_1'] + $datas[13]['1_1_19_2'] + $datas[14]['1_2_19_1'] + $datas[15]['1_2_19_2'] +
                        $datas[16]['1_3_19_1'] + $datas[17]['1_3_19_2']; ?>
                <td align="center"><strong>{{ $jumlah }}</strong></td>
            </tr>
            <tr>
                <td>PPD Baling</td>
                <td align="center">{{ $datas[18]['1_1_20_1'] }}</td>
                <td align="center">{{ $datas[19]['1_1_20_2'] }}</td>
                <td align="center">{{ $datas[20]['1_2_20_1'] }}</td>
                <td align="center">{{ $datas[21]['1_2_20_2'] }}</td>
                <td align="center">{{ $datas[22]['1_3_20_1'] }}</td>
                <td align="center">{{ $datas[23]['1_3_20_2'] }}</td>
                <?php $jumlah = $datas[18]['1_1_20_1'] + $datas[19]['1_1_20_2'] + $datas[20]['1_2_20_1'] + $datas[21]['1_2_20_2'] +
                        $datas[22]['1_3_20_1'] + $datas[23]['1_3_20_2']; ?>
                <td align="center"><strong>{{ $jumlah }}</strong></td>
            </tr>
        </tbody>
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
        <tr>
            <td>RP</td>
            <td align="center">{{ $datas[24]['1_1_21_1'] }}</td>
            <td align="center">{{ $datas[25]['1_1_21_2'] }}</td>
            <td align="center">{{ $datas[26]['1_2_21_1'] }}</td>
            <td align="center">{{ $datas[27]['1_2_21_2'] }}</td>
            <td align="center">{{ $datas[28]['1_3_21_1'] }}</td>
            <td align="center">{{ $datas[29]['1_3_21_2'] }}</td>
            <?php $jumlah = $datas[24]['1_1_21_1'] + $datas[25]['1_1_21_2'] + $datas[26]['1_2_21_1'] + $datas[27]['1_2_21_2'] +
                    $datas[28]['1_3_21_1'] + $datas[29]['1_3_21_2']; ?>
            <td align="center"><strong>{{ $jumlah }}</strong></td>
        </tr>
        <tr>
            <td>Kem Kemasyarakatan</td>
            <td align="center">{{ $datas[30]['1_1_22_1'] }}</td>
            <td align="center">{{ $datas[31]['1_1_22_2'] }}</td>
            <td align="center">{{ $datas[32]['1_2_22_1'] }}</td>
            <td align="center">{{ $datas[33]['1_2_22_2'] }}</td>
            <td align="center">{{ $datas[34]['1_3_22_1'] }}</td>
            <td align="center">{{ $datas[35]['1_3_22_2'] }}</td>
            <?php $jumlah = $datas[30]['1_1_22_1'] + $datas[31]['1_1_22_2'] + $datas[32]['1_2_22_1'] + $datas[33]['1_2_22_2'] +
                    $datas[34]['1_3_22_1'] + $datas[35]['1_3_22_2']; ?>
            <td align="center"><strong>{{ $jumlah }}</strong></td>
        </tr>
        <tr>
            <td>PKW</td>
            <td align="center">{{ $datas[36]['1_1_23_1'] }}</td>
            <td align="center">{{ $datas[37]['1_1_23_2'] }}</td>
            <td align="center">{{ $datas[38]['1_2_23_1'] }}</td>
            <td align="center">{{ $datas[39]['1_2_23_2'] }}</td>
            <td align="center">{{ $datas[40]['1_3_23_1'] }}</td>
            <td align="center">{{ $datas[41]['1_3_23_2'] }}</td>
            <?php $jumlah = $datas[36]['1_1_23_1'] + $datas[37]['1_1_23_2'] + $datas[38]['1_2_23_1'] + $datas[39]['1_2_23_2'] +
                    $datas[40]['1_3_23_1'] + $datas[41]['1_3_23_2']; ?>
            <td align="center"><strong>{{ $jumlah }}</strong></td>
        </tr>

