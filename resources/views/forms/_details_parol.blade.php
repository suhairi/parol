<tr>
    <td>Banduan PSP Parol</td>
    <td>Parol</td>
    <td><input class="form-control input-sm" type="number" name="1_1_14_1" min="0" max="1000" value="0" id="BParol_1" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_1_14_2" min="0" max="1000" value="0" id="BParol_2" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_14_1" min="0" max="1000" value="0" id="BParol_3" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_2_14_2" min="0" max="1000" value="0" id="BParol_4" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_14_1" min="0" max="1000" value="0" id="BParol_5" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="1_3_14_2" min="0" max="1000" value="0" id="BParol_6" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_14_1" min="0" max="1000" value="0" id="BParol_7" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="2_4_14_2" min="0" max="1000" value="0" id="BParol_8" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_14_1" min="0" max="1000" value="0" id="BParol_9" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="3_4_14_2" min="0" max="1000" value="0" id="BParol_10" onkeyup="addBParol()" onchange="addBParol()" /></td>
    <td><input class="form-control input-sm" type="number" name="14_jumlah" min="0" max="1000" value="0" id="BParol_jumlah" readonly /></td>
</tr>
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