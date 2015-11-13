
<tr>
    <td>Muda</td>
    <td align="center">{{ $datas[130]['1_1_14_1'] }}</td>
    <td align="center">{{ $datas[133]['1_1_14_2'] }}</td>
    <td align="center">{{ $datas[131]['1_2_14_1'] }}</td>
    <td align="center">{{ $datas[134]['1_2_14_2'] }}</td>
    <td align="center">{{ $datas[132]['1_3_14_1'] }}</td>
    <td align="center">{{ $datas[135]['1_3_14_2'] }}</td>
    <td align="center">{{ $datas[136]['2_4_14_1'] }}</td>
    <td align="center">{{ $datas[137]['2_4_14_2'] }}</td>
    <td align="center">{{ $datas[138]['3_4_14_1'] }}</td>
    <td align="center">{{ $datas[139]['3_4_14_2'] }}</td>
    <?php $jumlah = $datas[130]['1_1_14_1'] + $datas[133]['1_1_14_2'] + $datas[131]['1_2_14_1'] + $datas[134]['1_2_14_2'] + $datas[132]['1_3_14_1']
            + $datas[135]['1_3_14_2'] + $datas[136]['2_4_14_1'] + $datas[137]['2_4_14_2'] + $datas[138]['3_4_14_1'] + $datas[139]['3_4_14_2']; ?>
    <td align="center"><strong>{{ $jumlah }}</strong></td>
</tr>
