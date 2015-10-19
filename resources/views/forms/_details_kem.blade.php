@if(empty($datas))
<tr>
    <td>BANDUAN KEM</td>
    <td>Kem</td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_1" min="0" max="10000" value="0" id="kem_1" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_2" min="0" max="10000" value="0" id="kem_2" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_1" min="0" max="10000" value="0" id="kem_3" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_2" min="0" max="10000" value="0" id="kem_4" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_1" min="0" max="10000" value="0" id="kem_5" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_2" min="0" max="10000" value="0" id="kem_6" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_1" min="0" max="10000" value="0" id="kem_7" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_2" min="0" max="10000" value="0" id="kem_8" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_1" min="0" max="10000" value="0" id="kem_9" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_2" min="0" max="10000" value="0" id="kem_10" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="16_jumlah" min="0" max="10000" value="0" id="kem_jumlah" readonly /></td>
</tr>
@endif

@if(!empty($datas))
<tr>
    <td>BANDUAN KEM</td>
    <td>Kem</td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_1" min="0" max="10000" value="{{ $datas[150]['1_1_16_1'] }}" id="kem_1" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_16_2" min="0" max="10000" value="{{ $datas[153]['1_1_16_2'] }}" id="kem_2" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_1" min="0" max="10000" value="{{ $datas[151]['1_2_16_1'] }}" id="kem_3" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_16_2" min="0" max="10000" value="{{ $datas[154]['1_2_16_2'] }}" id="kem_4" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_1" min="0" max="10000" value="{{ $datas[152]['1_3_16_1'] }}" id="kem_5" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_16_2" min="0" max="10000" value="{{ $datas[155]['1_3_16_2'] }}" id="kem_6" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_1" min="0" max="10000" value="{{ $datas[156]['2_4_16_1'] }}" id="kem_7" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_16_2" min="0" max="10000" value="{{ $datas[157]['2_4_16_2'] }}" id="kem_8" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_1" min="0" max="10000" value="{{ $datas[158]['3_4_16_1'] }}" id="kem_9" onkeyup="addKem()" onchange="addKem()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_16_2" min="0" max="10000" value="{{ $datas[159]['3_4_16_2'] }}" id="kem_10" onkeyup="addKem()" onchange="addKem()" /></td>
    <?php $jumlah = $datas[150]['1_1_16_1'] + $datas[153]['1_1_16_2'] + $datas[151]['1_2_16_1'] + $datas[154]['1_2_16_2'] + $datas[152]['1_3_16_1']
            + $datas[155]['1_3_16_2'] + $datas[156]['2_4_16_1'] + $datas[157]['2_4_16_2'] + $datas[158]['3_4_16_1'] + $datas[159]['3_4_16_2']; ?>
    <td><input class="form-control input-sm" type="number" name="16_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="kem_jumlah" readonly /></td>
</tr>
@endif

<script>

    function addKem()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('kem_' + i).value);
        }

        document.getElementById('kem_jumlah').value = parseInt(values);
    }
</script>