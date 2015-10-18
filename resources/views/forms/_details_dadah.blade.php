<tr>
    <td>DADAH</td>
    <td>Dadah</td>
    <td><input class="form-control input-sm" type="number" name="1_1_13_1" min="0" max="1000" value="0" id="dadah_1" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_13_2" min="0" max="1000" value="0" id="dadah_2" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_13_1" min="0" max="1000" value="0" id="dadah_3" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_13_2" min="0" max="1000" value="0" id="dadah_4" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_13_1" min="0" max="1000" value="0" id="dadah_5" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_13_2" min="0" max="1000" value="0" id="dadah_6" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_13_1" min="0" max="1000" value="0" id="dadah_7" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_13_2" min="0" max="1000" value="0" id="dadah_8" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_13_1" min="0" max="1000" value="0" id="dadah_9" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_13_2" min="0" max="1000" value="0" id="dadah_10" onkeyup="addDadah()" onchange="addDadah()" /></td>
    <td><input class="form-control input-sm" type="number" name="13_jumlah" min="0" max="1000" value="0" id="dadah_jumlah" readonly /></td>
</tr>

<script>

    function addDadah()
    {
        values = 0;

        for(i=1; i<=10; i++)
        {
            values += parseInt(document.getElementById('dadah_' + i).value);
        }

        document.getElementById('dadah_jumlah').value = parseInt(values);
    }
</script>
