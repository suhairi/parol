@if(empty($datas))
    <tr>
        <td>BANDUAN MUDA</td>
        <td>Muda</td>
        <td><input class="form-control input-sm" type="number" name="1_1_14_1" min="0" max="10000" value="0" id="muda_1" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_14_2" min="0" max="10000" value="0" id="muda_2" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_14_1" min="0" max="10000" value="0" id="muda_3" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_14_2" min="0" max="10000" value="0" id="muda_4" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_14_1" min="0" max="10000" value="0" id="muda_5" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_14_2" min="0" max="10000" value="0" id="muda_6" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_14_1" min="0" max="10000" value="0" id="muda_7" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_14_2" min="0" max="10000" value="0" id="muda_8" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_14_1" min="0" max="10000" value="0" id="muda_9" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_14_2" min="0" max="10000" value="0" id="muda_10" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="14_jumlah" min="0" max="10000" value="0" id="muda_jumlah" readonly /></td>
    </tr>
@endif

@if(!empty($datas))
    <tr>
        <td>BANDUAN MUDA</td>
        <td>Muda</td>
        <td><input class="form-control input-sm" type="number" name="1_1_14_1" min="0" max="10000" value="{{ $datas[130]['1_1_14_1'] }}" id="muda_1" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_1_14_2" min="0" max="10000" value="{{ $datas[133]['1_1_14_2'] }}" id="muda_2" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_14_1" min="0" max="10000" value="{{ $datas[131]['1_2_14_1'] }}" id="muda_3" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_2_14_2" min="0" max="10000" value="{{ $datas[134]['1_2_14_2'] }}" id="muda_4" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_14_1" min="0" max="10000" value="{{ $datas[132]['1_3_14_1'] }}" id="muda_5" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="1_3_14_2" min="0" max="10000" value="{{ $datas[135]['1_3_14_2'] }}" id="muda_6" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_14_1" min="0" max="10000" value="{{ $datas[136]['2_4_14_1'] }}" id="muda_7" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="2_4_14_2" min="0" max="10000" value="{{ $datas[137]['2_4_14_2'] }}" id="muda_8" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_14_1" min="0" max="10000" value="{{ $datas[138]['3_4_14_1'] }}" id="muda_9" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <td><input class="form-control input-sm" type="number" name="3_4_14_2" min="0" max="10000" value="{{ $datas[139]['3_4_14_2'] }}" id="muda_10" onkeyup="addMuda()" onchange="addMuda()" /></td>
        <?php $jumlah = $datas[130]['1_1_14_1'] + $datas[133]['1_1_14_2'] + $datas[131]['1_2_14_1'] + $datas[134]['1_2_14_2'] + $datas[132]['1_3_14_1']
                + $datas[135]['1_3_14_2'] + $datas[136]['2_4_14_1'] + $datas[137]['2_4_14_2'] + $datas[138]['3_4_14_1'] + $datas[139]['3_4_14_2']; ?>
        <td><input class="form-control input-sm" type="number" name="14_jumlah" min="0" max="10000" value="{{ $jumlah }}" id="muda_jumlah" readonly /></td>
    </tr>
@endif
<script>

    function addMuda()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('muda_' + i).value);
        }

        document.getElementById('muda_jumlah').value = parseInt(values);
    }
</script>