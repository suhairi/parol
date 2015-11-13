
<tr>
    <td>Kem</td>
    <td align="center">{{ $datas[150]['1_1_16_1'] }}</td>
    <td align="center">{{ $datas[153]['1_1_16_2'] }}</td>
    <td align="center">{{ $datas[151]['1_2_16_1'] }}</td>
    <td align="center">{{ $datas[154]['1_2_16_2'] }}</td>
    <td align="center">{{ $datas[152]['1_3_16_1'] }}</td>
    <td align="center">{{ $datas[155]['1_3_16_2'] }}</td>
    <td align="center">{{ $datas[156]['2_4_16_1'] }}</td>
    <td align="center">{{ $datas[157]['2_4_16_2'] }}</td>
    <td align="center">{{ $datas[158]['3_4_16_1'] }}</td>
    <td align="center">{{ $datas[159]['3_4_16_2'] }}</td>
    <?php $jumlah = $datas[150]['1_1_16_1'] + $datas[153]['1_1_16_2'] + $datas[151]['1_2_16_1'] + $datas[154]['1_2_16_2'] + $datas[152]['1_3_16_1']
            + $datas[155]['1_3_16_2'] + $datas[156]['2_4_16_1'] + $datas[157]['2_4_16_2'] + $datas[158]['3_4_16_1'] + $datas[159]['3_4_16_2']; ?>
    <td align="center"><strong>{{ $jumlah }}</strong></td>
</tr>
