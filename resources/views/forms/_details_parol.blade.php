@if(empty($datas))
    <tr>
        <td>Banduan PSP Parol</td>
        <td>Parol</td>
        <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="0" id="BParol_1" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="0" id="BParol_2" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_15_1" min="0" max="1000" value="0" id="BParol_3" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_15_2" min="0" max="1000" value="0" id="BParol_4" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_15_1" min="0" max="1000" value="0" id="BParol_5" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_15_2" min="0" max="1000" value="0" id="BParol_6" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_15_1" min="0" max="1000" value="0" id="BParol_7" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_15_2" min="0" max="1000" value="0" id="BParol_8" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_15_1" min="0" max="1000" value="0" id="BParol_9" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_15_2" min="0" max="1000" value="0" id="BParol_10" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="15_jumlah" min="0" max="1000" value="0" id="BParol_jumlah" readonly /></td>
    </tr>
@endif

@if(!empty($datas))
    <tr>
        <td>Banduan PSP Parol</td>
        <td>Parol</td>
        <td><input class="form-control input-sm" type="number" name="1_1_15_1" min="0" max="1000" value="{{ $datas[140]['1_1_15_1'] }}" id="BParol_1" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_15_2" min="0" max="1000" value="{{ $datas[143]['1_1_15_2'] }}" id="BParol_2" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_15_1" min="0" max="1000" value="{{ $datas[141]['1_2_15_1'] }}" id="BParol_3" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_15_2" min="0" max="1000" value="{{ $datas[144]['1_2_15_2'] }}" id="BParol_4" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_15_1" min="0" max="1000" value="{{ $datas[142]['1_3_15_1'] }}" id="BParol_5" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_15_2" min="0" max="1000" value="{{ $datas[145]['1_3_15_2'] }}" id="BParol_6" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_15_1" min="0" max="1000" value="{{ $datas[146]['2_4_15_1'] }}" id="BParol_7" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_15_2" min="0" max="1000" value="{{ $datas[147]['2_4_15_2'] }}" id="BParol_8" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_15_1" min="0" max="1000" value="{{ $datas[148]['3_4_15_1'] }}" id="BParol_9" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_15_2" min="0" max="1000" value="{{ $datas[149]['3_4_15_2'] }}" id="BParol_10" onkeyup="addBParol()" onchange="addBParol()" /></td>
        <?php $jumlah = $datas[140]['1_1_15_1'] + $datas[143]['1_1_15_2'] + $datas[141]['1_2_15_1'] + $datas[144]['1_2_15_2'] + $datas[142]['1_3_15_1']
                + $datas[145]['1_3_15_2'] + $datas[146]['2_4_15_1'] + $datas[147]['2_4_15_2'] + $datas[148]['3_4_15_1'] + $datas[149]['3_4_15_2']; ?>
        <td><input class="form-control input-sm" type="number" name="15_jumlah" min="0" max="1000" value="{{ $jumlah }}" id="BParol_jumlah" readonly /></td>
    </tr>
@endif
<script>

    function addBParol()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('BParol_' + i).value);
        }

        document.getElementById('BParol_jumlah').value = parseInt(values);
    }

</script>